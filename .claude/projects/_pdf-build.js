// One-off: convert eastpoint-fnc-proposal-DRAFT.md to a styled HTML for PDF print.
// No external deps. Handles only the markdown features used in this proposal.

const fs = require('fs');
const path = require('path');

const SRC = path.join(__dirname, 'eastpoint-fnc-proposal-DRAFT.md');
const OUT_HTML = path.join(__dirname, '_eastpoint-fnc-proposal.html');

const md = fs.readFileSync(SRC, 'utf8');

// Inline formatting: bold, italic, [bracketed].
function inline(s) {
  // escape HTML first
  s = s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
  // bold first (so ** doesn't get eaten by single *)
  s = s.replace(/\*\*([^*]+)\*\*/g, '<strong>$1</strong>');
  // italic
  s = s.replace(/(^|[^*])\*([^*\n]+)\*/g, '$1<em>$2</em>');
  return s;
}

// Convert markdown to HTML chunks
const lines = md.split(/\r?\n/);
let html = '';
let i = 0;

function consumeList() {
  // returns concatenated HTML for one or more consecutive list items including 2-space indented children
  let out = '<ul>';
  while (i < lines.length) {
    const line = lines[i];
    const m = line.match(/^(\s*)-\s+(.*)$/);
    const om = line.match(/^(\s*)(\d+)\.\s+(.*)$/);
    if (!m && !om) break;
    const indent = (m ? m[1] : om[1]).length;
    if (indent >= 2) {
      // nested item — handled by parent
      break;
    }
    const text = m ? m[2] : om[3];
    // Look ahead for nested children
    let item = `<li>${inline(text)}`;
    i++;
    let childItems = '';
    while (i < lines.length) {
      const child = lines[i].match(/^(\s*)-\s+(.*)$/);
      if (child && child[1].length >= 2) {
        childItems += `<li>${inline(child[2])}</li>`;
        i++;
      } else {
        break;
      }
    }
    if (childItems) item += `<ul>${childItems}</ul>`;
    item += '</li>';
    out += item;
  }
  out += '</ul>';
  return out;
}

function consumeOrderedList() {
  let out = '<ol>';
  while (i < lines.length) {
    const line = lines[i];
    const m = line.match(/^(\s*)(\d+)\.\s+(.*)$/);
    if (!m || m[1].length > 0) break;
    let item = `<li>${inline(m[3])}`;
    i++;
    // gather following indented sub-bullets and indented continuation paragraphs
    let nestedHtml = '';
    while (i < lines.length) {
      const child = lines[i].match(/^(\s+)-\s+(.*)$/);
      const blank = lines[i].trim() === '';
      const continuation = lines[i].match(/^\s{3,}\S/);
      if (child) {
        // start a sub <ul>
        let sub = '<ul>';
        while (i < lines.length) {
          const c = lines[i].match(/^(\s+)-\s+(.*)$/);
          if (!c) break;
          sub += `<li>${inline(c[2])}</li>`;
          i++;
        }
        sub += '</ul>';
        nestedHtml += sub;
      } else if (continuation && !blank) {
        // indented continuation paragraph
        nestedHtml += `<p>${inline(lines[i].trim())}</p>`;
        i++;
      } else {
        break;
      }
    }
    if (nestedHtml) item += nestedHtml;
    item += '</li>';
    out += item;
  }
  out += '</ol>';
  return out;
}

while (i < lines.length) {
  const line = lines[i];

  // Blank line
  if (line.trim() === '') { i++; continue; }

  // Horizontal rule
  if (/^---+$/.test(line.trim())) {
    html += '<hr/>';
    i++;
    continue;
  }

  // Headings
  let h = line.match(/^(#{1,6})\s+(.*)$/);
  if (h) {
    const lvl = h[1].length;
    html += `<h${lvl}>${inline(h[2])}</h${lvl}>`;
    i++;
    continue;
  }

  // Unordered list
  if (/^-\s+/.test(line)) {
    html += consumeList();
    continue;
  }

  // Ordered list (top-level, "1. ", "2. ", ...)
  if (/^\d+\.\s+/.test(line)) {
    html += consumeOrderedList();
    continue;
  }

  // Paragraph: gather consecutive non-blank, non-special lines
  let para = [line];
  i++;
  while (i < lines.length) {
    const next = lines[i];
    if (next.trim() === '') break;
    if (/^(#{1,6})\s+/.test(next)) break;
    if (/^---+$/.test(next.trim())) break;
    if (/^-\s+/.test(next)) break;
    if (/^\d+\.\s+/.test(next)) break;
    para.push(next);
    i++;
  }
  html += `<p>${inline(para.join(' '))}</p>`;
}

// Wrap in styled HTML document
const fullHtml = `<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>East Point FNC Website Proposal</title>
<style>
  @page {
    size: A4;
    margin: 22mm 22mm 22mm 22mm;
  }
  html, body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    color: #1a1a1a;
    font-size: 10.5pt;
    line-height: 1.55;
    margin: 0;
  }
  h1 {
    font-size: 24pt;
    font-weight: 700;
    margin: 0 0 6pt 0;
    line-height: 1.2;
    letter-spacing: -0.01em;
  }
  h2 {
    font-size: 16pt;
    font-weight: 700;
    margin: 22pt 0 8pt 0;
    padding-bottom: 4pt;
    border-bottom: 0.5pt solid #d0d0d0;
    line-height: 1.25;
    page-break-after: avoid;
    page-break-before: auto;
  }
  h3 {
    font-size: 12.5pt;
    font-weight: 700;
    margin: 16pt 0 6pt 0;
    line-height: 1.3;
    page-break-after: avoid;
  }
  h4 {
    font-size: 11pt;
    font-weight: 600;
    color: #333;
    margin: 12pt 0 4pt 0;
    page-break-after: avoid;
  }
  p {
    margin: 0 0 8pt 0;
    orphans: 3;
    widows: 3;
  }
  ul, ol {
    margin: 0 0 10pt 0;
    padding-left: 18pt;
  }
  li {
    margin: 0 0 5pt 0;
    page-break-inside: avoid;
  }
  li > ul, li > ol {
    margin-top: 4pt;
    margin-bottom: 4pt;
  }
  li > p {
    margin: 4pt 0;
  }
  strong { font-weight: 700; color: #0d0d0d; }
  em { font-style: italic; }
  hr {
    border: none;
    border-top: 0.5pt solid #d8d8d8;
    margin: 18pt 0;
  }
  /* Tighten the title block at top */
  h1 + p { margin-top: 0; color: #444; font-size: 10pt; }
  /* Avoid widows/orphans where possible */
  h2, h3, h4 { break-after: avoid-page; }
  /* Subtle styling for quoted parenthetical italics like "(parent landing page)" */
</style>
</head>
<body>
${html}
</body>
</html>
`;

fs.writeFileSync(OUT_HTML, fullHtml, 'utf8');
console.log('Wrote', OUT_HTML);

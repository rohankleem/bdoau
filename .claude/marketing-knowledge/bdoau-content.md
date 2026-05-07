# buildio.au Content Inventory

> Per-section inventory of what lives at `buildio.au` — what each surface is for, what content sits there, and how the surfaces relate. Updated as content evolves.
>
> **Status:** Skeleton. To be populated by reading the live site or local theme content (see `public_html/wp-content/themes/buildio2/inc/`).

For the technical theme architecture (templates, partials, build chain) see `.claude/app-knowledge/buildio2-theme.md`.

---

## Surface map

| Surface | URL | What it's for | What lives there |
|---|---|---|---|
| **Homepage** | `/` | First impression, positioning, primary CTA | {TBD: hero, sections — read from `inc/home/*` partials} |
| **Notebook** (blog) | `/{post-slug}/` | Thought leadership, education, demand creation | WP posts |
| **Scrapbook** | `/scrapbook/` | {TBD: case studies? portfolio? something else?} | scrapbook-index template |
| **Contact** | `/contact/` | Convert interested visitors into conversations | contact form, hero |
| **Unipixel pages** | `/unipixel/`, `/unipixel-doc/`, etc. | Cross-brand link to UniPixel plugin | These are present in the theme but `/unipixel/` redirects to `unipixelhq.com` per `.htaccess` rule. Confirm whether the doc/docs-index pages are still used. |
| **SubItem pages** | `/subitem-*` | {TBD — purpose unclear, has ChatGPT integration variants per theme inventory} | subitem-population templates |

---

## Homepage section breakdown

The homepage is composed from partials in `inc/home/` (see `buildio2-theme.md` for the full file list — there are multiple variants per section, suggesting iterative copy A/B work).

> {TBD: Read the active home-page template + its included partials and document what each section actually says/does. Then capture the *intent* of each section (e.g. "Section 3 is the trust-builder for skeptical prospects"). Once captured, future content/UX changes have a frame of reference.}

---

## Notebook content audit

> {TBD: Inventory existing posts. For each: title, topic pillar (per `positioning.md`), audience (Universal / Competitive), date, traffic. Identify gaps — pillars under-served, topics with no coverage.}

---

## Scrapbook content audit

> {TBD: What's in the scrapbook? Case studies? Examples? Visual portfolio? Document the format and current entries.}

---

## Cross-site links

- `/unipixel/` → 301 to `https://unipixelhq.com/` (per `.htaccess`)
- {TBD: any other cross-brand links to buildio.dev or unipixelhq.com}

---

## SEO surface

Implementation captured in `app-knowledge/buildio2-theme.md`. Strategic decisions go in `positioning.md` (target audiences, search intent) and here (which surfaces target which queries).

> {TBD: Map each major surface to the search intent it should capture.}

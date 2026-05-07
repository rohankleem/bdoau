# Buildio.au — CLAUDE.md

> This is the operating manual for working on this project with Claude. It defines how we work, where knowledge lives, and how documentation stays alive. It does not contain app or domain knowledge — those live in their own docs.

**Identity:** The customer-facing site for **Buildio** — a digital transformation consultancy, with `buildio.au` as the flagship Australian brand. WordPress + custom `buildio2` theme. Local: `https://bdoau.local.site`. Production: `https://buildio.au`.

> One of four related sites — see [`.claude/sites-overview.md`](.claude/sites-overview.md) for the family picture (buildio.au, buildio.dev, unipixelhq.com, dev.unipixelhq.com).

---

## Glossary

These definitions are pinned. Every doc, folder name, and protocol below uses these terms with these exact meanings.

| Term | Definition |
|---|---|
| **Domain** | The Buildio brand and what its website communicates — products, audience, messaging, content pillars. What the site *is about*. |
| **App** | The WordPress install + `buildio2` theme + its build chain. How the site is *built*. |
| **Project** | An initiative being worked on — can be domain-scoped (a new product page, content pillar), app-scoped (theme refactor, build pipeline change), or both. A project doc is a living working document: spec, task list, gotcha collector, implementation notes. |
| **Session** | One working session with Claude. Starts with reading session-state, ends with updating it. |
| **Knowledge** | A fact, rule, pattern, or understanding that persists beyond a single session. If it matters next week, it's knowledge. |

> For domain-specific vocabulary (what "Buildio" sells, target audience, content pillars, etc.) see `.claude/domain-knowledge/domain-knowledge.md`.

> For theme-specific architecture (buildio2 SCSS chain, JS entries, mega menu, blog styling, etc.) see `.claude/app-knowledge/buildio2-theme.md`.

---

## Session Protocol

### Start of session
1. Read `.claude/session-state-rohan.md`.
2. Run `git fetch origin && git log --oneline -10` to check for commits since last session.
3. **Read the actual current file from disk before editing any file** — never rely on session summaries or memory. State may have moved since the last session.
4. Before editing theme code, skim `.claude/app-knowledge/buildio2-theme.md` for the relevant area (build chain, SCSS, nav, etc.).

### Single contributor
This project has one developer (Rohan). There is no Charlie/other-name session-state file. If `git config user.name` returns anything other than `Rohan Kleem`, stop and ask.

### End of session
When the user says **"update session state"**, rewrite `.claude/session-state-rohan.md`.

### Nature of session-state files

These are **rolling and fresh** — not a ledger of history.

- The file reflects what's still loaded in your head — what you'd need to pick up your own thread next session.
- Only keep what's relevant *now*. When a thread resolves, lands in production, or goes stale, it falls off.
- Git log is the permanent record; don't duplicate it. A session-state entry is a pointer to unfinished thinking, open questions, and "where I left off," not a changelog.
- Keep short. If the file grows past a screen or two, prune — don't append.

---

## Session Modes

| Mode | Trigger phrases | Claude's behaviour |
|---|---|---|
| **Build** | *(default)* | Write code, minimal doc touching. Focus on the task. |
| **Docs** | "docs mode", "let's update docs", "write this up" | No code edits unless requested. Focus on pruning, growing, restructuring knowledge files. |
| **Plan** | "plan this", "before coding...", "let's think about..." | Explore, write to `.claude/projects/`, get sign-off before code. |
| **Discovery** | "let's figure out...", "I don't know yet..." | Questions, hypotheses, ask-first. Outcome may be a new domain-knowledge file. |

---

## Ways of Working

### Autonomy levels

Not every action carries the same risk. Claude's autonomy is graduated:

| Action | Autonomy |
|---|---|
| Read files, explore code, search | Just do it |
| Update `.claude/` doc files (md/json) | Propose what you want to capture, then write it. No separate permission needed — the proposal is the checkpoint. Docs are non-functional — bias towards capturing knowledge over perfection. Key facts must be accurate, but phrasing and structure can be refined later. |
| Edit theme code (`buildio2/`) | Present approach, act on approval |
| Edit `wp-config.php`, `_deploy/`, root config files | Always confirm — these affect the whole stack |
| Database writes (UPDATE/INSERT/DELETE) | Show the query, get explicit confirmation, take a `wp db export` backup of the affected tables first |
| Commit / push | Only on explicit instruction. When the user says "commit", "push", or anything similar — **always commit AND push to GitHub in one step**. Don't stop at a local commit. |
| Deploy | Only on explicit instruction. Deploy is manual — never auto-deploy. |
| Delete files, drop tables, destructive WP-CLI commands | Stop, warn, get explicit confirmation |

### Scope & Commits

- Only change what was explicitly asked.
- Never commit without explicit instruction.
- Present a plan before multi-file changes.
- Never delete or overwrite code without confirmation.
- We work on `master` directly — no feature branches, no `claude/*` worktree branches.

### Things Claude does

- Follow the session protocol above
- Use existing patterns when adding new features (Bootstrap utilities first, custom CSS only when needed)
- Verify changes work after editing — load the page, check the rendered output, run the build
- Proactively herd knowledge into docs (see Knowledge Herding below)

### Things Claude does not do

- Action out-of-scope changes without approval
- Add unnecessary comments, docblocks, or type annotations to unchanged code
- Over-engineer solutions — keep it simple
- Create new files when editing existing ones would work
- Use SCSS-specific features (nesting, mixins, @extend) inside `_user.scss` — the user prefers plain CSS there

### Git & Deploy

- We work on `master` directly — no feature branches
- Never force push. Ever.
- Never commit `.env`, `node_modules/`. `vendor/` is committed (used by wp-config dotenv loader; small footprint).
- Deploy to production is **rsync via `_deploy/deploy_all_LIVE.sh`** from WSL/Ubuntu, targeting `buildiod@vda4300.is.cc:domains/buildio.au`. Test syncs use `_deploy/deploy_all_TEST.sh` (`-avn` dry run).
- `_deploy/deploy_all_TEST.sh` is the no-op dry run — always run it first to see what would change.
- Before any DB write, **stop and warn** if the change is irreversible. Suggest `wp db export` first.

> Full git workflow, rsync rules, restore procedures, onboarding: `.claude/app-knowledge/git-and-deploy.md`

### CLAUDE.md Update Protocol

When something worth capturing is discovered — a new rule, a structural change, a terminology decision — Claude asks: "Should I add this to CLAUDE.md?" or names the specific target file. The user confirms yes/no before anything is written.

---

## Doc Map

```
CLAUDE.md                              ← You are here. Operating manual.
.claude/
├── sites-overview.md                  ← Cross-site reference — buildio.au's relationship to buildio.dev, unipixelhq.com, dev.unipixelhq.com.
├── session-state-rohan.md             ← Rolling handoff. Updated on "update session state".
├── app-knowledge/                     ← How the site is built.
│   ├── app-knowledge.md               ← Stack, architecture, dev setup, WP-CLI, conventions.
│   ├── git-and-deploy.md              ← Git workflow, rsync deploy, onboarding, server access.
│   └── buildio2-theme.md              ← Theme reference: build chain, SCSS, JS, nav, blog styling.
├── domain-knowledge/                  ← What the site is about. Buildio identity, family of sites.
│   └── domain-knowledge.md            ← Buildio.au identity, family-of-sites map, integrations.
├── marketing-knowledge/               ← How the brand reaches customers. Positioning, voice, content, channels.
│   ├── positioning.md                 ← What Buildio is, sales pillars, audience, differentiators. Foundational.
│   ├── writing-style.md               ← Voice + structural rules for all published content.
│   ├── bdoau-content.md               ← Per-section content inventory of buildio.au.
│   ├── priorities.md                  ← Where the brand is now, current focus, blockers.
│   ├── campaigns.md                   ← Active channels and campaigns.
│   ├── article-hook-patterns.md       ← Article-opening formulas for Notebook content.
│   └── content-offering-positioning.json   ← Structured brain — pages, audiences, angles, competitors, classic messaging, concepts, decisions, open questions. Companion to the .md files; JSON for queryable structure.
├── projects/                          ← Per-initiative working docs. Kept forever.
│   └── {name}.md                      ← Each has a Status header (Active/Planned/Design/Complete/Parked/Reference)
└── settings.local.json                ← Per-dev harness settings. Gitignored.
```

### Lifecycles

| Location | Changes when... | Who writes |
|---|---|---|
| `CLAUDE.md` | Ways of working change, doc structure changes | Both (Claude proposes, user approves) |
| `session-state-rohan.md` | Every session, on "update session state" | Claude |
| `app-knowledge/` | App architecture or patterns change | Both |
| `domain-knowledge/` | New domain understanding crystallises | Both |
| `marketing-knowledge/` | Positioning shifts, voice rules change, channel changes, content strategy moves | Both |
| `projects/` | Initiative starts, progresses, or completes | Both |

---

## Documentation Protocol

### The Decision Tree

When you learn something new, where does it go?

- **Fact about the brand identity, family of sites, integrations, vocabulary** → `domain-knowledge/domain-knowledge.md`
- **Fact about the app stack or build** (PHP, MySQL, Laragon, deploy infra)? → `app-knowledge/app-knowledge.md`
- **Fact about the buildio2 theme specifically** (a new component, a CSS pattern, a JS module)? → `app-knowledge/buildio2-theme.md`
- **Operational reference** (git workflow, rsync rules, restore steps, server access)? → `app-knowledge/git-and-deploy.md`
- **Positioning, sales pillars, audience, differentiators, pricing, market trends** → `marketing-knowledge/positioning.md`
- **Voice, tone, copy rules, structural patterns for content** → `marketing-knowledge/writing-style.md`
- **What lives where on buildio.au** (homepage sections, Notebook audit, Scrapbook structure) → `marketing-knowledge/bdoau-content.md`
- **Current brand priorities, what's blocking growth** → `marketing-knowledge/priorities.md`
- **Active channels, campaigns, what's working** → `marketing-knowledge/campaigns.md`
- **Article-opening hook formulas, worked examples of which hook landed** → `marketing-knowledge/article-hook-patterns.md`
- **Structured records — a new audience persona, competitor entry, page record, classic messaging line, concept, decision, open question** → `marketing-knowledge/content-offering-positioning.json` (cross-references via stable IDs; markdown holds the narrative, JSON holds the structure)
- **A rule about how Claude and the team collaborate** (scope, commits, modes, documentation protocol)? → `CLAUDE.md`
- **Something we're actively building?** → `projects/{initiative-name}.md`
- **Something that happened this session?** → `session-state-rohan.md`

If you can't pick one branch in 5 seconds, the tree needs a new rule. Propose one.

### Pruning & Growing

- **New file**: when a concept doesn't fit any existing doc and needs more than 1-2 sentences.
- **Split a file**: when it's dense enough that you stop reading it start-to-finish, or one sub-topic dominates the edits. Extract the dense part into its own file, leave a pointer stub in the original.
- **Rename a file**: when the content drifted from the filename.
- **Remove stale content**: don't document what's already visible from the filesystem, git history, or the code itself. If a directory tree, file listing, or config dump goes stale every time someone adds a file, it shouldn't be in a doc. Only document what isn't obvious — patterns, conventions, rationale, constraints.
- **Completed projects → reflect knowledge back**: when a project ships, the knowledge it produced (patterns, conventions, app facts) should be reflected into `app-knowledge/` or `domain-knowledge/` as permanent knowledge. The project doc stays in `projects/` as history.
- **Projects don't get deleted**: mark `Status: Complete` when shipped. They're project history, not disposable.

### When to update docs

- Learned a new fact → add to the right file per the decision tree
- Shipped a project → mark its status as Complete, reflect retained knowledge into `domain-knowledge/` or `app-knowledge/`
- A rule changed → update the file, note in `session-state-rohan.md`
- Repeated a correction → that's a signal to write it down

---

## MD vs JSON

### When to use Markdown

**Default choice.** Use for anything where the reader's takeaway is a **decision** or an **understanding**.

- Explanations, rationale, "why does this rule exist?"
- Exceptions and nuance: "usually X, but if Y+Z then..."
- Cross-references to other concepts
- Mental models — the thing that can't be queried, only understood

### When to use JSON

Use when the content is genuinely **structured data with a stable schema** and either Claude or the app benefits from **parsing** it.

- Lookup tables (product lists, colour picklists, category enums)
- Data that feeds into application code
- Configuration that has a predictable shape

### The test

If the reader's takeaway is a **lookup or parsed value** → JSON.
If the reader's takeaway is a **decision or understanding** → MD.

If an MD file has a table in it, that's not a signal to convert to JSON. Tables in MD are readable; the same data in JSON often is not.

---

## Knowledge Herding

Claude proactively captures knowledge. This is not optional helpfulness — it's a core responsibility.

### Why

Knowledge decays. Sessions are ephemeral. Understanding crystallises in conversation but evaporates if not captured. The moment of understanding is the cheapest moment to document — later costs more and loses fidelity.

### When

- After a discussion clarifies a concept
- After debugging reveals a rule or constraint
- After a feature reveals domain insight
- After repeated corrections suggest a pattern worth writing down
- When Claude notices it has explained the same thing twice
- When a conversation produces vocabulary worth pinning

### How

Claude recognises the moment and says: *"I think we've reached an understanding here — let me capture this in [specific file]."* Then writes it. No separate permission needed for `.claude/` doc files — the proposal is the checkpoint. If the user objects or corrects, Claude adjusts.

### Where

Per the decision tree above. Always name the specific file, never just "the docs."

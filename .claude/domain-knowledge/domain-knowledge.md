# Buildio — Domain Knowledge

> **Purpose:** Single source of truth for what Buildio *is* — the business, products, audience, and messaging the site communicates. App and infrastructure facts live in `.claude/app-knowledge/`.
>
> **Status:** Skeleton. Most sections are placeholders. Fill in as facts are confirmed in conversation.
>
> **Last updated:** 2026-05-07

---

## 1. Company / Brand Overview

Buildio is a consultancy helping businesses navigate digital transformation for optimisation. `buildio.au` is the **flagship customer-facing brand** — a deliberate resignation to focus on the Australian market, making `.au` the primary identity (with `buildio.dev` playing a supporting role; see Section 4).

- **Brand name:** Buildio
- **Website:** https://buildio.au
- **Local URL:** https://bdoau.local.site
- **Established:** {TBD}
- **HQ / Operations:** {TBD}
- **Phone / Contact:** {TBD}
- **Reputation / Positioning:** Customer-facing consultancy brand for the Australian market

---

## 2. What Buildio Does

Buildio is a **digital transformation consultancy**. The site is the customer-facing window onto that practice — service offerings, case studies / scrapbook, content (Notebook), and contact paths.

> {TBD: Expand — service offerings, engagement model (project, retainer, advisory?), typical engagement size, who the ideal client is.}

---

## 3. Audience

> {TBD: Who is the site for? Trade clients, end consumers, partners, internal team? What are they looking for when they land?}

| Audience segment | What they want |
|---|---|
| {TBD} | {TBD} |

---

## 3a. Family of Sites

Buildio.au is one of four related sites the user runs. Cross-site context lives in [`.claude/sites-overview.md`](../sites-overview.md), but the headlines:

| Site | Role |
|---|---|
| **buildio.au** *(this repo)* | Flagship consultancy brand — customer-facing |
| **buildio.dev** | Supporting role: brand presentation + plugin presentation + backend listener for UniPixel offload services (logging, email sending) |
| **unipixelhq.com** | Marketing site for the UniPixel WordPress plugin (a separate product) |
| **dev.unipixelhq.com** | Plugin development base + central UniPixel docs / recording hub |

All four live on the same InterServer box (`vda4300.is.cc`, user `buildiod`) under DirectAdmin. Local convention: `<name>.local.site` on Laragon.

When this repo references "UniPixel" content (e.g. the `unipixel-main` page templates and the `/unipixel/` 301 redirect to `unipixelhq.com`), that's the cross-brand product link — not something this site owns.

---

## 4. Products / Services / Sections

The site has these top-level content areas (from `buildio2-theme.md`'s page-templates inventory):

| Section | Template | Purpose |
|---|---|---|
| **Home** | `home-page` template + `inc/home/*` partials | {TBD: what's the homepage saying?} |
| **Contact** | `contact` template + `inc/contact/*` | Standard contact page |
| **Unipixel** | `unipixel-main`, `unipixel-doc`, `unipixel-docs-index` | A product line — own marketing pages + documentation. {TBD: what is Unipixel?} |
| **SubItem** | `subitem-population` (+ ChatGPT variants) | Product line with ChatGPT-integration variants. {TBD: explain.} |
| **Scrapbook** | `scrapbook-index` | {TBD: blog-like archive? case studies?} |
| **Blog** | `single.php` → `content-single.php` | Standard WP posts. Styled per `buildio2-theme.md` blog section. |

> The above is structural (drawn from the codebase). Filling in the *purpose* column is the next step for this doc.

---

## 5. Content Pillars / Themes

> {TBD: What topics does Buildio publish about? What's the editorial focus? Brand voice?}

---

## 6. Vocabulary

Pinned terms that mean specific things on this site (analogue to the build app's domain-knowledge vocabulary section).

| Term | Definition |
|---|---|
| **Unipixel** | {TBD: a Buildio product line. Own pages + docs.} |
| **SubItem** | {TBD: a product/feature with ChatGPT integration variants.} |
| **Scrapbook** | {TBD: section purpose unclear from code alone.} |
| **Notebook** | The blog. The mobile sub-menu shows the latest 9 posts as "Notebook" entries (per `buildio2-theme.md`). |

---

## 7. Integrations & Data Flows

> {TBD: External systems that send data into the site, or that the site pushes to.}

Captured so far:
- **Monday.com** — webhook receiver at `/wp-json/custom/v1/monday-webhook`. Purpose unknown — what triggers it, what it does on receipt. {TBD}
- **SMTP** — outbound email via env-configured credentials.

---

## 8. Brand Visual System

> Visual decisions that affect content/design choices. Implementation lives in `.claude/app-knowledge/buildio2-theme.md`.

- **Primary brand colour:** `#711fe6` (per blog heading colour in buildio2-theme.md)
- **Logo:** {TBD: usage rules}
- **Typography:** {TBD: brand body/heading fonts}
- **Tone of voice:** {TBD}

---

## 9. SEO & Discoverability

Implementation captured in `buildio2-theme.md`. Domain-side decisions:

- **Yoast SEO** is the active SEO plugin
- **Sitemap submitted to Google Search Console** (2026-03-20)
- **What's indexed:** posts, pages
- **What's noindexed/excluded:** authors, categories, tags, `/sample-page/`, `/monday-webhook/`
- **URL structure:** posts at root (`/post-name/`), no `/blog/` prefix

> {TBD: Target keywords, traffic goals, current ranking positions, Search Console performance.}

---

## 10. Constraints & Non-Goals

> {TBD: What is Buildio explicitly NOT? Things the site won't do, audiences it doesn't target, products it doesn't sell. Constraints from the business that should shape decisions.}

---

## How this doc grows

This is intentionally sparse. Don't fabricate. As facts are confirmed in conversation:

- Replace `{TBD}` placeholders with the actual content
- Add new sections when a topic doesn't fit any existing one
- When this doc grows past ~300 lines, split — most likely splits: `unipixel.md` and `subitem.md` as their own product docs

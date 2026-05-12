# East Point FNC — Website Proposal

**Status:** Active
**Started:** 2026-05-10
**Client contact:** Glenn McKenzie · 0408 524 994
**Client site:** https://eastpointfnc.com.au/
**Wikipedia:** https://en.wikipedia.org/wiki/East_Point_Football_Club
**Current host:** 61 Design (open to transfer)

---

## 1. What this doc is

A living working doc for the East Point FNC website rebuild proposal. Captures: facts, artifact references, styling notes, talking points, strategy, and ultimately the final proposal copy.

Working method: facts in → strategy out → final proposal at the bottom.

---

## 2. Strategy & approach

### Voice — how the proposal must sound

- **Simple, direct, easy to understand** — no jargon, no waffle.
- **Comprehensive only where it needs to be** — depth where it earns trust, brevity everywhere else.
- **Genuine, authentic** — not a template, not a corporate pitch.
- **An extension of Rohan personally** — written like a person, not an agency.
- **"Straight up and down"** — no spin, no padding, no salesy hedging. The trust comes from the honesty.

### Structural technique — the spine of the proposal

Repeated where it fits, not forced:

1. **Name the problem** they're likely facing — show I understand their world.
2. **Paint the outcome** — what "good" looks like once it's solved.
3. **Position why me** — why I'm qualified and the right person to deliver it.

`Problem → Outcome → Why me.`

---

## 3. The client — East Point FNC

### What they are

- **Australian rules football and netball club**, Ballarat, Victoria.
- Plays in the **Ballarat Football League (BFL)**.
- Home ground: **Eastern Oval, Ballarat East** — Edwardian architecture, character ground.
- Three arms under one club:
  - **Seniors — Kangaroos** (men's)
  - **Juniors — Bulldogs**
  - **Women's — Dragons**

### Heritage (this is the killer angle)

- Formed **2001** through a merger of two historic clubs:
  - **East Ballarat FC** — established **1885**, second-oldest in the BFL, 6 senior premierships.
  - **Golden Point FC** — joined league 1905, 14 senior premierships.
- Combined heritage = **140+ years**, **20 senior premierships** between predecessors.
- **First East Point senior flag in 2018** — earned, after runner-up in 2006, 2007, 2009.
- 2016: Reserves & U18.5 premierships, A Grade netball first senior flag.
- **Six AFL alumni** through the system:
  - James Frawley (Melbourne, Hawthorn, St Kilda)
  - Harry Sharp (Brisbane Lions, Melbourne)
  - Daniel Rioli (Richmond, Gold Coast)
  - Josh Gibcus (Richmond)
  - Jake Neade (Port Adelaide)
  - Nick Hind (St Kilda, Essendon)

> **Strategic read:** This club has a *huge* story — 140 years of heritage, AFL pathway, three communities — and the current site shows almost none of it. The angle isn't "you need a new website," it's *"you're underselling yourselves by an order of magnitude."*

---

## 4. Current state — eastpointfnc.com.au

### Architecture
- **Main site is just a portal** — logo, nav, three links to division sites.
- The four sites:
  - Main: `eastpointfnc.com.au`
  - Seniors: `kangaroos.eastpointfnc.com.au` (subdomain)
  - Juniors: `eastpointbulldogsfnc.com.au` (separate domain)
  - Women's: `eastpointdragonsffc.com.au` (separate domain — note `ffc` not `fnc`)
- WordPress multisite likely behind at least Main + Kangaroos + Bulldogs (`/sites/N/` paths in image URLs). Dragons may be separate.
- **Fragments brand, splits SEO, triples maintenance, confuses members and sponsors.**

### Homepage state
- Essentially empty — no news, fixtures, results, events, sponsors, CTAs.
- Two of three division logos are **placeholder SVGs**.
- Social links present but with no real URLs.
- Copyright 2024 — touched recently but inert.

### Nav (main site)
- Club Home
- History (8 sub-pages: 100 Game Players, B&F, Coaches, Executives, Person of Year, Foundation Members, BFL Awards, Life Members)
- Contact

### Missing entirely
- News / updates · Fixtures & results · Registrations · Sponsor pages · Shop · Donations · Contact form · Events calendar

### Worth keeping
- Three-division structure (logical).
- Historical records (well-organised — one of the few real assets).
- Logo / brand mark.

### Tone of existing copy
- Administrative, formal, no warmth, no storytelling.

### Transactional audit — what exists across all four sites

**Headline finding: there is essentially nothing transactional running today.**

That's actually *good* news for the proposal — no payment system to migrate, no legacy member data, no plugin debt. It's a clean greenfield for the transactional layer.

| Feature | Main | Kangaroos (Sr) | Bulldogs (Jr) | Dragons (W) |
|---|---|---|---|---|
| Membership purchase | — | Link stub, no flow | Absent | Absent |
| Player registration | — | Absent | Absent | Links to **TeamApp** |
| Event tickets | — | Link stub, no flow | Absent | Absent |
| Club room hire booking | — | Link stub ("Function Room") | Absent | Links to **PartyStarVenue** |
| Merchandise / shop | — | "ROO SHOP" link, no products | Static link | Links out |
| Donations | — | Absent | Absent | Absent |
| Contact form | — | Likely | Likely | Likely |
| Sponsorship purchase | — | Stub | Static info | Static info |
| Newsletter signup | — | Absent | Absent | Absent |
| Member portal / login | — | Absent | Absent | Absent |
| Payment processor | None | None | None | None |

### Tools currently in use (off-site)

- **TeamApp** — Bulldogs and Dragons use it for team comms / registration data.
- **PartyStarVenue** — Dragons uses it for function room bookings.
- **SportsTG** — Dragons references it for fixtures/ladder. **Stale** — SportsTG was sunset in 2024 and migrated to PlayHQ league-wide. Strong evidence the Dragons site hasn't been touched in over a year.
- **Facebook, X, Instagram** — referenced but with no real URLs on main portal.

### State by site

- **Main portal** — empty shell, copyright 2024, touched recently but inert.
- **Kangaroos (Seniors)** — most developed of the four. Has a sponsor list (Grilld, KFC, Robin Hood Hotel, Optus). Structural links exist for transactional features but destinations are empty or disabled — a *facade* of transactional capability.
- **Bulldogs (Juniors)** — informational, active news section, links out to TeamApp. Adequate but feature-light.
- **Dragons (Women's)** — content references "2019 a full refurbishment" as recent. Almost certainly abandoned. Most under-served of the three communities.

### What this means for the proposal

1. **Greenfield transactional layer** — we're not replacing a payment system, we're introducing one cleanly.
2. **TeamApp doesn't have to die** — it's a reasonable team comms platform, and members are using it. The website becomes the front door + transactional layer; TeamApp can stay for in-team comms if the committee wants it.
3. **The Dragons site is the strongest argument for consolidation** — it's been abandoned for years because no committee can sustain a fourth website. Consolidation isn't just neater, it's *necessary* for the women's program to have a maintained web presence.
4. **Sponsorship money is real** — Grilld, KFC, Robin Hood Hotel, Optus on the Kangaroos site. Sponsors are paying for fragmented, half-maintained logo placement. Significant value uplift available from a single, polished, directory-style sponsor experience.

---

## 5. Client brief — Glenn McKenzie's email

> "Following are the parameters we have set for our Website rebuild across the three divisions of our club."

### Hosting
- Currently **61 Design**. Glenn says: *"I believe we can transfer to another provider easily enough."* → Transfer is in scope.

### Page list

| # | Page | Notes |
|---|---|---|
| 1 | **Homepage** | Directory hub to the three division pages |
| 2 | **About Us** | Club story |
| 3 | **History** | Club history |
| 4 | **Events** | Annual calendar, approximate dates, links to upcoming events for **ticket purchases** |
| 5 | **Memberships & Player Registration** | Info + benefits + **purchase**. Confirmation email links back to membership info page for future reference |
| 6 | **Sponsors** | Directory with **outbound links** to sponsor sites — referral for supporters |
| 7 | **Club Room Hire** | Photos, inclusions, **booking calendar** |
| 8 | **Merchandise** | Links out to https://locosportswear.com.au |
| 9 | **Contacts** | Numbers, emails, contact form, **per division** |
| 10 | **Resources** | Codes of conduct, policies — **client-updatable** by club members |
| 11 | **News** | **Pulled from Facebook posts** |

### Reference sites Glenn likes
- https://www.ballaratfnc.com.au/ (Ballarat FNC — "Ballarat Swans")
- https://www.northballaratfnc.com.au/ (North Ballarat FNC — "Roosters")

---

## 6. Reference site assessment

### Ballarat FNC — ballaratfnc.com.au

- **Platform:** WordPress + WooCommerce. PlayHQ + NetballConnect for fixtures.
- **Visual feel:** Modern, professional, community-focused — established and trustworthy, not flashy.
- **Nav:** About · Football · Netball · News · Events · Shop · Contact (with division submenus).
- **Strengths:**
  - Equal weighting of football and netball — dual identity handled well.
  - Heritage credential called out: *"3rd oldest continually running football club in Australia."*
  - Active news section (cards with images, recent posts).
  - Clear age-group pathway (Auskick, NetSetGo, U9–U19, junior to senior).
  - Sponsor section in nav and footer — present without overwhelming.
  - Working WooCommerce shop.
- **Weaknesses:**
  - No strong hero treatment / no compelling visual entry point.
  - Fixtures are external (PlayHQ) — engagement leaks off-site.
  - News cards lack publication dates.
  - Generic-WordPress shape, no signature design moves.

### North Ballarat FNC — northballaratfnc.com.au

- **Platform:** Website builder (footer credits **mulcahymarketing.com.au**), CDN-hosted images. Probably Duda/Wix/similar — not custom WP.
- **Visual feel:** Contemporary but institutional. Functional rather than premium. Navy/dark blue + white palette.
- **Homepage flow:** Hero → Season 2026 CTAs → Signed players / fixtures / sponsorship / memberships → Reunion → News → Stats/history → Footer.
- **Strengths:**
  - Heritage emphasised hard — *"Founded in 1882"*, **169 premierships**, **41 AFL/VFL players**, **28 teams, 500+ players** as stat blocks.
  - Reunion / alumni engagement given real estate — pride and history visible.
  - "One Club" concept — links to cricket / wider sports ecosystem.
  - Seasonal focus prioritised ("2026" gets its own nav section).
  - Welcoming tone — *"Come and join us on our journey – History, Fun, Success!"*
- **Weaknesses:**
  - Generic text-based hero, no distinctive visual moment.
  - Sponsors only in the footer — major sponsorship potential underused.
  - Merchandise in nav but not promoted on homepage.
  - Fixtures external (PlayHQ + World Sport Action).
  - Mobile experience uncertain from desktop view.
  - No embedded social feeds despite social icons in footer.

### What Glenn is signalling by referencing these

- **Community-warm, not corporate.** Both reference sites lean welcoming.
- **Heritage stat-blocks land.** North Ballarat's "founded in 1882 / 169 premierships" treatment clearly resonates — and East Point has equivalent material.
- **Conventional information architecture is fine.** Nothing avant-garde — clean nav, news cards, fixtures, sponsors.
- **Both sites lean on PlayHQ / NetballConnect for fixtures** — that's the BFL/Netball Vic norm, not a gap.
- **Both sites underuse sponsors.** Opportunity to do this *better* than the references — measurable client value.

---

## 7. Strategic flags & open questions

### A. The architecture question — biggest scope decision

- Glenn's brief reads as **one consolidated site** covering all three divisions (every page listed once; homepage = "directory" to division pages).
- But the current setup is **one portal + three separate WordPress installs on separate domains**.
- The brief implies consolidation but doesn't say it explicitly.
- **Opportunity:** lead the proposal with a clear recommendation rather than ask the question. *"Here's what we'd build, and here's why one site beats four."*
- **Counter-consideration:** the three divisions may have their own committees who run their own sub-sites today. Politics, not just architecture.

### B. Three e-commerce-ish features in the brief

- **Event ticketing** (Events page → ticket purchases)
- **Memberships & player registration** (purchase + confirmation emails)
- **Club room booking calendar**

Plus **merch passthrough** to Loco Sportswear (not e-commerce but link-out integration).

This is a meaningful chunk of the build. Platform choice and integrations matter here. Options to consider:
- WooCommerce for memberships + tickets + bookings (with plugins).
- Stripe + custom forms.
- External: Eventbrite / TryBooking for tickets, PlayHQ already used for player registration, a booking SaaS for room hire.

### C. Facebook-pulled news

Honour the request — low maintenance is a real win. Use Facebook Page Plugin or a feed plugin. Don't try to sell them a full editorial CMS they won't run.

### D. Resources page must be client-editable

Implies a clean admin UX — not a developer-only build. Push back on platforms that require code edits to update PDFs.

### E. Sponsor page as "supporter directory"

Glenn explicitly framed sponsors as "a directory or referral for services that supporters can use." That's a *value-add for the sponsors* — and a good way to differentiate from both reference sites which underuse sponsors. Worth highlighting.

### F. 61 Design hosting transfer

Transfer is in scope. Need to:
- Audit what's currently on 61 Design (DNS, email, anything else).
- Confirm domain owner has registrar access.
- Plan zero-downtime cutover.
- Decide new host (likely Cloudflare + a managed WP host, or full Buildio-managed).

### G. Heritage angle is the differentiator

Neither reference site reaches the depth of East Point's actual story (1885 / 1905 predecessors, 2001 merger, 6 AFL alumni, 2018 first flag, three mascots). The proposal should signal we'll tell that story properly — not just match the references.

### H. Payments deliberately kept off the website

Decision (resolved): the website **does not handle payments** directly. Every transaction is hosted on a specialist platform — Stripe Payment Link for memberships, TryBooking for event tickets, PlayHQ for player rego, Loco Sportswear for merch, offline (committee) for room hire.

**Why this matters strategically:**
- Removes PCI compliance scope from the site.
- No payment plugin = no plugin maintenance, no plugin breakage, no plugin upgrade panic.
- Each specialist platform is better at its job than any all-in-one plugin would be.
- Club picks each platform on their own timing; the website doesn't care.
- Lowers the proposal price honestly (less complexity = less work).

The club still has freedom: if they later want on-site checkout, it can be added — but for v1 it's a deliberate "no."

### I. Search visibility — SEO + AEO as scope expansion

The current site is essentially invisible. Anyone Googling "East Point Footy Club Ballarat" lands on a portal with no content — there's nothing for search engines to index, and nothing for AI answer engines (ChatGPT, Perplexity, Google AI Overviews) to surface.

Two-layer offering worth introducing:

- **SEO** — the basics done properly: structured content, schema markup (SportsTeam, Event, Organization), local SEO (NAP, Google Business), internal linking, page titles and meta descriptions, sitemap, performance.
- **AEO (Answer Engine Optimisation)** — the newer game: structured Q&A content, FAQ schema, semantic clarity for LLMs, entity-rich About/History pages so the club is *understood* by AI tools, not just crawled.

Worth pitching as either an embedded part of the build, or as a follow-on module. Either way it's a credible add-on that the reference sites haven't done.

---

## 8. Problem → Outcome → Why me — working notes

Drafting space for the technique. To be turned into proposal copy in §10.

### Problems East Point likely has (informed view)

- **Three divisions, four websites** — fragmented brand, fragmented SEO, fragmented effort. Members and sponsors don't know where to look.
- **No front door for the club's story.** A 140-year heritage, AFL alumni, a 2018 premiership — none of it is visible on the current site.
- **Sponsors get a logo wall (at best).** No referral value, no reason for local businesses to renew.
- **No way to register, pay, or book online** — every transaction becomes a phone call or a PDF.
- **News dies in the Facebook feed.** Anyone landing on the site sees nothing happening.
- **No central admin** — updating policies or resources requires going through whoever built it.
- **Mobile experience unclear** — most members will visit from a phone on a Saturday morning.

### Outcomes — what "good" looks like

- **One site, three divisions, one brand.** Members and sponsors land in one place.
- **The story is visible from the homepage** — heritage, premierships, AFL pathway, the three communities.
- **Sponsors get a real referral page** — local businesses get value back, renewals get easier.
- **Memberships, registrations, room hire, event tickets — all online, all simple.**
- **News pulled from Facebook automatically** — zero extra work for committee, the site always looks alive.
- **Resources, policies, codes of conduct — editable by committee members without a developer.**
- **Mobile-first** — the experience on a phone on a Saturday morning is the experience that gets designed first.
- **Hosting in one place, owned by the club.**

### Why Rohan

#### Presentation format

Best presented **as a personal letter / blurb** — simple, from Rohan, not corporate. References qualifications naturally rather than CV-style. This is the trust-and-authenticity piece — it has to read as an extension of him, not an agency pitch.

#### Positioning

- **Trade through Steelchief Digital & Development** — solid company, real entity, real substance behind the work.
- **But the company is in the background, not the headline.** The presentation is Rohan personally. The company is the proof, not the pitch.
- **Lean on real applied experience** — solving business problems, growth, marketing. Not just "I can build a website." It's "I've spent 22+ years applying tech to actual business outcomes."

#### Experience timeline (~22+ years)

| Period | What |
|---|---|
| **Last 6 years** | **Steelchief Digital & Development** — websites, software, systems development. Trading entity. |
| **6 years prior** | Working at companies building solid software and web apps — paid, professional engineering experience. |
| **Prior to that** | Building businesses; working with WordPress sites again as part of that. |
| **10 years before that** | Ran own website development business (**Elure Pty Ltd** — name reference largely irrelevant) — building websites for customers directly. |

Total: a long, consistent track record across self-employment, agency-style work, and company employment. Has seen WordPress for most of its lifespan. Has built businesses, not just websites — which means "what does the website actually need to *do*" is a question he's qualified to answer.

#### What this means for East Point

- He's not a junior. He's not a freelancer who'll vanish. He's not an agency overhead-stack that prices a community footy club out.
- He's a one-person operation with company substance behind it — direct, accountable, experienced.
- He can talk about *business outcomes* (growth, sponsorship value, member engagement, search visibility) — not just pixels.

#### The honest context — full-time work, weekend build

Rohan currently works full time elsewhere. Most of this work will be done **on weekends** over a 6–10 week build window.

**Why this is a feature, not a bug** — and how to frame it in the proposal:

- *"I work full time. This means I do this work on weekends, and I do it because I want to do it well — not because I need the cash."*
- Focused, dedicated time on the work — no rushed weekday context-switching.
- Realistic timeline (6–10 weeks rather than 2–3 weeks) is the trade — and worth being upfront about.
- No agency overhead — which is part of why the price is what it is.

This is a **trust-positive** angle when said plainly. It explains the price, sets timeline expectations, and reinforces authenticity in one move.

*To be drafted into proposal copy.*

---

## 9. Site architecture — first scaffold

Built on the assumption of **one consolidated site** (per §7A recommendation), with the three divisions as first-class sections within it. Honours every page in Glenn's brief and adds what's needed to make the structure work.

### Top level — the whole-of-club spine

These pages speak for the club as a single entity. The "front door" experience.

- **Home** — Front door. Signals who East Point is in one glance, routes the visitor (member, parent, sponsor, supporter) to where they need to go, surfaces latest news and upcoming events.
- **About Us** — Who the club is today: three divisions, one club, what it stands for. Sets up the story before the deeper history page.
- **Our Story / History** — The 140-year heritage. East Ballarat (1885) + Golden Point (1905) → 2001 merger → 2018 senior flag. Honour roll, Life Members, B&F, 100-Game Players, Person of the Year, Foundation Members, BFL Awards (preserved from current site). AFL alumni. The page that tells visitors East Point isn't just another club.
- **News** — Live news feed, pulled from the club's Facebook page. Always fresh, zero committee maintenance, gives anyone landing cold immediate evidence the club is active.
- **Events** — What's on across the year. Annual calendar view with approximate dates, links out to ticket purchases for events that sell tickets (presentation nights, reunions, fundraisers).
- **Sponsors / Partners** — Directory, not a logo wall. Each sponsor gets a real referral entry (logo, blurb, link out, category) so supporters can use the directory to actually buy from them. Plus a "Become a Partner" CTA for new sponsors.
- **Club Room Hire** — Photos of the space, what's included, capacity, pricing, live booking calendar, enquiry form. Real revenue page.
- **Merchandise** — Gateway page that previews ranges and links out to https://locosportswear.com.au. No on-site shop to maintain.
- **Resources** — Codes of conduct, policies, forms, parent/player handbooks. Committee-editable through a clean admin UX. Categorised, searchable.
- **Contact** — Central enquiry form + per-division contact details (numbers, emails, role names). Routes enquiries to the right inbox.

### Division hubs — three first-class sections

Each division has its own landing page, accessible from the homepage and from a top-nav dropdown. Same shape across all three so members learn one pattern.

- **Seniors — Kangaroos** — Division landing page. Identity, teams, fixtures, results, news filtered to seniors, contacts, register-to-play CTA.
- **Juniors — Bulldogs** — Same shape, junior-focused. Auskick-equivalent entry pathway, age groups, parent info, junior-specific contacts.
- **Women's — Dragons** — Same shape, women's football identity. Often the most under-served on competitor club sites — opportunity to lead.

Within each division, expect (at minimum):
- **Teams / Squads** — current season teams, coaches, age groups.
- **Fixtures & Results** — embedded from PlayHQ (BFL standard, low maintenance).
- **Register to Play** — division-specific registration entry point.
- **Division Contacts** — committee, coaches, key roles.

### Membership & registration — the transactional layer

These cross all three divisions and need a clear, single entry point.

- **Become a Member** — Membership tiers, what's included, why people join, **buy/renew online**. Confirmation email links back to this page so members can re-find their inclusions later (per Glenn's brief).
- **Register to Play** — Player registration, routed by division (Seniors / Juniors / Women's). Likely deep-linked into PlayHQ, since BFL uses it.

> Strategic note: memberships and player registration are *different things*. Glenn's brief lists them together, but a "supporter member" and a "registered player" are different transactions for different people. Worth clarifying in the proposal.

### Footer & site-wide

- **Search** — Site-wide search. Important for a content-heavy heritage site.
- **Footer** — Address, contact, social links, sponsor mini-strip, key page links, ABN, copyright, privacy.
- **Privacy Policy / Terms** — Standard, required for transactional features (memberships, bookings, ticketing).

### Possible future / stretch (flag only — not in initial scope)

- **Player profiles** — for current senior squad and AFL alumni — heavy lift, future phase.
- **Photo galleries** — match-day, events, history.
- **Honour rolls expansion** — fully-indexed, searchable historical records.
- **Fundraising hub** — Club 500-style raffles, donation page.
- **Members-only area** — gated content for paying members (training schedules, internal notices).

### How this maps to Glenn's brief

Every page in his email is honoured. Additions:
- **Division landing pages (×3)** — implied by his "directory to three division pages" but not listed as work — they need real content, not just links.
- **Become a Member vs. Register to Play split** — clarifying the two transactions.
- **Search, Privacy, Footer** — needed for any transactional WP build, not in his list.
- **Future stretch items** — flagged separately so scope is clean.

### Base inclusions & assumptions — transactional features

Defaults the proposal will commit to, unless the club asks for more. Each is the simplest defensible answer that honours Glenn's brief without dragging unnecessary infrastructure in.

#### Editability — the reassurance

**Everything the committee needs to update is editable through the WordPress admin. No developer required for day-to-day updates.** That includes:

- News *(automated — pulls from Facebook, no manual updates needed)*
- Events
- Sponsors / partner directory
- Resources, codes of conduct, policies
- Member info, fees, inclusions
- Club room hire details
- Contact details per division
- Page text, images, headlines

Worth saying clearly in the proposal — committees worry about getting locked in by developers. Removing that fear is part of the trust pitch.

#### Events & ticketing

- **Base assumption:** Each event = a page on the site (title, date, venue, photo, description, price, who it's for). A "Buy Tickets" button links out to a **third-party ticketing platform** (TryBooking is the AU community-sport standard — low fees, free for free events, scanner app, attendee lists, refund handling all built in).
- **Why this:** zero infrastructure to maintain, compliant payment handling, attendee management is solved.
- **Not in base:** on-site ticket sales, seat selection, member-discount logic. Those can be added later.

#### Merchandise

- **Base assumption:** A single Merchandise page on the site — hero, short intro ("Our official range is supplied by Loco Sportswear"), a curated tile preview of featured items (manually selected, swappable through the admin), and a clear "**Shop the full range**" CTA linking to https://locosportswear.com.au.
- **Why this:** Loco handles e-commerce, inventory, shipping, returns. The site is a polished referral, not a duplicate shop.
- **Not in base:** live product feed sync, on-site cart, order tracking. Loco's site already does all that.

#### Memberships

- **Base assumption:** A Membership info page (tiers, inclusions, benefits, cost). A "**Become a Member**" CTA links out to a **Stripe Payment Link** (or equivalent hosted checkout page the club creates in their Stripe dashboard). On purchase, the buyer receives Stripe's standard receipt — we configure the receipt to include **a link back to the membership info page** for future reference (per Glenn's brief).
- **Why this:** no on-site payment integration. Same link-out pattern as TryBooking, PlayHQ, Loco Sportswear. Zero payment plugin overhead, no PCI scope on the website, lowest maintenance possible.
- **Not in base:** gated members-only content, full member portal with login, auto-renewal management at scale. Layerable later if volume grows.

#### Player registration

- **Base assumption:** Each division's "Register to Play" page is informational (fees, age groups, what's included, registration window). The CTA "**Register via PlayHQ**" links out to that division's PlayHQ entry.
- **Why this:** PlayHQ is the BFL/AFL standard — every BFL club uses it. Don't fight it. Use the page to explain *what* the player gets, then hand off to the platform that already handles the registration.
- **Not in base:** on-site player database, custom registration flow. PlayHQ is the source of truth.

#### Club room hire

Glenn's brief explicitly asks for a "booking calendar" — so booking functionality is in the base. **No online payment** — the committee handles payment offline (invoice, bank transfer, EFTPOS at pickup). The club picks between two configurations:

- **Option 1 — Simple:** Read-only availability calendar (Google Calendar embed) showing booked dates + enquiry form for booking requests. Committee confirms manually. Suits lower-volume hire and committees that want to vet who's hiring.
- **Option 2 — Live booking:** Real-time online booking — visitor picks a date, fills details, books on the spot. Auto-confirmation emails, admin dashboard (Amelia plugin). Suits higher-volume hire where the committee wants to remove themselves from routine confirmations. No money flows through the site — payment is still handled offline by the committee.

Both options are within base scope — the club chooses which suits their volume and operating style.

**Why two options:** "Booking calendar" can mean either thing in a club committee's mind. Don't presume — present both, explain the trade-offs, let them pick.

**Why no deposit:** keeps the legal/compliance footprint smaller (no refund policy, no T&Cs for online deposits, no PCI scope on bookings) and removes hassle for the committee. Payment stays offline where the club already handles it.

#### News

- **Base assumption:** News page pulls latest posts from the club's **Facebook page** (via Facebook Page Plugin or feed plugin), displayed as cards with images and dates. Always fresh, zero committee maintenance.
- **Why this:** the committee is already posting to Facebook. The site benefits from that work automatically.
- **Not in base:** native blog editor, post categories, author profiles. Can be added if the committee wants to publish original web articles later.

#### Search visibility (SEO + AEO)

- **Base assumption:** Solid SEO fundamentals built in — page titles, meta descriptions, schema markup (`SportsTeam`, `Event`, `Organization`, `LocalBusiness`), internal linking, sitemap, performance, mobile-first. Local SEO setup (Google Business profile review).
- **Stretch / paid add-on:** AEO (Answer Engine Optimisation) — structured FAQ content, entity-rich About/History pages so the club is correctly understood by ChatGPT, Perplexity, Google AI Overviews. Pitched as a follow-on module rather than embedded in base scope.

### Payments — kept off the website

The website does not handle online payment directly. Every transaction is hosted on a specialist platform via link-out:

| Transaction | Where it happens | Why |
|---|---|---|
| **Memberships** | Stripe Payment Link (or equivalent) — hosted checkout | Club picks their preferred Stripe / merchant setup; no integration on the site |
| **Event tickets** | TryBooking link-out | AU community-sport standard; built-in attendee management; free for free events |
| **Player registration** | PlayHQ link-out | BFL/AFL standard; non-negotiable platform |
| **Merchandise** | Loco Sportswear link-out | Loco already runs the shop end-to-end |
| **Club room hire** | No online payment | Committee invoices / bank transfer / EFTPOS — keeps legal & compliance scope minimal |

**Why this is the right call for East Point:**

- Zero payment plugin overhead on the website
- No PCI compliance scope for the site
- No on-site cart, no on-site refund handling, no on-site terms & conditions for online payments
- Each specialist platform is better at its job than a plugin would be
- The club picks each platform independently — no lock-in

**What the club still needs to set up themselves** (one-time, separate from the build):

- A Stripe account (free to set up) for memberships
- A TryBooking account (free to set up) for paid events
- Their existing PlayHQ access for player registration
- Their existing Loco Sportswear arrangement for merchandise

These are all standard Australian community-club tools; the committee will likely already use some of them.

---

## 10. Pricing approach

### The principle

One premium build at a clear price. Extensions added on as the club chooses. **No quality tiers** — every option represents quality work. The choice is what to include, not which quality level to settle for.

### The build — **$6,000 AUD**

Everything Glenn's brief asks for, done well. The simplest defensible answer at every choice — premium quality, not premium scope.

**Includes:**

- One consolidated WordPress site replacing the current four
- All 11 pages from Glenn's brief (Home, About, History, Events, Memberships & Registration, Sponsors, Club Room Hire, Merchandise, Contacts, Resources, News)
- Three division landing pages (Seniors / Juniors / Women's)
- Custom-styled WordPress theme on a clean foundation
- News feed pulled live from Facebook
- Stripe Payment Link (or club's preferred hosted equivalent) for memberships — link-out, no on-site integration
- TryBooking link-out for event ticketing
- Club room hire booking system — no online payment; club chooses between simple (read-only calendar + enquiry form, manual confirmation) or live (real-time online booking with auto-confirmation via Amelia, payment handled offline by committee)
- PlayHQ link-out for player registration
- Loco Sportswear gateway page for merchandise
- Sponsor directory with referral links to each sponsor
- Resources library — committee-editable, categorised
- SEO fundamentals (schema, meta, performance, mobile-first)
- Hosting transfer from 61 Design
- Committee training session
- 30 days post-launch support

### Extensions — add what you need

Each extension is independent. Pick any combination, or none.

| Extension | Price | What it adds |
|---|---|---|
| **Heritage storytelling** | **+$800** | Timeline treatment of the 1885 → 1905 → 2001 → 2018 story, AFL alumni stat blocks, premiership honour roll, full integration of the existing History sub-pages (Life Members, B&F, 100 Game Players etc.) into a unified narrative. |
| **Custom design from scratch** | **+$1,200** | Fully custom design — not based on a starting theme. Distinctive hero treatment, signature design moves, a look that's recognisably East Point and no-one else. |
| **AEO content optimisation** | **+$500** | Answer-engine optimisation — structured FAQ content, entity-rich pages, FAQ schema. Makes the club correctly understood by ChatGPT, Perplexity, Google AI Overviews. None of the reference sites have done this. |

**Total range** depending on choices: **$6,000 to $8,500.**

> Note on club room hire: Glenn's brief asks for a "booking calendar" — that's part of the base build. The club chooses between a simple version (read-only calendar + enquiry form, committee confirms manually) or a live booking version (real-time online booking with auto-confirmation, payment handled offline by the committee). No deposits, no online payment for room hire. Both options are included — see §9 for the trade-offs.

### Pass-through extras (not Rohan's fee)

- **Photography session** — local Ballarat photographer, billed direct to the club
- **AEO ongoing retainer** — separate proposal post-launch if wanted
- **Member portal with login / gated content** — future phase, sized when needed

### What's not included in any quote

- Ongoing hosting fees (~$30/month managed WP host, paid direct by the club)
- Payment processor fees (Stripe / TryBooking transaction fees, paid by the club per transaction)
- Domain renewal
- Content writing (club supplies copy — can be added as scope if needed)
- Ongoing maintenance / retainer (separate proposal post-launch if wanted)

### Why this is the right number

- Community footy club budget reality — not corporate.
- Sole operator, AI-accelerated build, weekend rhythm — no agency overhead.
- A price the committee can say yes to without a budget meeting.
- Strong margin because tooling lifts the build effort, not because corners are cut.

### Timeline

**6–10 weeks** from sign-off to launch, working weekend rhythm. Rohan works full-time during the week — weekends are the build window. Honest about it, because the timeline is part of the price.

---

## 11. Artifacts & references

- Email brief from Glenn McKenzie (captured in §5).
- Wikipedia: https://en.wikipedia.org/wiki/East_Point_Football_Club
- Current site: https://eastpointfnc.com.au/
- Reference: https://www.ballaratfnc.com.au/
- Reference: https://www.northballaratfnc.com.au/
- Merch destination: https://locosportswear.com.au/
- Current host: 61 Design

---

## 12. Final proposal

*Placeholder — to be drafted once strategy is signed off.*

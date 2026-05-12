# East Point FNC Website Proposal

**Prepared for** Glenn McKenzie
**From** Rohan Kleem
**Date** May 2026

---

## Snapshot

From your brief, the **key goals for the club** look like:

- One website pulling Seniors, Juniors and Women's together under one roof
- A look and feel in the spirit of the reference sites you shared (Ballarat FNC / North Ballarat FNC)
- The everyday essentials done well: news, events, memberships, sponsors, room hire, resources, contacts

This proposal sets out how I'd deliver that, what it would likely cost, and what I think the club gets out of it.

**Tentative estimate: $6,500 to $9,500 AUD** for the whole build.

This is a range, not a fixed price. The final number firms up after a short scoping conversation. What moves it within that range: depth of design and content work, what content the club already has versus what needs to be sourced, integration choices, and a few open questions in the brief.

**On timeline:** I haven't put a hard week-count on this. Realistic timing depends on a number of factors. Content readiness, your committee review pace, which integrations are in scope, decisions on design. I'd rather give a credible estimate after a scoping conversation than a number we'd both regret.

**A note on how I work:** I work full-time during the week, so this build would happen outside those hours, on weekends. That's part of why this estimate is what it is. No agency overhead. You'd get focused time, direct accountability, and a steady weekly cadence.

The website's job, as I see it, is to be the front door for the club. Money flows through specialist platforms (Stripe, TryBooking, PlayHQ, Loco Sportswear). The website itself doesn't try to do everything. That keeps it simpler to build, easier to maintain, and lower in price.

---

## What I noticed across the current setup

I've spent some time going through eastpointfnc.com.au and the three division sites. Here are the observations that shape this proposal. Said honestly, but with the aim of helping rather than picking holes.

**1. One club, four sites.** The main site acts as a portal. Seniors run on a subdomain, Juniors and Women's run on completely separate domains. That fragments the brand, splits search visibility, and asks committee members to maintain four things instead of one.

**2. The Dragons site looks like it's been quiet since around 2019** (happy to be corrected). Its fixtures still link to SportsTG, which AFL retired in 2024 in favour of PlayHQ. That's a strong sign the women's program is being under-served. Not because of effort, but because no committee can reasonably keep four websites alive at once.

**3. There's a 140-year story sitting in the background.** East Ballarat from 1885, Golden Point from 1905, the 2001 merger, the 2018 senior premiership, six AFL alumni (Frawley, Sharp, Rioli, Gibcus, Neade, Hind). The current site holds some of this in the History pages, but very little of it is visible to someone landing cold on the homepage.

**4. Sponsors are getting logo placement, but not referral value.** Real sponsors (Grilld, KFC, Robin Hood Hotel, Optus) are paying the club. The current treatment doesn't give them much back beyond a logo. There's an opportunity to do this much better.

**5. The transactional features aren't running.** Memberships, event tickets, room hire enquiries. These all live as link stubs or are absent across the four sites. Most of the time that means a phone call, an email, or a form people print out.

**6. The Facebook page is active, but the websites don't reflect that.** The club is posting regularly to Facebook. Anyone who lands on the website sees an inert page instead.

**7. Updating resources may currently need a developer** (happy to confirm with you). Either way, the rebuild would make these pages as editable as possible, so the committee can take the reins on policies, forms, and similar.

**8. Mobile experience is uncertain.** Most members probably access the site from a phone. The current sites weren't obviously designed with mobile as the primary experience.

**9. Search visibility is thin.** Someone Googling "East Point Football Club Ballarat" gets very limited results today. With proper page structure, schema markup, content depth, internal linking and consistent updates, a rebuild can compound search outcomes over time. That matters for sponsors looking up the club, parents researching juniors, and supporters new to the area.

---

## How we'd address it

One consolidated website. Three division sections inside it. The current four sites collapse into one, with the existing content preserved and brought up to date.

**Look and feel:** in the spirit of the Ballarat FNC and North Ballarat FNC sites you referenced. Community-warm, modern, mobile-first. Going further with a more distinctly East Point design is a scope conversation.

**The architecture is deliberately simple.** The website holds information and content. Money happens on specialist platforms via clear handoffs:

- **Memberships:** on-site info page with a "Become a Member" path. Whether members pay online (via a Stripe Payment Link) or join via an enquiry form / bank transfer is a scope conversation.
- **Event tickets:** TryBooking. The community-sport standard in Australia.
- **Player registration:** PlayHQ. Already used across the BFL.
- **Merchandise:** Loco Sportswear. Your existing arrangement.
- **Club room hire:** handled by the committee, with a booking calendar and enquiry on the site.

This keeps the website easier to build, cheaper to maintain, and sidesteps the responsibility of running a payment system on the club's own domain. Those tools each do one thing and do it well.

**The heritage gets room to breathe.** Existing honour rolls (Life Members, B&F, 100 Game Players, Coaches, Executives, Person of the Year, Foundation Members, BFL Awards) are preserved and brought into the new site. Depth of treatment for the broader heritage story is a scope conversation.

**News pulls automatically from your Facebook page.** No extra work for the committee. The site stays alive because Facebook is.

**Resources become committee-editable.** No developer needed to update a code of conduct.

**Sponsors get a real directory.** Each sponsor would have their own entry: logo, blurb, link out, category. That turns the sponsor section into a referral tool that drives some genuine value back to them. Worth noting: neither of the reference sites has done this. It's a real differentiator the club could lean on.

---

## Site architecture

The full structure of the site, with nesting and page-by-page descriptions.

### Top level

**Home**
The front door of the website. The first impression of the club for any visitor: member, parent, sponsor, or supporter. Routes them to the right place quickly. Surfaces latest news, upcoming events, the three divisions, and a clear sense of who East Point is.

**About Us**
A clear, warm introduction to the club today: three divisions, one club, what East Point stands for in 2026.

**Our Story (History)**
The 140-year heritage in one place. Acts as a parent page, with sub-pages for the existing honour rolls and any new heritage content.

- **Heritage Timeline.** A visual journey from 1885 (East Ballarat) through Golden Point (1905), the 2001 merger, the runner-up years (2006/07/09), and the 2018 senior premiership. Depth of treatment is a scope conversation. Anything from a clean paragraph-and-photos approach to a richer interactive timeline.
- **Premierships.** Full premiership record across divisions and grades.
- **AFL Alumni.** Frawley, Sharp, Rioli, Gibcus, Neade, Hind. The pathway story.
- **Life Members.** Existing list, preserved and styled.
- **100 Game Players.** Existing list, preserved and styled.
- **Best & Fairest.** Existing record, preserved and styled.
- **Coaches.** Existing list, preserved and styled.
- **Executives.** Existing list, preserved and styled.
- **Person of the Year.** Existing record, preserved and styled.
- **Foundation Members.** Existing list, preserved and styled.
- **BFL Awards.** Existing record, preserved and styled.

**News**
Live feed pulled from the club's Facebook page. Modern card-style layout with images, headlines, and dates. Always current, no committee work needed.

**Events**
Annual calendar of club events with approximate dates and links to ticket purchase (TryBooking) for paid events.

- **Individual Event Pages.** A templated page per event: title, date, venue, photos, description, audience, price, "Buy Tickets" button. Populated as events come up through the year.

**Divisions** *(parent landing page)*
Introduces the three arms of the club. Acts as a hub if visitors arrive without knowing which division they're after.

- **Seniors, Kangaroos.** Division landing page. Identity, key info, current season focus.
  - **Teams / Squads.** Senior squad list, coaches, key personnel.
  - **Fixtures & Results.** Embedded PlayHQ.
  - **Register to Play.** Info, fees, age groups, registration window. CTA to PlayHQ.
  - **Division Contacts.** Committee, coaches, key roles.
- **Juniors, Bulldogs.** Division landing page. Identity, junior pathway focus, parent-friendly tone.
  - **Teams / Squads.** Squads grouped by age (U9, U11, U13, etc.).
  - **Fixtures & Results.** Embedded PlayHQ.
  - **Register to Play.** Info, fees, age groups, registration window. CTA to PlayHQ.
  - **Division Contacts.** Committee, coaches, parent liaison.
- **Women's, Dragons.** Division landing page. Identity, women's program focus.
  - **Teams / Squads.** Women's squads.
  - **Fixtures & Results.** Embedded PlayHQ.
  - **Register to Play.** Info, fees, registration window. CTA to PlayHQ.
  - **Division Contacts.** Committee, coaches, key roles.

**Become a Member**
Membership tiers, benefits, what's included, cost. "Become a Member" CTA. Whether the CTA opens an online checkout (via a Stripe Payment Link) or routes to an enquiry/bank-transfer flow is a scope decision in the conversation. Either way, the page acts as the long-term reference for what membership includes (per your brief).

**Sponsors / Partners** *(parent landing page)*

- **Sponsor Directory.** Each sponsor entry: logo, blurb, link out, category. Functions as a referral tool. Supporters can find local businesses through the club.
- **Become a Partner.** Pitch page for new sponsors. What East Point offers, packages, contact path.

**Club Room Hire**
A dedicated page for hire of the club room. Photos of the space, inclusions, capacity, pricing, the booking calendar (simple or live, club's choice), and an enquiry/booking form. Payment for hire is handled offline by the committee.

**Merchandise**
Gateway page. Short intro, curated tile preview of featured items, "Shop the full range" CTA to locosportswear.com.au.

**Resources** *(parent page)*
Categorised library of club documents, committee-editable through the WordPress admin.

- **Codes of Conduct.** Player, coach, parent, committee codes.
- **Club Policies.** Constitution, member welfare, child safety etc.
- **Forms.** Volunteer forms, leave forms, anything members need to submit.
- **Handbooks.** Player handbook, parent handbook, season info packs.

**Contact** *(parent page)*

- **Central Enquiry.** General contact form, routes to the admin email.
- **Seniors Contacts.** Names, roles, numbers, emails.
- **Juniors Contacts.** Names, roles, numbers, emails.
- **Women's Contacts.** Names, roles, numbers, emails.

### Site-wide

- **Search.** Site-wide search bar accessible from header.
- **Footer.** Address, phone, email, social links, sponsor mini-strip, key page links, ABN, copyright.
- **Privacy Policy / Terms.** Standard legal pages required for a site that handles enquiries and links to payments.

---

## A note on the booking calendar

Your brief asked for a booking calendar for the club room. There are two ways to deliver that, and both sit within the base estimate. The club picks which suits.

**Simple:** A read-only calendar shows already-booked dates. Visitors fill out an enquiry form, and the committee confirms manually. Suits lower-volume hire and a committee that wants to vet who's hiring.

**Live:** Visitors pick a date, fill details, and book on the spot. Auto-confirmation emails go out, and the committee gets an admin dashboard. Suits higher-volume hire where the committee wants to remove themselves from routine confirmations.

Either way, **payment for room hire stays offline.** Invoice, bank transfer, or EFTPOS at pickup. That keeps legal and compliance scope minimal, and matches how clubs already handle hire.

---

## A note on editability

Everything the committee needs to update is editable through the WordPress admin. No developer required for day-to-day updates. That includes:

- News (automated from Facebook)
- Events
- Sponsors and partner directory
- Resources, codes of conduct, policies
- Member info, fees, inclusions
- Club room hire details
- Contact details per division
- Page text, headlines, images

This is the bit committees often worry about: getting locked in by whoever built the site. That isn't how I'd build this.

---

## About me

I'm Rohan. I've been building websites and software for around 22 years.

I currently work full-time at **Steelchief Digital & Development**, doing website, software, and systems development. That has been my role for the last six years. Six years before that, I worked at companies building solid software and web applications. Before that I built businesses, and worked with WordPress along the way. And before that, I ran my own website development business for ten years, building sites for direct customers.

That's a fair stretch of doing this work. It means I've seen WordPress for most of its life. It also means I tend to think about *outcomes:* what the website needs to actually do for the club, not only the pixels.

A few things that are worth being clear about:

- **I work full time during the week.** This East Point project would be done outside of those hours, on weekends. I'd rather take the time and get it right than rush a build that the club has to live with for years.
- **It's just me.** No account managers, no project managers, no chain of command. You'd talk to me directly. If something needs fixing, you'd tell me, and I'd fix it.
- **No agency overhead.** That's part of why this estimate is what it is.
- **I can trade through a registered Australian company.** The presentation here is personal, but if it's helpful for the club to engage with a registered entity for invoicing or contracting, that's available.

If it's helpful to see other work I've done, or talk to people I've worked with, I'm happy to provide that.

---

## Tentative pricing

### Estimated investment: $6,500 to $9,500 AUD

A range, not a fixed price. The final number firms up after a scoping conversation.

#### Working assumptions

These are the things I've assumed are in place to land within this range:

- The club supplies existing photos, sponsor logos, and contact details
- I'll do a first pass at content using what's already across the existing sites. Where new content is needed, I'd come to you for guidance
- Existing honour roll content (Life Members, B&F, 100 Game Players, etc.) is migrated from the current site
- Player registration continues through PlayHQ as today
- Memberships sit as info pages with a "Become a Member" CTA. Online payment (via Stripe Payment Link) is straightforward to add if wanted in scoping
- Room hire bookings handled on-site, payment offline
- One scoping conversation to confirm direction
- Reasonable committee responsiveness during the build

If any of these shifts significantly, we'd talk about it together before adjusting the estimate. No surprises.

#### Where in the range you'd likely land

These aren't packages. They're directions, and they reflect how much functional contingency we're planning for.

- **If the brief lands cleanly with limited additional functional detail emerging:** likely lands around **$6,500 to $7,500.**
- **If a moderate amount of additional functional detail surfaces during scoping or build** (the inevitable "when X happens, we also need it to Y" type asks): likely lands around **$7,500 to $8,500.**
- **If the committee surfaces a substantial amount of specific functional behaviour, edge cases, or workflows they want captured:** likely lands around **$8,500 to $9,500.**

These are illustrative. Most jobs settle somewhere within them rather than landing exactly on a marker. I'd track scope openly as we go, and we'd only land in the upper end if we genuinely need to.

### What's not in the price

- Hosting fees (~$30/month managed WordPress hosting, paid direct by the club to the host)
- Domain renewal
- Photography (if needed; I can refer a Ballarat photographer)
- Stripe / TryBooking transaction fees (paid by the club per transaction; no setup costs)
- Ongoing maintenance retainer (separate proposal post-launch if wanted)

### What the club would set up

These are all free or near-free, and most clubs in your league already use them:

- **TryBooking account** (free) for paid events
- **PlayHQ access** for player registration (you almost certainly have this already)
- **Existing Loco Sportswear arrangement** for merchandise
- **Stripe account** (free) only if we go with online membership payments. Optional.

I can help walk through any setup that isn't already in place.

### A note on phasing

This first build is deliberately focused on doing the core well. The things that run the club day-to-day. Bigger features down the track, like a full member portal with login, member-only content, ongoing content programs, integrated CRM, more advanced fundraising tools, are all possible, and I'd be glad to help with them later.

Once the v1 site is live, we'd both have a clearer view of what to do next, and a proper basis for a phase 2 conversation. I'd rather get the foundation right than promise a tower we haven't earned yet.

---

## What happens next

If this looks roughly right:

1. **A short conversation** to confirm the open questions. What firms up the estimate:
   - Design depth: match the reference sites, or invest in something more distinctly East Point?
   - History page: preserve existing honour rolls, or invest in deeper visual treatment?
   - Booking calendar: simple or live?
   - Search visibility: how much should we invest in long-term search outcomes (page structure, schema, internal linking, content depth)?
   - Memberships: online payments (Stripe Payment Link) or info pages with offline payment?
   - Hosting transfer: who has access to the 61 Design account and the domain registrar?
   - Content readiness: what already exists, what would need writing or sourcing?

2. **A simple agreement** covering scope, agreed price, and payment terms.

3. **Build starts.** I'd keep you updated on progress as the work moves.

If anything in this isn't clear, or if you'd like to talk it through, please give me a call or drop me an email.

---

**Rohan Kleem**
rohankleem@gmail.com
0415 761 941

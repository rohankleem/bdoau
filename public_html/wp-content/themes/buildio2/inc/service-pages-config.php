<?php
/**
 * Service sub-page content config.
 *
 * Keyed by post slug. Used by page-templates/service-detail.php.
 *
 * Each entry shape:
 *   - parent_url, parent_label  (breadcrumb back to category)
 *   - caption, heading, lead, icon  (hero)
 *   - work_heading, work_body, work_list  (Section 1: "What we do")
 *   - difference_heading, difference_body  (Section 2: "Why Buildio for this")
 *   - cta_heading, cta_body  (CTA card)
 */

return [

	/* =====================================================================
	 * SOFTWARE & WEB
	 * ================================================================== */

	'crm-systems' => [
		'parent_url' => '/software-development/',
		'parent_label' => 'Software & Web',
		'caption' => 'Software & Web — CRM systems',
		'heading' => 'CRM systems built around how your business actually runs.',
		'lead' => 'Zoho CRM is our deepest expertise &mdash; we work with other CRMs too. The work isn&rsquo;t installing the software. The work is shaping the data model around your business, customising the interface so the team uses it, and integrating it into the rest of your stack so the data flows.',
		'icon' => 'teh001Svg',
		'work_heading' => 'What a Buildio CRM engagement looks like',
		'work_body' => 'Most failed CRM rollouts fail in the same way: the system was set up to look like the salesperson&rsquo;s slide, not how the business actually operates. We start with how your business operates &mdash; sales pipeline, service handovers, recurring revenue, fulfilment, the parts that don&rsquo;t fit a template &mdash; and design the CRM around that.',
		'work_list' => [
			'Data model designed around your real business processes',
			'Custom modules, fields, and layouts &mdash; not vendor defaults',
			'Workflow rules and automations that take admin off your team&rsquo;s plate',
			'Integration with the rest of your stack (accounting, marketing, fulfilment)',
			'Migration from spreadsheets, old CRM, or another platform &mdash; cleanly',
			'Training and post-go-live support so the team adopts it',
		],
		'difference_heading' => 'Zoho expertise, but not Zoho-only.',
		'difference_body' => 'We have deep, named expertise in Zoho CRM &mdash; including the bits most certified partners hand off (Deluge scripting, custom integrations, Zoho One stack design). When Zoho isn&rsquo;t the right fit, we&rsquo;ll tell you. We work with HubSpot, Salesforce, Pipedrive and others where they&rsquo;re a better answer for the business. The point is the right CRM, well implemented &mdash; not a brand loyalty.',
		'cta_heading' => 'Talk to us about your CRM.',
		'cta_body' => 'Whether you&rsquo;re starting from scratch, replacing something that isn&rsquo;t working, or extending what you have &mdash; let&rsquo;s scope it honestly.',
	],

	'api-integrations' => [
		'parent_url' => '/software-development/',
		'parent_label' => 'Software & Web',
		'caption' => 'Software & Web — API integrations',
		'heading' => 'Connecting systems so your team stops doing what software should be doing.',
		'lead' => 'Most businesses run on a stack of systems that don&rsquo;t talk to each other. Someone copies data from one to the next, manually. We replace those handovers with reliable, debuggable API integrations &mdash; CRM &harr; accounting, e-commerce &harr; fulfilment, marketing &harr; CRM, custom REST and webhooks, whatever the systems are.',
		'icon' => 'cod007Svg',
		'work_heading' => 'How we approach an integration',
		'work_body' => 'Integrations look simple from the outside and are full of edge cases on the inside. Authentication, rate limits, retries, error states, partial failures, schema changes, malformed data, network blips. We design for the failure modes, not just the happy path.',
		'work_list' => [
			'Authentication done properly (OAuth flows, token refresh, secret rotation)',
			'Idempotent operations &mdash; same input twice doesn&rsquo;t double-create',
			'Retry logic and dead-letter handling for transient failures',
			'Logging that lets you actually see what happened, not just &ldquo;it errored&rdquo;',
			'Schema mapping that survives platform updates on either side',
			'Documentation so you (or the next person) can debug it without us',
		],
		'difference_heading' => 'Integrations you can debug without us.',
		'difference_body' => 'Most agencies build integrations as black boxes &mdash; great for them, terrible for you. We document, log, and structure the work so your team can see what&rsquo;s flowing, what failed, and why. If something breaks at midnight, someone can read the logs. We&rsquo;d rather build it once properly than be on retainer to keep guessing.',
		'cta_heading' => 'Got systems that don&rsquo;t talk?',
		'cta_body' => 'Bring us the manual handover that&rsquo;s eating your team&rsquo;s time. We&rsquo;ll map what an integration actually looks like and what it would cost.',
	],

	'custom-apps' => [
		'parent_url' => '/software-development/',
		'parent_label' => 'Software & Web',
		'caption' => 'Software & Web — Custom apps',
		'heading' => 'Custom software when off-the-shelf doesn&rsquo;t fit.',
		'lead' => 'Sometimes the cost of forcing your business into a SaaS product is bigger than the cost of building the right thing. Internal tools, customer portals, data dashboards, business-specific software &mdash; built on the right stack for the job, scoped honestly, and yours to keep.',
		'icon' => 'gen017Svg',
		'work_heading' => 'When custom is the right answer',
		'work_body' => 'We don&rsquo;t default to custom &mdash; in fact, we&rsquo;ll tell you when an off-the-shelf product would do the job for less. Custom is the right call when the workflow is specific enough that no SaaS fits, the data is sensitive enough that you don&rsquo;t want it on someone else&rsquo;s server, or the integration cost of multiple SaaS products exceeds the cost of building one cohesive thing.',
		'work_list' => [
			'Internal tools that streamline a process unique to your business',
			'Customer portals where your clients self-serve',
			'Data dashboards aggregating across your systems',
			'Business-specific software that doesn&rsquo;t exist as a product',
			'Right stack for the job &mdash; PHP/Laravel, Node, Python, whatever fits',
			'Built so a developer (yours or ours) can maintain it later',
		],
		'difference_heading' => 'Outcome over output.',
		'difference_body' => 'Custom software projects fail when scope creeps and the brief never connected to a real outcome. We define what success looks like commercially before we write code &mdash; and we ship in pieces, end-to-end, so you can see value before the project is done. Honest scope, working software, no &ldquo;90% complete&rdquo; estimates.',
		'cta_heading' => 'Got a problem off-the-shelf can&rsquo;t fix?',
		'cta_body' => 'Tell us the workflow that nothing on the market handles. We&rsquo;ll work out together whether custom is actually the right answer.',
	],

	'wordpress' => [
		'parent_url' => '/software-development/',
		'parent_label' => 'Software & Web',
		'caption' => 'Software & Web — WordPress',
		'heading' => 'WordPress sites and plugins, built properly.',
		'lead' => 'Custom themes, custom plugins, real performance, real SEO foundations. Not a page builder dragged onto a stock theme. We&rsquo;ve built and shipped WordPress products at the plugin-directory level &mdash; we know what good looks like under the hood.',
		'icon' => 'cod006Svg',
		'work_heading' => 'How we work with WordPress',
		'work_body' => 'WordPress runs a third of the web for a reason &mdash; it&rsquo;s flexible, well-supported, and stays out of the way when used right. The problems start when it&rsquo;s used wrong: bloated page builders, plugins fighting each other, slow load times, no real SEO foundation. Our WordPress work avoids all of that.',
		'work_list' => [
			'Custom themes built for your brand, not a marketplace template',
			'Custom plugins for your specific functionality &mdash; not 20 generic ones',
			'WooCommerce builds for serious e-commerce',
			'Performance from the start &mdash; not bolted on later',
			'SEO foundations baked in (schema, metadata, sitemap, AI-engine citation)',
			'Plugin development we&rsquo;ve shipped to the WordPress.org directory',
		],
		'difference_heading' => 'WordPress that doesn&rsquo;t feel like WordPress.',
		'difference_body' => 'A well-built custom WordPress site is fast, easy for the team to update, and looks nothing like &ldquo;just a WordPress site&rdquo;. We build the editing experience around what your team actually does &mdash; not generic Gutenberg blocks &mdash; so updating content is a 30-second job, not a 30-minute battle.',
		'cta_heading' => 'WordPress build or redesign?',
		'cta_body' => 'Whether you need a new site, a custom plugin, or a rescue from a WordPress build that&rsquo;s become a problem &mdash; talk to us.',
	],

	'web-design' => [
		'parent_url' => '/software-development/',
		'parent_label' => 'Software & Web',
		'caption' => 'Software & Web — Websites',
		'heading' => 'Websites that earn their keep.',
		'lead' => 'Marketing websites, e-commerce, brochure sites, landing pages, redesigns of the site that&rsquo;s holding the brand back. Built so they actually convert &mdash; and so the business owns the result, not the platform.',
		'icon' => 'gen002Svg',
		'work_heading' => 'Websites that work for the business',
		'work_body' => 'A website is the most public version of the business. Most are designed for the brand and not for the visitor &mdash; pretty, hard to scan, no clear next step. We design for what the visitor actually came to do, then make it look good while it&rsquo;s doing that.',
		'work_list' => [
			'Strategy first &mdash; who is this for, what is the next step, why does it matter',
			'Information architecture that scans, not designs that confuse',
			'Performance and accessibility built in from the start',
			'SEO foundations (technical, on-page, schema for AI engines)',
			'Conversion paths that lead somewhere &mdash; not just &ldquo;contact us&rdquo;',
			'Built on a stack you can actually maintain (usually WordPress; not always)',
		],
		'difference_heading' => 'A website that does a job, not just looks the part.',
		'difference_body' => 'You&rsquo;ve probably had a website project before that delivered something pretty and didn&rsquo;t change the business. Ours don&rsquo;t. The website&rsquo;s job is to find the right people, show them you&rsquo;re the right answer, and get them to take a next step. We design for that &mdash; visual quality is a constraint, not the goal.',
		'cta_heading' => 'New site, redesign, or rescue?',
		'cta_body' => 'Whether you&rsquo;re starting fresh, replacing what isn&rsquo;t working, or trying to fix a site someone else built &mdash; talk to us.',
	],

	/* =====================================================================
	 * MARKETING & SEARCH
	 * ================================================================== */

	'audit' => [
		'parent_url' => '/marketing-search-visibility/',
		'parent_label' => 'Marketing & Search',
		'caption' => 'Marketing & Search — Visibility audit',
		'heading' => 'Search visibility audit &mdash; where you stand, ranked.',
		'lead' => 'A clear, ranked picture of where you are and aren&rsquo;t being found &mdash; across Google, AI Overviews, ChatGPT, Perplexity, Bing Chat &mdash; and which gap closes first for the most return. The cheapest, lowest-risk way to start.',
		'icon' => 'map007Svg',
		'work_heading' => 'What an audit covers',
		'work_body' => 'Most agencies pitch a tactic before they understand the business. We don&rsquo;t. The audit is a focused engagement that maps your current visibility honestly &mdash; and surfaces where the highest-leverage starting point actually is. Sometimes the answer isn&rsquo;t SEO. Sometimes it isn&rsquo;t paid. Sometimes the work is upstream of marketing entirely.',
		'work_list' => [
			'Where your business shows up today on Google search',
			'Where it shows up (or doesn&rsquo;t) in AI Overviews, ChatGPT, Perplexity',
			'Where competitors are getting cited that you aren&rsquo;t',
			'Technical SEO foundations: schema, performance, indexability',
			'Content gaps and on-site structure issues',
			'A ranked list of where to start, by likely return',
		],
		'difference_heading' => 'Diagnosis before prescription.',
		'difference_body' => 'A first-call sales pitch is guessing. Prescription without diagnosis is malpractice in any field, including this one. The audit gives both sides a real picture of the situation before either of us commits to ongoing work &mdash; and most importantly, an honest answer to whether ongoing work is even what you need.',
		'cta_heading' => 'Start with an audit.',
		'cta_body' => 'A clear picture of where you stand, where the gaps are, and where to start &mdash; before you spend on anything else.',
	],

	'seo' => [
		'parent_url' => '/marketing-search-visibility/',
		'parent_label' => 'Marketing & Search',
		'caption' => 'Marketing & Search — SEO',
		'heading' => 'SEO &mdash; the right people, finding you, with the right intent.',
		'lead' => 'Traditional Google search isn&rsquo;t going away. It still drives most traffic. But the SEO work that mattered in 2020 isn&rsquo;t what matters now &mdash; and most agencies are still selling the 2020 version. We focus on commercial intent, technical foundations, and honest reporting.',
		'icon' => 'gen004Svg',
		'work_heading' => 'How we approach SEO in 2026',
		'work_body' => 'SEO has bifurcated. Traditional Google search remains the largest traffic source for most businesses. But Google itself is increasingly answering queries directly via AI Overviews &mdash; without a click. Our SEO work targets the queries that still drive clicks AND the structure that gets cited in the answers, simultaneously.',
		'work_list' => [
			'Keyword research focused on commercial intent, not vanity volume',
			'Technical SEO audit and remediation (Core Web Vitals, indexability, schema)',
			'On-page optimisation for the queries you can actually win',
			'Local SEO &mdash; especially for Ballarat and regional Victoria',
			'Content strategy that supports rankings AND AI citations',
			'Honest reporting &mdash; outcomes only, no ranking guarantees',
		],
		'difference_heading' => 'No promises we can&rsquo;t keep.',
		'difference_body' => 'Nobody guarantees Google rankings. Anyone who does is lying or about to disappear. We don&rsquo;t. What we promise is the work, done well: solid technical foundations, content that earns its rank, honest reporting on what&rsquo;s working, and a clear conversation when something isn&rsquo;t.',
		'cta_heading' => 'Need real SEO, not promises?',
		'cta_body' => 'Talk to us about where you stand and what&rsquo;s actually worth doing &mdash; before committing to a retainer.',
	],

	'geo-aeo' => [
		'parent_url' => '/marketing-search-visibility/',
		'parent_label' => 'Marketing & Search',
		'caption' => 'Marketing & Search — GEO / AEO',
		'heading' => 'AI search visibility &mdash; getting cited, not just ranked.',
		'lead' => 'When someone asks ChatGPT, Perplexity, Google AI Overviews or Bing Chat about your category, do they get told about you, or about your competitor? GEO (Generative Engine Optimisation) and AEO (Answer Engine Optimisation) are how you become part of the answer.',
		'icon' => 'gen002Svg',
		'work_heading' => 'How AI search visibility actually works',
		'work_body' => 'AI engines pull from a different signal mix than Google. They cite content based on structure, schema, entity recognition, and where else that content is talked about &mdash; not just on traditional ranking factors. Showing up in AI answers is a separate discipline from showing up on Google.',
		'work_list' => [
			'Schema markup for AI consumption (FAQPage, HowTo, Speakable, ProfessionalService, Article)',
			'Citation-ready content structured to be lifted directly into answers',
			'Entity signals &mdash; consistent naming across web, LinkedIn, directories, knowledge graph',
			'Continuous monitoring of brand mentions across AI engines',
			'Content refreshes &mdash; AI citations decay if not maintained',
			'Cross-platform Digital PR to seed mentions in places AI learns from',
		],
		'difference_heading' => 'We do this on our own site &mdash; not just yours.',
		'difference_body' => 'Buildio.au runs the same custom schema layer we&rsquo;d implement for you. The ProfessionalService schema, AI-engine citation structure, and answer-first content design here on this site is exactly the work the GEO service delivers. We use what we sell.',
		'cta_heading' => 'Want to be cited by AI engines?',
		'cta_body' => 'Start with an audit &mdash; we&rsquo;ll map where you appear today and what gap closes first.',
	],

	'content' => [
		'parent_url' => '/marketing-search-visibility/',
		'parent_label' => 'Marketing & Search',
		'caption' => 'Marketing & Search — Content',
		'heading' => 'Content for humans and AI &mdash; one asset, two audiences.',
		'lead' => 'AI flattened execution. Anyone can produce decent content fast. The edge moved from polish to substance, from writing well to thinking clearly, and from generic content to content with a real point of view that an AI can actually cite.',
		'icon' => 'txt001Svg',
		'work_heading' => 'How content earns the read AND the citation',
		'work_body' => 'Most content is written for one audience &mdash; either humans (loose prose, narrative arc) or search engines (keyword-stuffed, robotic). Modern content needs to do both. A human reads it and gets value; an AI engine reads it and can quote it back as a clean answer. That requires structural decisions, not just good writing.',
		'work_list' => [
			'50-word answer summaries leading each major section',
			'Question-based headings for AI matching',
			'Evidence-backed claims (numbers, names, specifics) for AI trust',
			'Topic clusters that build topical authority',
			'Content series rather than isolated posts',
			'First-party authoritative content &mdash; not rephrased web',
		],
		'difference_heading' => 'No em dashes. No supercharge. No revolutionising.',
		'difference_body' => 'Em dashes have become an AI-content tell. So has the supercharge / revolutionise / unleash vocabulary. We don&rsquo;t use them. We write the way a knowledgeable peer talks &mdash; specific, direct, comparative not absolute, and edited until every sentence earns its place.',
		'cta_heading' => 'Need content that actually reads well AND ranks?',
		'cta_body' => 'Tell us what your business has to say and who it&rsquo;s saying it to. We&rsquo;ll work out the content shape that fits.',
	],

	'digital-pr' => [
		'parent_url' => '/marketing-search-visibility/',
		'parent_label' => 'Marketing & Search',
		'caption' => 'Marketing & Search — Digital PR',
		'heading' => 'Digital PR in AI ecosystems &mdash; show up where AI is learning.',
		'lead' => 'AI engines pull from places &mdash; LinkedIn, podcasts, industry publications, community spaces, GitHub, Reddit, niche forums &mdash; that traditional SEO ignores. Showing up in those places, credibly, is how a brand becomes part of the AI&rsquo;s training data and live retrieval.',
		'icon' => 'cod007Svg',
		'work_heading' => 'Where digital PR shows up in 2026',
		'work_body' => 'Backlinks are still a Google ranking factor. But they&rsquo;re now also a signal AI engines use to decide who to cite. The places that send strong signals have changed: a thoughtful LinkedIn post or a podcast appearance can do more for AI visibility than a directory backlink. We work the actual surfaces that matter now.',
		'work_list' => [
			'Brand-mention tracking across AI engines, social, and traditional sources',
			'Outreach and thought leadership in the right industry surfaces',
			'LinkedIn presence as a primary AI-training surface',
			'Podcast and video presence (transcripts feed AI models)',
			'Community-space presence (Reddit, niche forums, industry communities)',
			'Reputation management when the AI gets it wrong',
		],
		'difference_heading' => 'Earned, not bought.',
		'difference_body' => 'Paid links, sponsored mentions, and sketchy directory submissions are dying tactics &mdash; and AI engines are getting better at filtering them out. We focus on credible mentions earned through real contributions. Slower, but it actually works and doesn&rsquo;t blow up later.',
		'cta_heading' => 'Want to show up in AI answers?',
		'cta_body' => 'Talk to us about where your brand needs to be visible and how to earn it credibly.',
	],

	'measurement' => [
		'parent_url' => '/marketing-search-visibility/',
		'parent_label' => 'Marketing & Search',
		'caption' => 'Marketing & Search — Measurement',
		'heading' => 'Search visibility measurement that tells you the truth.',
		'lead' => 'Most agency reporting is performative &mdash; vanity rankings, traffic graphs, &ldquo;impressions&rdquo;. We measure outcomes: AI citations, sentiment, salience, conversion paths. The metrics that connect to whether the business is actually growing.',
		'icon' => 'gra012Svg',
		'work_heading' => 'What we actually measure',
		'work_body' => 'The right metrics depend on the goal. We start with what business outcome the marketing is meant to produce, then work backwards to what to track. Metrics that don&rsquo;t connect to a business outcome &mdash; impressions, vanity rankings, social follower counts &mdash; we don&rsquo;t lead with.',
		'work_list' => [
			'AI citation tracking (ChatGPT, Perplexity, AI Overviews, Bing Chat)',
			'Sentiment vs salience &mdash; how the brand is talked about, not just how often',
			'Traditional rankings + Search Console data, integrated honestly',
			'Conversion paths &mdash; what lands, where it comes from, what closes',
			'Honest reporting on what&rsquo;s working AND what isn&rsquo;t',
			'Quarterly read-outs against business goals, not against last quarter',
		],
		'difference_heading' => 'Outcomes only.',
		'difference_body' => 'If a metric doesn&rsquo;t connect to your business growing, we don&rsquo;t feature it. The reporting is structured around the question that matters: is this working, and what should we do next?',
		'cta_heading' => 'Want to know what&rsquo;s actually working?',
		'cta_body' => 'Talk to us about what you&rsquo;re measuring now and whether those numbers are connected to anything real.',
	],

	/* =====================================================================
	 * TRANSFORMATION
	 * ================================================================== */

	'discovery' => [
		'parent_url' => '/transformation/',
		'parent_label' => 'Transformation',
		'caption' => 'Transformation — Discovery & diagnosis',
		'heading' => 'Discovery &amp; diagnosis &mdash; find the constraint before fixing anything.',
		'lead' => 'A short, focused engagement to find what&rsquo;s actually holding the business back. Not a glossy audit deck &mdash; a ranked picture of constraints and opportunities, in plain language, with the highest-leverage starting point named. The cheapest, lowest-risk way to start working together.',
		'icon' => 'gen004Svg',
		'work_heading' => 'How a discovery engagement runs',
		'work_body' => 'A typical discovery is two to four weeks. We talk to the people who actually do the work, look at the data, walk the processes, and map where the friction is. Then we present what we found &mdash; honestly. Sometimes the answer is &ldquo;don&rsquo;t hire us&rdquo;.',
		'work_list' => [
			'Conversations with the team &mdash; not just leadership',
			'Walk the actual processes, not the documented ones',
			'Identify the constraint &mdash; the bottleneck the rest of the system bends around',
			'Ranked list of opportunities by likely return and effort',
			'Honest read on whether the constraint is technology, process, people, or something else',
			'Clear recommendation on the highest-leverage first step',
		],
		'difference_heading' => 'Diagnosis is cheap. Wrong solutions are expensive.',
		'difference_body' => 'Most transformation projects fail because they fixed the wrong thing. The discovery work is small relative to the cost of building the wrong solution. A few weeks here saves months and hundreds of thousands of dollars later.',
		'cta_heading' => 'Start with a discovery.',
		'cta_body' => 'A first conversation is honest, no pitch &mdash; we figure out together whether discovery is what you need, or something more specific.',
	],

	'streamlining' => [
		'parent_url' => '/transformation/',
		'parent_label' => 'Transformation',
		'caption' => 'Transformation — Process streamlining',
		'heading' => 'Process streamlining &mdash; cut the friction, keep the function.',
		'lead' => 'Cutting friction out of how the day-to-day actually runs. Mapping the current state honestly, then redesigning the parts where the cost of doing it the old way exceeds the cost of changing. Includes the hand-offs, the approvals, and the &ldquo;but we&rsquo;ve always done it this way&rdquo; conversations.',
		'icon' => 'arr031Svg',
		'work_heading' => 'How process streamlining actually changes things',
		'work_body' => 'Most process work produces a beautiful new process map and changes nothing. The new process needs to be adopted, the old habits need to fade, and the team needs to see why the change is worth the disruption. We work all three at once.',
		'work_list' => [
			'Map the current state honestly &mdash; the version everyone actually uses',
			'Find the steps that exist for reasons that don&rsquo;t apply any more',
			'Redesign for the work that actually matters now',
			'Build adoption into the rollout &mdash; training, retros, ongoing tweaks',
			'Measure whether the change is sticking, not just whether it&rsquo;s documented',
			'Stay around long enough to make sure the change holds',
		],
		'difference_heading' => 'Process change that survives go-live.',
		'difference_body' => 'A process you redesigned and the team didn&rsquo;t adopt is just a more polished version of what you had before. We measure success on whether the change is actually being used six months later &mdash; not whether the process diagram looks neat.',
		'cta_heading' => 'Got a process that&rsquo;s not working?',
		'cta_body' => 'Tell us where the friction is. We&rsquo;ll work out what&rsquo;s worth changing &mdash; and what&rsquo;s actually fine.',
	],

	'systems' => [
		'parent_url' => '/transformation/',
		'parent_label' => 'Transformation',
		'caption' => 'Transformation — Business systems design',
		'heading' => 'Business systems redesigned to fit the work, not the other way around.',
		'lead' => 'The systems your business runs on &mdash; CRM, operations, finance, marketing &mdash; redesigned so they fit the work, not the other way around. Where data flows, where it stops, where roles change at handovers, where the system shape is forcing the team into bad workarounds.',
		'icon' => 'teh001Svg',
		'work_heading' => 'What systems design covers',
		'work_body' => 'Most businesses run on a stack that grew organically &mdash; a CRM bought five years ago, an accounting system from before that, a marketing tool the previous CMO insisted on, three spreadsheets that nobody owns but nobody can replace. We redesign the stack as a coherent thing, not a collection of accidents.',
		'work_list' => [
			'Map the current systems landscape &mdash; including the spreadsheets',
			'Identify where data is duplicated, lost, or stuck in someone&rsquo;s head',
			'Redesign the system shape around the actual work',
			'Plan integrations to remove manual handovers (see Automations)',
			'Migrate data cleanly &mdash; not just copy/paste under pressure',
			'Stay around for the rollout, not just hand off a diagram',
		],
		'difference_heading' => 'Connected to the rest of the work.',
		'difference_body' => 'Systems design isn&rsquo;t separate from process streamlining or from automations or from software. It&rsquo;s where they all meet. We do all of those, so we don&rsquo;t need to hand off the system design to a different vendor and hope the integration meeting goes well.',
		'cta_heading' => 'Got a stack that isn&rsquo;t fitting?',
		'cta_body' => 'Tell us what your business runs on now &mdash; and where it&rsquo;s working against you. We&rsquo;ll map what a better shape could look like.',
	],

	/* =====================================================================
	 * AUTOMATIONS
	 * ================================================================== */

	'workflow' => [
		'parent_url' => '/automations/',
		'parent_label' => 'Automations',
		'caption' => 'Automations — Workflow automation',
		'heading' => 'Workflow automation &mdash; remove the work software should be doing.',
		'lead' => 'The repeated, rules-based work that&rsquo;s currently sitting in someone&rsquo;s inbox. Lead routing, quote generation, onboarding sequences, status updates, internal notifications, document generation. Implemented in Zapier, Make, n8n, or custom &mdash; whichever fits the job and the team that has to live with it.',
		'icon' => 'arr031Svg',
		'work_heading' => 'How we approach workflow automation',
		'work_body' => 'Workflow automation is straightforward when the underlying process is sound. When it isn&rsquo;t, the automation just makes the dysfunction faster. We always look at the process first &mdash; sometimes the right answer is to fix the process before automating, sometimes it&rsquo;s to automate as-is, sometimes it&rsquo;s both at the same time.',
		'work_list' => [
			'Process check first &mdash; is this worth automating, or worth redesigning?',
			'Right tool for the job &mdash; Zapier for simple, Make/n8n for complex, custom when needed',
			'Built so a human can still understand what&rsquo;s happening',
			'Logging and error handling &mdash; not silent failure',
			'Documentation so your team can adjust without us',
			'Monitoring so you know when something stops working',
		],
		'difference_heading' => 'Automation that doesn&rsquo;t become a black box.',
		'difference_body' => 'A common pattern: someone built an automation, left, nobody knows how it works, it breaks, the team starts doing the work manually again. We build documented, debuggable, owner-able workflows &mdash; even when that&rsquo;s slightly slower upfront.',
		'cta_heading' => 'Got a manual process eating hours?',
		'cta_body' => 'Tell us the workflow. We&rsquo;ll map what could be automated and what shouldn&rsquo;t be.',
	],

	'integrations' => [
		'parent_url' => '/automations/',
		'parent_label' => 'Automations',
		'caption' => 'Automations — System integrations',
		'heading' => 'System integrations &mdash; the operational version of API work.',
		'lead' => 'Where the manual handovers between systems are eating time. CRM &harr; accounting, e-commerce &harr; fulfilment, marketing &harr; CRM, custom REST and webhook integrations &mdash; including the messy edge cases other firms quote and then ghost on. We work with the systems you already use; we don&rsquo;t replace them unless that&rsquo;s the right move.',
		'icon' => 'cod007Svg',
		'work_heading' => 'Operational vs technical integration',
		'work_body' => 'There are two views of an integration. The technical view is APIs, schemas, error handling &mdash; covered under Software & Web. The operational view is the workflow it removes from the team&rsquo;s plate, the data quality it enforces, the visibility it creates. We do both, but this service is for businesses focused on the operational side.',
		'work_list' => [
			'Map where the manual handovers are between your systems',
			'Pick the integration approach that fits the team (off-the-shelf vs custom)',
			'Build it so it survives schema changes on either side',
			'Logging that surfaces what&rsquo;s failing, not just &ldquo;it broke&rdquo;',
			'Documentation a non-developer can use to understand what&rsquo;s flowing',
			'Monitoring that catches issues before they become customer-facing',
		],
		'difference_heading' => 'Integrations that just work, day after day.',
		'difference_body' => 'Most integrations work great on day one and fall apart on day ninety when one platform updates an API or a token expires. We design for the long view &mdash; refresh logic, retry handling, schema tolerance &mdash; so you don&rsquo;t end up paying us to fix what we built six months ago.',
		'cta_heading' => 'Got systems that don&rsquo;t talk?',
		'cta_body' => 'Bring us the manual handover. We&rsquo;ll work out what an integration looks like and what it would cost.',
	],

	'ai-agents' => [
		'parent_url' => '/automations/',
		'parent_label' => 'Automations',
		'caption' => 'Automations — AI & agents',
		'heading' => 'AI &amp; agent automation &mdash; where AI actually earns its keep.',
		'lead' => 'AI applied where it actually earns its keep &mdash; classification, summarisation, drafting, structured data extraction, customer triage, internal Q&amp;A on your own data. Including the ongoing work of running it: monitoring outputs, maintaining prompts, watching for drift. Someone has to manage the robots; we do that part too.',
		'icon' => 'teh001Svg',
		'work_heading' => 'Where AI is actually useful right now',
		'work_body' => 'Most AI projects fail because they were chasing &ldquo;we should use AI&rdquo; instead of solving a real problem. We start with the problem &mdash; this manual classification task is eating hours a week, this customer triage step is creating a backlog, this internal knowledge base nobody can find anything in &mdash; and apply AI only where it&rsquo;s the right tool.',
		'work_list' => [
			'Classification (incoming emails, tickets, documents)',
			'Summarisation (meeting notes, long documents, customer interactions)',
			'Drafting (initial copy, emails, structured documents) &mdash; with human review',
			'Structured data extraction from unstructured sources',
			'Internal Q&amp;A over your own documents and data',
			'Customer triage and routing where rules-based isn&rsquo;t enough',
		],
		'difference_heading' => 'Process before AI. Always.',
		'difference_body' => 'Adding AI to a broken process just makes the broken process faster. We don&rsquo;t apply AI until the process underneath is sound &mdash; or at least until we&rsquo;ve flagged where the process needs work alongside the AI build. Foundation first.',
		'cta_heading' => 'Got an AI use case to scope?',
		'cta_body' => 'Tell us what you&rsquo;re hoping AI can do for the business. We&rsquo;ll work out together whether it&rsquo;s actually the right tool &mdash; and if so, what&rsquo;s the smallest first step.',
	],

];

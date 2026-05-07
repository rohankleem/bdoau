<?php
/**
 * Template Name: Services — Automations
 *
 * Service category landing page. Process-first, honest about complexity.
 */

$has_hero = true;

$service_caption = 'Automations';
$service_heading = 'Workflows, integrations, and AI &mdash; making your systems work for you.';
$service_lead    = 'Connecting tools, automating handovers, deploying agents where they make sense. The work that takes friction out of your day-to-day &mdash; so the team stops doing what the systems should be doing, and starts doing what only people can.';
$service_icon    = 'cod006Svg';

get_header();
include get_template_directory() . '/inc/hero-service.php';
?>

<div class="container px-4 mt-3">

	<!-- Process-first pitch -->
	<div class="overflow-hidden">
		<div class="container content-space-t-2 content-space-t-lg-2 content-space-b-lg-2">
			<div class="row justify-content-lg-between align-items-lg-center">
				<div class="col-lg-6 mb-7 mb-lg-0">
					<div class="mb-4">
						<h2>Automation amplifies whatever you point it at &mdash; including the broken bits.</h2>
						<p>The fastest way to ruin a process is to automate it before fixing it. We don&rsquo;t. Before we automate anything, we look at whether the process underneath is actually worth automating &mdash; or whether the right move is to redesign the process first.</p>
						<p>Done well, automation gives the team back hours every week and removes the silly mistakes that come from people doing what software should be doing. Done badly, it just lets you be wrong faster.</p>
					</div>

					<ul class="list-checked list-checked-soft-bg-primary list-checked-lg mb-5">
						<li class="list-checked-item">Process before automation &mdash; we don&rsquo;t automate broken workflows</li>
						<li class="list-checked-item">One workflow at a time, fully owned end-to-end</li>
						<li class="list-checked-item">Automation that humans can still understand and maintain</li>
						<li class="list-checked-item">AI and agents where they earn their keep &mdash; not because they&rsquo;re the trend</li>
						<li class="list-checked-item">Connected to your existing systems, not bolted on the side</li>
					</ul>
				</div>

				<div class="col-lg-5">
					<div class="position-relative mx-auto text-center" data-aos="fade-up">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary cod006Svg largeSvgIcon mx-auto text-center w-100"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Sub-services grid -->
	<div class="container content-space-b-1 pt-4">
		<div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
			<span class="text-cap">What we do</span>
			<h2>Three places automation pays off</h2>
		</div>

		<div class="row justify-content-lg-center">

			<!-- Workflow automation -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7" id="workflow">
				<div class="d-flex pe-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary arr031Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4><a class="text-dark text-decoration-none stretched-link" href="/automations/workflow/">Workflow automation</a></h4>
						<p>The repeated, rules-based work that&rsquo;s currently sitting in someone&rsquo;s inbox. Lead routing, quote generation, onboarding sequences, status updates, internal notifications, document generation. Implemented in Zapier, Make, n8n, or custom &mdash; whichever fits the job and the team that has to live with it.</p>
					</div>
				</div>
			</div>

			<!-- System integrations -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7" id="integrations">
				<div class="d-flex ps-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary cod007Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4><a class="text-dark text-decoration-none stretched-link" href="/automations/integrations/">System integrations</a></h4>
						<p>Where the manual handovers between systems are eating time. CRM &harr; accounting, e-commerce &harr; fulfilment, marketing &harr; CRM, custom REST and webhook integrations &mdash; including the messy edge cases other firms quote and then ghost on. We work with the systems you already use; we don&rsquo;t replace them unless that&rsquo;s the right move.</p>
					</div>
				</div>
			</div>

			<div class="w-100"></div>

			<!-- AI & agent automation -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7" id="ai-agents">
				<div class="d-flex pe-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary teh001Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4><a class="text-dark text-decoration-none stretched-link" href="/automations/ai-agents/">AI &amp; agent automation</a></h4>
						<p>AI applied where it actually earns its keep &mdash; classification, summarisation, drafting, structured data extraction, customer triage, internal Q&amp;A on your own data. Including the ongoing work of running it: monitoring outputs, maintaining prompts, watching for drift. Someone has to manage the robots; we do that part too.</p>
					</div>
				</div>
			</div>

			<!-- Automation diagnosis -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
				<div class="d-flex ps-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary map007Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4>Automation diagnosis</h4>
						<p>Before any of the above. A short engagement that maps where in your business automation would pay off, where it would actively make things worse, and where the underlying process needs attention first. Cheaper and lower-risk than committing to a build, and often surfaces work that doesn&rsquo;t need automation at all.</p>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- The Buildio difference -->
	<div class="overflow-hidden bg-light">
		<div class="container content-space-t-2 content-space-t-lg-2 content-space-b-lg-2">
			<div class="row justify-content-lg-between align-items-lg-center flex-lg-row-reverse">
				<div class="col-lg-6 mb-9 mb-lg-0">
					<div class="mb-4">
						<h2>Automation that gets handed over &mdash; not abandoned.</h2>
						<p>Automation done well removes work, in a way the team can still understand and maintain when we&rsquo;re gone. We don&rsquo;t build black boxes. The workflows are documented. The integrations are debuggable. The AI prompts and outputs are inspectable.</p>
						<p>That&rsquo;s how you build something that actually saves the business time &mdash; instead of saving time on day one and quietly burning it again on day ninety when nobody knows how the thing works.</p>
					</div>
				</div>

				<div class="col-lg-5">
					<div class="position-relative mx-auto text-center" data-aos="fade-up">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary gen012Svg largeSvgIcon mx-auto text-center w-100"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CTA -->
	<div class="container content-space-t-2 content-space-b-2">
		<div class="w-lg-75 mx-lg-auto">
			<div class="card card-sm overflow-hidden">
				<div class="card-body d-flex align-items-center justify-content-center justify-content-md-between text-center text-md-start">
					<div class="svg-icon text-primary me-3">
						<span class="svg-icon text-primary cod006Svg"></span>
					</div>
					<div class="flex-grow-1">
						<h4 class="card-title mb-1">Bring us the manual process.</h4>
						<p class="mb-0">We&rsquo;ll map what should be automated, what shouldn&rsquo;t, and what&rsquo;s worth starting with. Honest, no pitch.</p>
					</div>
					<div class="ms-md-4 mt-3 mt-md-0">
						<a class="btn btn-primary btn-transition" href="/contact/">Talk to Buildio</a>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>

<?php
/**
 * Template Name: Services — Software Development
 *
 * Service category landing page. Capability-led, ROI-focused.
 */

$has_hero = true;

$service_caption = 'Software & Web';
$service_heading = 'Software, websites, and the systems behind them &mdash; focused on ROI.';
$service_lead    = 'Custom software, websites, CRM systems, integrations and apps that move the business &mdash; not just ship code. We scope the actual problem before building, and the solution stays useful after we leave.';
$service_icon    = 'teh001Svg';

get_header();
include get_template_directory() . '/inc/hero-service.php';
?>

<div class="container px-4 mt-3">

	<!-- Why this isn't just "build software" -->
	<div class="overflow-hidden">
		<div class="container content-space-t-2 content-space-t-lg-2 content-space-b-lg-2">
			<div class="row justify-content-lg-between align-items-lg-center">
				<div class="col-lg-6 mb-7 mb-lg-0">
					<div class="mb-4">
						<h2>Software is the easy part. Scoping it correctly is the hard part.</h2>
						<p>Most software projects don&rsquo;t fail at the code. They fail at the brief &mdash; the wrong thing got built because nobody understood the business well enough to scope what would actually move the needle.</p>
						<p>Buildio scopes from the commercial reality first. What does the business actually need this software to <em>do</em>, and what&rsquo;s a fair commercial outcome to expect from it? Once that&rsquo;s honest, the build is straightforward.</p>
					</div>

					<ul class="list-checked list-checked-soft-bg-primary list-checked-lg mb-5">
						<li class="list-checked-item">Diagnosis before prescription &mdash; we don&rsquo;t pitch on the first call</li>
						<li class="list-checked-item">Correct scoping &mdash; based on understanding your business, not a template</li>
						<li class="list-checked-item">ROI-led delivery &mdash; outcome over output, every time</li>
						<li class="list-checked-item">Local presence &mdash; based in Ballarat, working across Victoria and Australia</li>
						<li class="list-checked-item">Tested experience &mdash; commercial software that&rsquo;s been used in the real world</li>
					</ul>
				</div>

				<div class="col-lg-5">
					<div class="position-relative mx-auto text-center" data-aos="fade-up">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary map007Svg largeSvgIcon mx-auto text-center w-100"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Core capabilities -->
	<div class="container content-space-b-1 pt-4">
		<div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
			<span class="text-cap">Core capabilities</span>
			<h2>What we build, in plain language</h2>
		</div>

		<div class="row justify-content-lg-center">

			<!-- CRM systems -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7" id="crm">
				<div class="d-flex pe-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary teh001Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4><a class="text-dark text-decoration-none stretched-link" href="/software-development/crm-systems/">CRM systems</a></h4>
						<p>Zoho CRM is our deepest expertise. We design the data model around how your business actually runs, customise the interface so the team uses it, and integrate it into the rest of your stack so the data flows. We work with other CRMs too.</p>
					</div>
				</div>
			</div>

			<!-- API integrations -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7" id="api">
				<div class="d-flex ps-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary cod007Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4><a class="text-dark text-decoration-none stretched-link" href="/software-development/api-integrations/">API integrations</a></h4>
						<p>Connecting systems together so the business stops doing manual handovers between them. CRM &harr; accounting, e-commerce &harr; fulfilment, marketing &harr; CRM, custom REST and webhook integrations &mdash; whatever the systems are, we connect them.</p>
					</div>
				</div>
			</div>

			<div class="w-100"></div>

			<!-- Custom apps -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7" id="custom">
				<div class="d-flex pe-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary gen017Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4><a class="text-dark text-decoration-none stretched-link" href="/software-development/custom-apps/">Custom apps and software</a></h4>
						<p>When off-the-shelf doesn&rsquo;t fit and the cost of forcing a workaround is bigger than the cost of building the right thing. Internal tools, customer portals, data dashboards, business-specific software &mdash; built on the right stack for the job.</p>
					</div>
				</div>
			</div>

			<!-- WordPress development -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7" id="wordpress">
				<div class="d-flex ps-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary cod006Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4><a class="text-dark text-decoration-none stretched-link" href="/software-development/wordpress/">WordPress sites &amp; plugins</a></h4>
						<p>Custom themes, custom plugins, real performance, real SEO foundations. Not a page builder dragged onto a stock theme. We&rsquo;ve built and shipped WordPress products at the plugin-directory level &mdash; we know what good looks like under the hood.</p>
					</div>
				</div>
			</div>

			<div class="w-100"></div>

			<!-- Websites & web design -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7" id="web">
				<div class="d-flex pe-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary gen002Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4><a class="text-dark text-decoration-none stretched-link" href="/software-development/web-design/">Websites &amp; web design</a></h4>
						<p>Marketing websites, e-commerce, brochure sites, landing pages, redesigns of the site that&rsquo;s holding the brand back. Built so they actually convert &mdash; and so the business owns the result, not the platform.</p>
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
						<h2>Software you can rely on, from a partner you can rely on.</h2>
						<p>Reliable expertise, tested experience, local hands you can shake. We&rsquo;re a Ballarat-based partner who builds for businesses across regional Victoria and Australia &mdash; not a far-flung agency that treats small clients as small fish.</p>
						<p>Trust comes from specifics, not slogans. Real work, real outcomes, honestly described.</p>
					</div>
				</div>

				<div class="col-lg-5">
					<div class="position-relative mx-auto text-center" data-aos="fade-up">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary art009Svg largeSvgIcon mx-auto text-center w-100"></span>
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
						<span class="svg-icon text-primary gen002Svg"></span>
					</div>
					<div class="flex-grow-1">
						<h4 class="card-title mb-1">Got a software problem to scope?</h4>
						<p class="mb-0">A first conversation is honest, no pitch. We work out together whether what you need is software at all &mdash; or whether the actual fix is upstream.</p>
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

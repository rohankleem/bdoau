<?php
/**
 * Template Name: Services — Automations
 *
 * Stub landing page. Page-content TBD.
 */

$has_hero = true;

$service_caption = 'Automations';
$service_heading = 'Workflows, integrations, and AI &mdash; making your systems work for you.';
$service_lead    = 'Connecting tools, automating handovers, deploying agents where they make sense. The work that takes the friction out of your day-to-day &mdash; so the team stops doing what the systems should be doing.';
$service_icon    = 'cod006Svg';

get_header();
include get_template_directory() . '/inc/hero-service.php';
?>

<div class="container px-4 mt-3">

	<div class="overflow-hidden">
		<div class="container content-space-t-2 content-space-b-2">
			<div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
				<span class="text-cap">In development</span>
				<h2>This page is being written.</h2>
				<p class="lead">Automations are a real strength of what we do &mdash; from workflow automation to system integrations to AI and agent-based automation. The full page is on its way. If you&rsquo;ve got a manual process that&rsquo;s costing your team hours a week, talk to us in the meantime.</p>
			</div>

			<div class="w-lg-75 mx-lg-auto">
				<div class="card card-sm overflow-hidden">
					<div class="card-body d-flex align-items-center justify-content-center justify-content-md-between text-center text-md-start">
						<div class="svg-icon text-primary me-3">
							<span class="svg-icon text-primary cod006Svg"></span>
						</div>
						<div class="flex-grow-1">
							<h4 class="card-title mb-1">Talk to us about automation.</h4>
							<p class="mb-0">Bring us the manual process &mdash; we&rsquo;ll map what could be automated, what shouldn&rsquo;t be, and what&rsquo;s worth starting with.</p>
						</div>
						<div class="ms-md-4 mt-3 mt-md-0">
							<a class="btn btn-primary btn-transition" href="/contact/">Talk to Buildio</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>

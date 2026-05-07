<?php
/**
 * Template Name: Services — Marketing & Search Visibility
 *
 * Service category landing page. Outcome-led.
 */

$has_hero = true;

$service_caption = 'Marketing & Search Visibility';
$service_heading = 'Be found by the people you can actually help.';
$service_lead    = 'Search has split. Google still drives traffic. ChatGPT, Perplexity, AI Overviews and Bing Chat increasingly drive the question. We get your business cited and surfaced across all of it — without the agency-jargon and without optimising for the wrong thing.';
$service_icon    = 'gen004Svg';

get_header();
include get_template_directory() . '/inc/hero-service.php';
?>

<div class="container px-4 mt-3">

	<!-- Diagnosis-first pitch -->
	<div class="overflow-hidden">
		<div class="container content-space-t-2 content-space-t-lg-2 content-space-b-lg-2">
			<div class="row justify-content-lg-between align-items-lg-center">
				<div class="col-lg-6 mb-7 mb-lg-0">
					<div class="mb-4">
						<h2>The diagnosis is the work.</h2>
						<p>Most agencies pitch a tactic before they understand the business. We don&rsquo;t. The first thing we do is figure out where you&rsquo;re actually being found, where your competitors are showing up that you aren&rsquo;t, and which gap closes first for the most return.</p>
						<p>That&rsquo;s the audit. After that, the implementation is honest delivery against what we found.</p>
					</div>

					<ul class="list-checked list-checked-soft-bg-primary list-checked-lg mb-5">
						<li class="list-checked-item">Where you appear today &mdash; Google, AI Overviews, ChatGPT, Perplexity, Bing Chat</li>
						<li class="list-checked-item">Where your competitors are getting cited that you aren&rsquo;t</li>
						<li class="list-checked-item">Honest scope &mdash; no &ldquo;everything is broken&rdquo; sales pitch</li>
						<li class="list-checked-item">A ranked list of where to start, by likely return</li>
						<li class="list-checked-item">A plan that fits your business, not a template</li>
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

	<!-- The 6 sub-services -->
	<div class="container content-space-b-1 pt-4">
		<div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
			<span class="text-cap">What we do</span>
			<h2>Six ways we get your business found</h2>
		</div>

		<div class="row justify-content-lg-center">

			<!-- Search Visibility Audit -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7" id="audit">
				<div class="d-flex pe-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary map007Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4><a class="text-dark text-decoration-none stretched-link" href="/marketing-search-visibility/audit/">Search visibility audit</a></h4>
						<p>A clear, ranked picture of where you are and aren&rsquo;t being found &mdash; across traditional search and AI engines &mdash; and which gap closes first for the most return.</p>
					</div>
				</div>
			</div>

			<!-- SEO -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7" id="seo">
				<div class="d-flex ps-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary gen004Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4><a class="text-dark text-decoration-none stretched-link" href="/marketing-search-visibility/seo/">SEO &mdash; traditional search</a></h4>
						<p>The right people finding you on Google with the right intent, and converting once they land. Keyword research focused on commercial intent, technical audit and remediation, on-page and local SEO &mdash; with honest reporting, no ranking guarantees.</p>
					</div>
				</div>
			</div>

			<div class="w-100"></div>

			<!-- GEO / AEO -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7" id="geo">
				<div class="d-flex pe-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary gen002Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4><a class="text-dark text-decoration-none stretched-link" href="/marketing-search-visibility/geo-aeo/">GEO / AEO &mdash; AI search visibility</a></h4>
						<p>You get cited and surfaced by ChatGPT, Perplexity, Google AI Overviews and Bing Chat &mdash; not just Google&rsquo;s blue links. Schema, citation-ready content, entity signals, and continuous monitoring across the AI surfaces.</p>
					</div>
				</div>
			</div>

			<!-- Content for AI + humans -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7" id="content">
				<div class="d-flex ps-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary txt001Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4><a class="text-dark text-decoration-none stretched-link" href="/marketing-search-visibility/content/">Content for humans and AI</a></h4>
						<p>One asset, two audiences. Content that earns its read from a human and gets cited verbatim by an answer engine. Topic clusters, answer-first structure, evidence-backed claims &mdash; not rephrased web.</p>
					</div>
				</div>
			</div>

			<div class="w-100"></div>

			<!-- Digital PR -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7" id="digital-pr">
				<div class="d-flex pe-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary cod007Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4><a class="text-dark text-decoration-none stretched-link" href="/marketing-search-visibility/digital-pr/">Digital PR in AI ecosystems</a></h4>
						<p>Show up in the places AI engines actually learn from &mdash; credible mentions, references, and presence across the surfaces (LinkedIn, podcasts, industry publications, community spaces) that get pulled into AI training and retrieval.</p>
					</div>
				</div>
			</div>

			<!-- Measurement -->
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7" id="measurement">
				<div class="d-flex ps-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary gra012Svg"></span>
						</div>
					</div>
					<div class="flex-grow-1 ms-3">
						<h4><a class="text-dark text-decoration-none stretched-link" href="/marketing-search-visibility/measurement/">Search visibility measurement</a></h4>
						<p>Honest reporting on what&rsquo;s working &mdash; AI citations, sentiment, salience, alongside traditional Google rankings and Search Console. No vanity metrics. Outcomes only.</p>
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
						<h2>Marketing tied to the systems behind it.</h2>
						<p>Most marketing agencies stop at the website. We don&rsquo;t. When we write content for AI citation, the underlying data &mdash; your CRM, your business systems, your automations &mdash; is being shaped at the same time.</p>
						<p>That&rsquo;s the part most clients only realise they needed after they&rsquo;ve paid someone else to do the marketing twice. We don&rsquo;t separate the marketing from the operations because for the customer, they&rsquo;re not separate.</p>
					</div>
				</div>

				<div class="col-lg-5">
					<div class="position-relative mx-auto text-center" data-aos="fade-up">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary teh001Svg largeSvgIcon mx-auto text-center w-100"></span>
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
						<span class="svg-icon text-primary art009Svg"></span>
					</div>
					<div class="flex-grow-1">
						<h4 class="card-title mb-1">Start with a search visibility audit.</h4>
						<p class="mb-0">A clear picture of where you stand, where the gaps are, and where to start &mdash; before you spend on anything else.</p>
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

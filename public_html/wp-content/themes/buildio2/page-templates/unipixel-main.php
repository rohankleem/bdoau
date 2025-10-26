<?php

/**
 * Template Name: UniPixel Main
 *
 * A custom page template.
 */

get_header();


?>

<?php $imgPathAssets = get_stylesheet_directory_uri() . "/dist/assets"; ?>

<?php $imgpath = get_stylesheet_directory_uri() . "/img" ?>

<?php include get_template_directory() . '/inc/hero-unipixel.php'; ?>

<div class="container px-4 mt-5">



	<div class="overflow-hidden">
		<div class="container content-space-b-1 pt-3">
			<!-- Heading -->
			<div class="w-md-75 w-lg-75 text-center mx-md-auto mb-5 mb-md-9">
				<span class="text-cap">Modern tracking for browser limits</span>
				<h2>Next-level event tracking powered by server-side data</h2>
				<p class="lead">
					As browsers and devices limit tracking, UniPixel makes measurement more accurate through server-side data delivery,
					providing richer, compliant information that helps platforms optimise with confidence.
				</p>
			</div>
			<!-- End Heading -->

			<div class="w-md-100 mx-md-auto">
				<div class="row justify-content-lg-center align-items-md-center">
					<div class="col-md-5 mb-7 mb-md-0">
						<!-- List Checked -->
						<ul class="list-checked list-checked-soft-bg-primary list-checked-lg mb-5">
							<li class="list-checked-item">Send events client-side and server-side</li>
							<li class="list-checked-item">Automatic deduplication across platforms</li>
							<li class="list-checked-item">Consent-aware and fully privacy compliant</li>
							<li class="list-checked-item">WooCommerce and custom event support</li>
							<li class="list-checked-item">Live event viewer and stored event logs</li>
						</ul>
						<!-- End List Checked -->

						<a class="link d-none" href="#features">Explore how it works <i class="bi-chevron-right small ms-1"></i></a>
					</div>
					<!-- End Col -->

					<div class="col-md-7 col-lg-5">
						<div class="position-relative">
							<!-- Card -->
							<div class="card">
								<div class="card-body">
									<span class="svg-icon text-primary mb-4">
										<!--@@include("../assets/vendor/duotone-icons/com/com013.svg")-->
										<span class="svg-icon text-primary cod006Svg"></span>
									</span>

									<h3 class="card-title">Capture more from every interaction</h3>
									<p class="card-text">
										UniPixel keeps your tracking accurate, compliant, and complete. It bridges the gap between browser
										limitations and modern privacy standards — so your event data remains reliable, detailed, and ready for optimisation.
									</p>
								</div>
							</div>
							<!-- End Card -->

							<!-- SVG Shape -->
							<figure class="position-absolute bottom-0 end-0 zi-n1 mb-n7 me-n7" style="width: 12rem;">
								<img class="img-fluid" src="<?php echo $imgPathAssets ?>/svg/components/dots-lg.svg" alt="Image Description">
							</figure>
							<!-- End SVG Shape -->
						</div>
					</div>
					<!-- End Col -->
				</div>
				<!-- End Row -->
			</div>
		</div>
	</div>


	<!-- CTA -->
	<div class="container">
		<div class="w-lg-75 mx-lg-auto mt-5">
			<div class="card card-sm overflow-hidden">
				<div class="card-body d-flex align-items-center justify-content-center justify-content-md-between text-center text-md-start">

					<!-- Icon -->
					<div class="svg-icon text-primary me-3">
						<span class="svg-icon text-primary fil021Svg"></span>
					</div>
					<!-- End Icon -->

					<!-- Text -->
					<div class="flex-grow-1">
						<h4 class="card-title mb-1">Download UniPixel for WordPress</h4>
						<p class="mb-0">Get the plugin directly from WordPress.org</p>
					</div>

					<!-- Button -->
					<div class="ms-md-4 mt-3 mt-md-0">
						<a class="btn btn-primary btn-transition"
							href="https://wordpress.org/plugins/unipixel/"
							target="_blank"
							rel="noopener noreferrer">
							Visit Plugin Page
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End CTA -->



	<!-- Section 1: The Changing Landscape -->
	<div class="overflow-hidden">
		<div class="container content-space-t-2 content-space-t-lg-3 content-space-b-lg-2">
			<div class="row justify-content-lg-between align-items-lg-center">
				<div class="col-lg-5 mb-9 mb-lg-0">
					<div class="mb-4">
						<h2>Tracking is changing fast.</h2>
						<p>
							Browsers and devices are shutting down the tracking methods marketers have relied on for years.
							Cookies expire, scripts are restricted, and ad blockers cut off visibility.
							Businesses lose conversions in the data and can’t see what’s really driving results.
						</p>
						<p>
							Server-side tracking restores that visibility by sending events directly and securely from your own server.
							The result is more reliable metrics and a clearer picture of customer behaviour.
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="position-relative mx-auto" data-aos="fade-up">

						<div class="svg-icon text-primary me-3">
							<span class="svg-icon text-primary gen002Svg largeSvgIcon mx-auto text-center w-100" style="color: #f5ca99 !important;"></span>
						</div>


					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Section 2: How UniPixel Helps -->
	<div class="overflow-hidden bg-light">
		<div class="container content-space-t-2 content-space-t-lg-3 content-space-b-lg-2">
			<div class="row justify-content-lg-between align-items-lg-center flex-lg-row-reverse">
				<div class="col-lg-6 mb-9 mb-lg-0">
					<div class="mb-4">
						<h2>UniPixel bridges the gap.</h2>
						<p>
							UniPixel combines client- and server-side tracking to keep event data flowing accurately and completely.
							It captures more from every interaction while respecting privacy and consent.
						</p>
					</div>

					<ul class="list-checked list-checked-soft-bg-dark list-checked-lg">
						<li class="list-checked-item">Reliable event delivery, even when browsers block scripts</li>
						<li class="list-checked-item">Richer event information for improved attribution</li>
						<li class="list-checked-item">Ad-blocker resilience to recover lost conversions</li>
						<li class="list-checked-item">Consent-aware data handling for compliant operation</li>
						<li class="list-checked-item">Better advertising performance from higher-quality data</li>
					</ul>
				</div>

				<div class="col-lg-5">
					<div class="position-relative mx-auto" data-aos="fade-up">
						<div class="svg-icon text-primary me-3">
							<span class="svg-icon text-primary cod007Svg largeSvgIcon mx-auto text-center w-100" style="color: #f5ca99 !important;"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Section 3: The Outcome -->
	<div class="overflow-hidden">
		<div class="container content-space-t-2 content-space-t-lg-3 content-space-b-lg-2">
			<div class="row justify-content-lg-between align-items-lg-center">
				<div class="col-lg-5 mb-9 mb-lg-0">
					<div class="mb-4">
						<h2>Accurate data that drives smarter marketing.</h2>
						<p>
							With UniPixel, your analytics and ad platforms receive richer, verified conversion data through secure server connections.
							You gain better attribution, stronger optimisation, and clear visibility into what truly performs.
						</p>

					</div>
				</div>
				<div class="col-lg-6">
					<div class="position-relative mx-auto" data-aos="fade-up">
						<div class="svg-icon text-primary me-3">
							<span class="svg-icon text-primary gra012Svg largeSvgIcon mx-auto text-center w-100" style="color: #f5ca99 !important;"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Icon Blocks -->
	<div class="container content-space-b-1 pt-4">
		<!-- Heading -->
		<div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
			<span class="text-cap">Key Features</span>
			<h2>Everything you need for modern event tracking</h2>
		</div>
		<!-- End Heading -->

		<div class="row justify-content-lg-center">
			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
				<!-- Icon Block -->
				<div class="d-flex pe-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary cod006Svg"></span>
						</div>
					</div>

					<div class="flex-grow-1 ms-3">
						<h4>Fine-tuned control</h4>
						<p>Decide exactly how each event is sent — client-side, server-side, or both — with simple, transparent controls.</p>
					</div>
				</div>
				<!-- End Icon Block -->
			</div>

			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
				<!-- Icon Block -->
				<div class="d-flex ps-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary cod006Svg"></span>
						</div>
					</div>

					<div class="flex-grow-1 ms-3">
						<h4>Works with Meta and Google</h4>
						<p>Fully integrated with Meta Conversion API and Google server-side tracking, with TikTok support coming soon.</p>
					</div>
				</div>
				<!-- End Icon Block -->
			</div>

			<div class="w-100"></div>

			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
				<!-- Icon Block -->
				<div class="d-flex pe-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary cod006Svg"></span>
						</div>
					</div>

					<div class="flex-grow-1 ms-3">
						<h4>WooCommerce rich event data</h4>
						<p>Tracks key commerce actions — product views, add-to-cart, purchases — automatically with full value and product data.</p>
					</div>
				</div>
				<!-- End Icon Block -->
			</div>

			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
				<!-- Icon Block -->
				<div class="d-flex ps-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary cod006Svg"></span>
						</div>
					</div>

					<div class="flex-grow-1 ms-3">
						<h4>Custom events</h4>
						<p>Create and manage your own event triggers for buttons, forms, or any interaction you want to measure.</p>
					</div>
				</div>
				<!-- End Icon Block -->
			</div>

			<div class="w-100"></div>

			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
				<!-- Icon Block -->
				<div class="d-flex pe-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary cod006Svg"></span>
						</div>
					</div>

					<div class="flex-grow-1 ms-3">
						<h4>Consent-aware and privacy compliant</h4>
						<p>Integrates directly with your site’s consent framework, sending events only when permission has been granted.</p>
					</div>
				</div>
				<!-- End Icon Block -->
			</div>

			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
				<!-- Icon Block -->
				<div class="d-flex ps-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary cod006Svg"></span>
						</div>
					</div>

					<div class="flex-grow-1 ms-3">
						<h4>Simple setup and clear configuration</h4>
						<p>Clean layout, guided setup, and sensible defaults make configuration straightforward — no code editing required.</p>
					</div>
				</div>
				<!-- End Icon Block -->
			</div>

			<div class="w-100"></div>

			<div class="col-md-6 col-lg-5 mb-3 mb-md-5 mb-lg-7">
				<!-- Icon Block -->
				<div class="d-flex pe-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary cod006Svg"></span>
						</div>
					</div>

					<div class="flex-grow-1 ms-3">
						<h4>Live event viewer</h4>
						<p>See events fire in real time, verify payloads, and debug any setup with full visibility from within WordPress.</p>
					</div>
				</div>
				<!-- End Icon Block -->
			</div>

			<div class="col-md-6 col-lg-5">
				<!-- Icon Block -->
				<div class="d-flex ps-md-5">
					<div class="flex-shrink-0">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary cod006Svg"></span>
						</div>
					</div>

					<div class="flex-grow-1 ms-3">
						<h4>Stored event logs</h4>
						<p>Review event history across all visitors and sessions to understand performance and diagnose issues quickly.</p>
					</div>
				</div>
				<!-- End Icon Block -->
			</div>
		</div>
	</div>
	<!-- End Icon Blocks -->





	<!-- CTA -->
	<div class="container bg-light">
		<div class="w-lg-75 mx-lg-auto mt-2 mb-8">
			<div class="card card-sm overflow-hidden">
				<div class="card-body d-flex align-items-center justify-content-center justify-content-md-between text-center text-md-start">

					<!-- Icon -->
					<div class="svg-icon text-primary me-3">
						<span class="svg-icon text-primary fil021Svg"></span>
					</div>
					<!-- End Icon -->

					<!-- Text -->
					<div class="flex-grow-1">
						<h4 class="card-title mb-1">Download UniPixel for WordPress</h4>
						<p class="mb-0">Get the plugin directly from WordPress.org</p>
					</div>

					<!-- Button -->
					<div class="ms-md-4 mt-3 mt-md-0">
						<a class="btn btn-primary btn-transition"
							href="https://wordpress.org/plugins/unipixel/"
							target="_blank"
							rel="noopener noreferrer">
							Visit Plugin Page
						</a>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End CTA -->


	<!-- Pull in the content from the editor -->
	<?php
	while (have_posts()) :
		the_post();
		the_content();
	endwhile; // End of the loop.
	?>
</div>

<?php
get_footer();

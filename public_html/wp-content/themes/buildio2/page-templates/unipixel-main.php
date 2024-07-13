<?php

/**
 * Template Name: UniPixel Main
 *
 * A custom page template.
 */

get_header();


?>

<?php $imgpath = get_stylesheet_directory_uri() . "/img" ?>

<?php include get_template_directory() . '/inc/hero-unipixel.php'; ?>

<div class="container mt-5">



	<div class="row d-none">
		<div class="col-12">
			<div class="card bg-light-green borderless w-100">
				<div class="card-body">

				</div>
			</div>
		</div>
	</div>


	<section id="why-choose-unipixel">
		<h2>Why Choose UniPixel?</h2>

		<h3>Solving Tracking Challenges</h3>
		<p>In today's digital landscape, accurate and reliable tracking is crucial for successful marketing campaigns. Many businesses struggle with:</p>
		<ul>
			<li><strong>Data Gaps:</strong> Client-side tracking alone can lead to data discrepancies due to ad blockers and browser privacy settings.</li>
			<li><strong>Complex Integrations:</strong> Setting up Meta Pixel and CAPI can be technically challenging and time-consuming.</li>
			<li><strong>Dynamic Event Needs:</strong> Businesses often need to track custom events specific to their user interactions, which can be difficult to manage with standard tracking solutions.</li>
		</ul>

		<h3>How UniPixel Helps</h3>
		<ul>
			<li><strong>Comprehensive Tracking:</strong> By combining Meta Pixel with Conversions API, UniPixel ensures you capture complete and accurate data, even when client-side tracking fails.</li>
			<li><strong>User-Friendly Setup:</strong> Our intuitive interface makes it easy for anyone to set up and manage their Meta tracking, regardless of technical expertise.</li>
			<li><strong>Customizable Events:</strong> Easily define and track custom events that matter most to your business, all within the WordPress admin panel.</li>
			<li><strong>Peace of Mind:</strong> With real-time logging, you can be confident that your tracking is working correctly, allowing you to focus on optimizing your marketing efforts.</li>
		</ul>

		<h4>Reliable Tracking of Interactions and Conversions</h4>
		<p>UniPixel is designed with the best practices to ensure accurate event tracking and conversion measurement. Here’s how UniPixel supports these features:</p>

		<h5>Deduplication</h5>
		<p><strong>Event IDs:</strong> UniPixel uses unique event IDs for each event to ensure that events are not counted multiple times. This is achieved by sending the same event ID from both the client-side (via the Facebook Pixel) and the server-side (via the Conversion API).</p>

		<h5>Cookie Tracking</h5>
		<p><strong>_fbp Cookie:</strong> UniPixel sets and utilizes the <code>_fbp</code> cookie to store a unique identifier for each user's browser session. This helps Facebook recognize returning visitors.</p>
		<p><strong>_fbc Cookie:</strong> When a user clicks on a Facebook ad and lands on your website, the <code>fbclid</code> parameter is captured and stored in the <code>_fbc</code> cookie. This allows Facebook to attribute conversions back to the specific ad that generated the visit.</p>

		<h5>Comprehensive Event Data</h5>
		<p><strong>Automatic Data Collection:</strong> UniPixel automatically collects and sends various pieces of information to Facebook, including IP address, browser information, device information, page URL, referrer URL, and more.</p>
		<p><strong>Custom Event Data:</strong> Users can also configure custom event data to be sent along with standard events, providing more granular tracking and insights.</p>

	</section>

	<section id="getting-started">
		<h2>Getting Started</h2>

		<h3>Steps</h3>
		<ol>
			<li><strong>Install UniPixel:</strong> Download and install the UniPixel plugin from the WordPress plugin repository.</li>
			<li><strong>Setup Meta Pixel:</strong> Follow the guided setup to configure your Meta Pixel and Conversions API.</li>
			<li><strong>Define Events:</strong> Use the admin panel to define and manage the events you want to track.</li>
			<li><strong>Monitor and Optimize:</strong> Use the real-time logging feature to monitor your tracking and make necessary adjustments for optimal performance.</li>
		</ol>
		<h3>Setting Up Facebook with UniPixel</h3>
		View these important setups on preparing your facebook account to work with UniPixel.<br />
		<a href="/unipixel-documentation-meta/">Facebook Conversion API Setup steps &raquo;</a>.
	</section>





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

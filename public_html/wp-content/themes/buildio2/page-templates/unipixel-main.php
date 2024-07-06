<?php

/**
 * Template Name: UniPixel Main
 *
 * A custom page template.
 */

get_header();


?>

<?php $imgpath = get_stylesheet_directory_uri() . "/img" ?>

<div class="container mt-5">

	<div class="row mb-4">
		<div class="col-12">
			<img class="" src="<?php echo $imgpath ?>/unipixel-logo-hori-1.svg" alt="UniPixel Logo">
		</div>
	</div>


	<div class="row">
		<div class="col-12">
			<div class="card bg-light-green borderless w-100">
				<div class="card-body">
					<h2>UniPixel WordPress Plugin</h2>
					<h4>Meta (Facebook) Pixel and CAPI Integration</h4>
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
	</section>

	<section id="getting-started">
		<h2>Getting Started</h2>

		<h3>Step-by-Step Guide</h3>
		<ol>
			<li><strong>Install UniPixel:</strong> Download and install the UniPixel plugin from the WordPress plugin repository.</li>
			<li><strong>Setup Meta Pixel:</strong> Follow the guided setup to configure your Meta Pixel and Conversions API.</li>
			<li><strong>Define Events:</strong> Use the admin panel to define and manage the events you want to track.</li>
			<li><strong>Monitor and Optimize:</strong> Use the real-time logging feature to monitor your tracking and make necessary adjustments for optimal performance.</li>
		</ol>
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

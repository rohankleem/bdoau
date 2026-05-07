<?php
/**
 * Service hero partial.
 *
 * Set these globals in the page template before including:
 *   $service_caption — small caption above the heading (e.g. "Marketing & Search Visibility")
 *   $service_heading — main heading
 *   $service_lead    — short lead paragraph
 *   $service_icon    — pre-imported svg container class (e.g. "gen004Svg") — optional
 */

$service_caption = isset($service_caption) ? $service_caption : '';
$service_heading = isset($service_heading) ? $service_heading : '';
$service_lead    = isset($service_lead) ? $service_lead : '';
$service_icon    = isset($service_icon) ? $service_icon : '';
?>

<div class="overflow-hidden">
	<div class="container content-space-t-3 content-space-b-1 content-space-b-lg-2">
		<div class="row justify-content-lg-between align-items-lg-center">
			<div class="col-lg-7 mb-7 mb-lg-0">
				<?php if ($service_caption) : ?>
					<span class="text-cap"><?php echo esc_html($service_caption); ?></span>
				<?php endif; ?>
				<?php if ($service_heading) : ?>
					<h1 class="display-4 mb-4"><?php echo esc_html($service_heading); ?></h1>
				<?php endif; ?>
				<?php if ($service_lead) : ?>
					<p class="lead"><?php echo wp_kses_post($service_lead); ?></p>
				<?php endif; ?>
			</div>

			<?php if ($service_icon) : ?>
				<div class="col-lg-4">
					<div class="position-relative mx-auto text-center" data-aos="fade-up">
						<div class="svg-icon text-primary">
							<span class="svg-icon text-primary <?php echo esc_attr($service_icon); ?> largeSvgIcon mx-auto text-center w-100"></span>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>

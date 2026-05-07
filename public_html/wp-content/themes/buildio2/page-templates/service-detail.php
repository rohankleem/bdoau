<?php
/**
 * Template Name: Service Detail
 *
 * Reads page slug, looks up content from inc/service-pages-config.php,
 * and renders the page. Assign this template to any sub-service page.
 */

$has_hero = true;
$slug = get_post_field('post_name');
$config = include get_template_directory() . '/inc/service-pages-config.php';
$service_page = isset($config[$slug]) ? $config[$slug] : null;

// Sensible fallback if the slug isn't in the config yet.
if (!$service_page) {
	$service_page = [
		'parent_url'         => '/',
		'parent_label'       => 'Buildio',
		'caption'            => '',
		'heading'            => get_the_title(),
		'lead'               => 'This page is being written. In the meantime, talk to us.',
		'icon'               => 'gen002Svg',
		'work_heading'       => '',
		'work_body'          => '',
		'work_list'          => [],
		'difference_heading' => '',
		'difference_body'    => '',
		'cta_heading'        => 'Talk to Buildio.',
		'cta_body'           => 'A first conversation is honest, no pitch.',
	];
}

$service_caption = $service_page['caption'];
$service_heading = $service_page['heading'];
$service_lead    = $service_page['lead'];
$service_icon    = $service_page['icon'];

get_header();
include get_template_directory() . '/inc/hero-service.php';
?>

<div class="container px-4 mt-3">

	<!-- Breadcrumb -->
	<div class="container mb-4">
		<a href="<?php echo esc_url($service_page['parent_url']); ?>" class="text-muted small text-decoration-none">
			&larr; <?php echo esc_html($service_page['parent_label']); ?>
		</a>
	</div>

	<!-- Section 1: What we do / The work -->
	<?php if (!empty($service_page['work_heading']) || !empty($service_page['work_body']) || !empty($service_page['work_list'])) : ?>
		<div class="overflow-hidden">
			<div class="container content-space-t-1 content-space-t-lg-2 content-space-b-lg-2">
				<div class="row justify-content-lg-between align-items-lg-center">
					<div class="col-lg-7 mb-7 mb-lg-0">
						<?php if (!empty($service_page['work_heading'])) : ?>
							<h2><?php echo wp_kses_post($service_page['work_heading']); ?></h2>
						<?php endif; ?>
						<?php if (!empty($service_page['work_body'])) : ?>
							<p><?php echo wp_kses_post($service_page['work_body']); ?></p>
						<?php endif; ?>

						<?php if (!empty($service_page['work_list'])) : ?>
							<ul class="list-checked list-checked-soft-bg-primary list-checked-lg mb-5 mt-4">
								<?php foreach ($service_page['work_list'] as $item) : ?>
									<li class="list-checked-item"><?php echo wp_kses_post($item); ?></li>
								<?php endforeach; ?>
							</ul>
						<?php endif; ?>
					</div>

					<div class="col-lg-4">
						<div class="position-relative mx-auto text-center" data-aos="fade-up">
							<div class="svg-icon text-primary">
								<span class="svg-icon text-primary <?php echo esc_attr($service_icon); ?> largeSvgIcon mx-auto text-center w-100"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<!-- Section 2: Why Buildio for this -->
	<?php if (!empty($service_page['difference_heading']) || !empty($service_page['difference_body'])) : ?>
		<div class="overflow-hidden bg-light">
			<div class="container content-space-t-2 content-space-t-lg-2 content-space-b-lg-2">
				<div class="row justify-content-lg-center">
					<div class="col-lg-8 text-center">
						<?php if (!empty($service_page['difference_heading'])) : ?>
							<h2><?php echo wp_kses_post($service_page['difference_heading']); ?></h2>
						<?php endif; ?>
						<?php if (!empty($service_page['difference_body'])) : ?>
							<p class="lead"><?php echo wp_kses_post($service_page['difference_body']); ?></p>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<!-- CTA -->
	<div class="container content-space-t-2 content-space-b-2">
		<div class="w-lg-75 mx-lg-auto">
			<div class="card card-sm overflow-hidden">
				<div class="card-body d-flex align-items-center justify-content-center justify-content-md-between text-center text-md-start">
					<div class="svg-icon text-primary me-3">
						<span class="svg-icon text-primary map007Svg"></span>
					</div>
					<div class="flex-grow-1">
						<?php if (!empty($service_page['cta_heading'])) : ?>
							<h4 class="card-title mb-1"><?php echo wp_kses_post($service_page['cta_heading']); ?></h4>
						<?php endif; ?>
						<?php if (!empty($service_page['cta_body'])) : ?>
							<p class="mb-0"><?php echo wp_kses_post($service_page['cta_body']); ?></p>
						<?php endif; ?>
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

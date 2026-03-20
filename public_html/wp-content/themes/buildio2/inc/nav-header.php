<?php
$header_bg_class = 'header-soft'; // default for non-hero pages

if (!empty($has_hero)) {
	$header_bg_class = 'bg-white';
}
?>

<header id="header" class="navbar navbar-expand-lg navbar-end navbar-light <?php echo esc_attr($header_bg_class); ?>">

	<div class="container">
		<nav class="js-mega-menu navbar-nav-wrap">
			<a class="navbar-brand ps-3 ps-md-0" href="/" aria-label="Buildio">
				<img class="navbar-brand-logo" src="<?php echo get_template_directory_uri(); ?>/img/buildio-hori-clean-d.svg" alt="Buildio">
			</a>


			<button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="offcanvas offcanvas-end offcanvas-lg" tabindex="-1" id="navbarOffcanvas" aria-labelledby="navbarOffcanvasLabel">
				<div class="offcanvas-header">
					<a href="/" aria-label="Buildio">
						<img src="<?php echo get_template_directory_uri(); ?>/img/buildio-hori-clean-d.svg" alt="Buildio" style="height: 1.5rem;">
					</a>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
				<ul class="navbar-nav">


					<!-- Services -->
					<li class="hs-has-sub-menu nav-item">
						<a id="companyMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Services</a>

						<div class="hs-sub-menu dropdown-menu" aria-labelledby="companyMegaMenu" style="min-width: 14rem;">
							<a class="dropdown-item" href="#">CRM system development</a>
							<a class="dropdown-item" href="#">API integration</a>
							<a class="dropdown-item" href="#">Custom apps and software</a>
							<a class="dropdown-item" href="#">Reporting and insights</a>
							<a class="dropdown-item" href="#">Phone and SMS systems</a>
							<a class="dropdown-item" href="#">Hosting and infrastructure</a>
							<a class="dropdown-item" href="#">WordPress Development</a>
						</div>
					</li>

					<!-- Products -->
					<li class="hs-has-sub-menu nav-item">
						<a id="companyMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Products</a>

						<div class="hs-sub-menu dropdown-menu" aria-labelledby="companyMegaMenu" style="min-width: 14rem;">
							<a class="dropdown-item" href="/unipixel/">UniPixel WordPress Plugin</a>
							<a class="dropdown-item" href="/unipixel-docs/">UniPixel Documentation</a>
						</div>
					</li>

					<!-- Scrapbook -->
					<li class="hs-has-sub-menu nav-item">
						<a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" aria-expanded="false">Notebook</a>
						<div class="hs-sub-menu dropdown-menu" aria-labelledby="blogMegaMenu" style="min-width: 14rem;">




							<?php

							$args = array(
								'post_type' => 'post'
							);

							$post_query = new WP_Query($args);
							$limit = 9;
							$count = 0;

							if ($post_query->have_posts()) {

								while ($post_query->have_posts() && $count < $limit) {
									$post_query->the_post();

							?>
									<a class="dropdown-item" href="<?php the_permalink(); ?>"><span class="text-truncate"><?php echo esc_html(get_the_title()); ?></span>
										<?php if ($count === 0) { ?>
											<span class="badge bg-success rounded-pill ms-2">New</span>
										<?php } else { ?>
											<span class="badge bg-primary rounded-pill ms-2">Recent</span>
										<?php } ?>
									</a>
							<?php
									$count++;
								}

								wp_reset_postdata();
							}

							?>

							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="/scrapbook/"><strong>View all articles...</strong></a>
						</div>
					</li>


					<li class="nav-item">
						<a class="btn btn-primary btn-transition" href="/contact/">Get In Touch</a>
					</li>

				</ul>

				</div><!-- .offcanvas-body -->
			</div><!-- .offcanvas -->

		</nav>
	</div>
</header>
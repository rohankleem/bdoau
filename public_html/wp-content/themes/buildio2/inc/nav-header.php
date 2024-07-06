<header id="header" class="navbar navbar-expand-lg navbar-end navbar-light bg-white">
	<div class="container">
		<nav class="js-mega-menu navbar-nav-wrap">
			<a class="navbar-brand" href="/" aria-label="Buildio">
				<img class="navbar-brand-logo" src="<?php echo get_template_directory_uri(); ?>/img/buildio-hori-clean-b.svg" alt="Buildio">
			</a>


			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-default">
					<i class="bi-list"></i>
				</span>
				<span class="navbar-toggler-toggled">
					<i class="bi-x"></i>
				</span>
			</button>


			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">


					<!-- Services -->
					<li class="hs-has-sub-menu nav-item">
						<a id="companyMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>

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
						<a id="companyMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>

						<div class="hs-sub-menu dropdown-menu" aria-labelledby="companyMegaMenu" style="min-width: 14rem;">
							<a class="dropdown-item" href="#">UniPixel WordPress Plugin</a>
						</div>
					</li>

					<!-- Scrapbook -->
					<li class="hs-has-sub-menu nav-item">
						<a id="blogMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Scrapbook</a>
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
									<a class="dropdown-item" href="<?php the_permalink(); ?>"><?php echo sc_get_content_substr(get_the_title(), 37) . "..."; ?>
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

			</div>

		</nav>
	</div>
</header>
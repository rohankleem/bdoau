<header id="header" class="navbar navbar-expand-lg navbar-end navbar-light bg-white">
	<div class="container">
		<nav class="js-mega-menu navbar-nav-wrap">
			<a class="navbar-brand" href="/" aria-label="Buildio">
				<img class="navbar-brand-logo" src="<?php echo get_template_directory_uri(); ?>/img/buildio-hori-clean-b.svg" alt="Buildio">
			</a>


			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-default">
        <!-- Menu Icon SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12.5a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1h-10a.5.5 0 0 1-.5-.5z"/>
        </svg>
    </span>
    <span class="navbar-toggler-toggled">
        <!-- Close Icon SVG -->
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
        </svg>
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
							<a class="dropdown-item" href="/unipixel/">UniPixel WordPress Plugin</a>
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
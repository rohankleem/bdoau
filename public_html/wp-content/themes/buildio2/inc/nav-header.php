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

						<!-- ===== SERVICES (mega menu, 4 columns) ===== -->
						<li class="hs-has-sub-menu nav-item"
							data-hs-mega-menu-item-options='{
								"desktop": { "position": "left", "maxWidth": "60rem" }
							}'>
							<a id="servicesMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle dropdown-toggle" href="#" role="button" aria-expanded="false">Services</a>

							<div class="hs-mega-menu hs-sub-menu dropdown-menu" aria-labelledby="servicesMegaMenu" style="min-width: 60rem;">
								<div class="row">

									<!-- Software Development -->
									<div class="col-md-3">
										<span class="dropdown-header">Software Development</span>
										<a class="dropdown-item" href="/software-development/">All software services</a>
										<a class="dropdown-item" href="/software-development/#crm">CRM systems (Zoho)</a>
										<a class="dropdown-item" href="/software-development/#api">API integrations</a>
										<a class="dropdown-item" href="/software-development/#custom">Custom apps &amp; software</a>
										<a class="dropdown-item" href="/software-development/#wordpress">WordPress development</a>
									</div>

									<!-- Marketing & Search Visibility -->
									<div class="col-md-3">
										<span class="dropdown-header">Marketing &amp; Search</span>
										<a class="dropdown-item" href="/marketing-search-visibility/">All marketing services</a>
										<a class="dropdown-item" href="/marketing-search-visibility/#audit">Search visibility audit</a>
										<a class="dropdown-item" href="/marketing-search-visibility/#seo">SEO &mdash; traditional search</a>
										<a class="dropdown-item" href="/marketing-search-visibility/#geo">GEO / AEO &mdash; AI search</a>
										<a class="dropdown-item" href="/marketing-search-visibility/#content">Content for AI &amp; humans</a>
										<a class="dropdown-item" href="/marketing-search-visibility/#digital-pr">Digital PR in AI ecosystems</a>
										<a class="dropdown-item" href="/marketing-search-visibility/#measurement">Visibility measurement</a>
									</div>

									<!-- Transformation & Streamlining -->
									<div class="col-md-3">
										<span class="dropdown-header">Transformation</span>
										<a class="dropdown-item" href="/transformation/">All transformation services</a>
										<a class="dropdown-item" href="/transformation/#discovery">Discovery &amp; diagnosis</a>
										<a class="dropdown-item" href="/transformation/#streamlining">Process streamlining</a>
										<a class="dropdown-item" href="/transformation/#systems">Business systems design</a>
									</div>

									<!-- Automations -->
									<div class="col-md-3">
										<span class="dropdown-header">Automations</span>
										<a class="dropdown-item" href="/automations/">All automations</a>
										<a class="dropdown-item" href="/automations/#workflow">Workflow automation</a>
										<a class="dropdown-item" href="/automations/#integrations">System integrations</a>
										<a class="dropdown-item" href="/automations/#ai-agents">AI &amp; agent automation</a>
									</div>

								</div>
							</div>
						</li>

						<!-- ===== PRODUCTS ===== -->
						<li class="hs-has-sub-menu nav-item">
							<a id="productsMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle dropdown-toggle" href="#" role="button" aria-expanded="false">Products</a>

							<div class="hs-sub-menu dropdown-menu" aria-labelledby="productsMegaMenu" style="min-width: 16rem;">
								<a class="dropdown-item" href="/unipixel/">UniPixel WordPress Plugin</a>
								<a class="dropdown-item" href="/unipixel-docs/">UniPixel Documentation</a>
							</div>
						</li>

						<!-- ===== NOTEBOOK (blog, dynamic) ===== -->
						<li class="hs-has-sub-menu nav-item">
							<a id="notebookMegaMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle dropdown-toggle" href="#" role="button" aria-expanded="false">Notebook</a>
							<div class="hs-sub-menu dropdown-menu" aria-labelledby="notebookMegaMenu" style="min-width: 18rem;">

								<?php
								$post_query = new WP_Query(array('post_type' => 'post'));
								$limit = 9;
								$count = 0;

								if ($post_query->have_posts()) {
									while ($post_query->have_posts() && $count < $limit) {
										$post_query->the_post();
								?>
										<a class="dropdown-item" href="<?php the_permalink(); ?>">
											<span class="text-truncate"><?php echo esc_html(get_the_title()); ?></span>
											<?php if ($count === 0) : ?>
												<span class="badge bg-success rounded-pill ms-2">New</span>
											<?php else : ?>
												<span class="badge bg-primary rounded-pill ms-2">Recent</span>
											<?php endif; ?>
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

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

						<!-- ===== SOFTWARE & WEB ===== -->
						<li class="hs-has-sub-menu nav-item">
							<a id="softwareMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle dropdown-toggle" href="#" role="button" aria-expanded="false">Software &amp; Web</a>

							<div class="hs-sub-menu dropdown-menu" aria-labelledby="softwareMenu" style="min-width: 18rem;">
								<a class="dropdown-item" href="/software-development/">All Software &amp; Web services</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/software-development/crm-systems/">CRM systems (Zoho)</a>
								<a class="dropdown-item" href="/software-development/api-integrations/">API integrations</a>
								<a class="dropdown-item" href="/software-development/custom-apps/">Custom apps &amp; software</a>
								<a class="dropdown-item" href="/software-development/wordpress/">WordPress sites &amp; plugins</a>
								<a class="dropdown-item" href="/software-development/web-design/">Websites &amp; web design</a>
							</div>
						</li>

						<!-- ===== MARKETING & SEARCH ===== -->
						<li class="hs-has-sub-menu nav-item">
							<a id="marketingMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle dropdown-toggle" href="#" role="button" aria-expanded="false">Marketing &amp; Search</a>

							<div class="hs-sub-menu dropdown-menu" aria-labelledby="marketingMenu" style="min-width: 18rem;">
								<a class="dropdown-item" href="/marketing-search-visibility/">All Marketing &amp; Search services</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/marketing-search-visibility/audit/">Search visibility audit</a>
								<a class="dropdown-item" href="/marketing-search-visibility/seo/">SEO &mdash; traditional search</a>
								<a class="dropdown-item" href="/marketing-search-visibility/geo-aeo/">GEO / AEO &mdash; AI search</a>
								<a class="dropdown-item" href="/marketing-search-visibility/content/">Content for AI &amp; humans</a>
								<a class="dropdown-item" href="/marketing-search-visibility/digital-pr/">Digital PR in AI ecosystems</a>
								<a class="dropdown-item" href="/marketing-search-visibility/measurement/">Visibility measurement</a>
							</div>
						</li>

						<!-- ===== TRANSFORMATION ===== -->
						<li class="hs-has-sub-menu nav-item">
							<a id="transformationMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle dropdown-toggle" href="#" role="button" aria-expanded="false">Transformation</a>

							<div class="hs-sub-menu dropdown-menu" aria-labelledby="transformationMenu" style="min-width: 18rem;">
								<a class="dropdown-item" href="/transformation/">All Transformation services</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/transformation/discovery/">Discovery &amp; diagnosis</a>
								<a class="dropdown-item" href="/transformation/streamlining/">Process streamlining</a>
								<a class="dropdown-item" href="/transformation/systems/">Business systems design</a>
							</div>
						</li>

						<!-- ===== AUTOMATIONS ===== -->
						<li class="hs-has-sub-menu nav-item">
							<a id="automationsMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle dropdown-toggle" href="#" role="button" aria-expanded="false">Automations</a>

							<div class="hs-sub-menu dropdown-menu" aria-labelledby="automationsMenu" style="min-width: 18rem;">
								<a class="dropdown-item" href="/automations/">All Automation services</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/automations/workflow/">Workflow automation</a>
								<a class="dropdown-item" href="/automations/integrations/">System integrations</a>
								<a class="dropdown-item" href="/automations/ai-agents/">AI &amp; agent automation</a>
							</div>
						</li>

						<?php /* ===== NOTEBOOK (blog) — hidden from nav until content is filled out =====
						<li class="hs-has-sub-menu nav-item">
							<a id="notebookMenu" class="hs-mega-menu-invoker nav-link nav-link-toggle dropdown-toggle" href="#" role="button" aria-expanded="false">Notebook</a>
							<div class="hs-sub-menu dropdown-menu" aria-labelledby="notebookMenu" style="min-width: 18rem;">

								$post_query = new WP_Query(array('post_type' => 'post'));
								$limit = 9;
								$count = 0;

								if ($post_query->have_posts()) {
									while ($post_query->have_posts() && $count < $limit) {
										$post_query->the_post();
										echo '<a class="dropdown-item" href="' . get_permalink() . '">';
										echo '<span class="text-truncate">' . esc_html(get_the_title()) . '</span>';
										if ($count === 0) {
											echo '<span class="badge bg-success rounded-pill ms-2">New</span>';
										} else {
											echo '<span class="badge bg-primary rounded-pill ms-2">Recent</span>';
										}
										echo '</a>';
										$count++;
									}
									wp_reset_postdata();
								}

								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="/scrapbook/"><strong>View all articles...</strong></a>
							</div>
						</li>
						*/ ?>


						<li class="nav-item">
							<a class="btn btn-primary btn-transition" href="/contact/">Get In Touch</a>
						</li>

					</ul>

				</div><!-- .offcanvas-body -->
			</div><!-- .offcanvas -->

		</nav>
	</div>
</header>

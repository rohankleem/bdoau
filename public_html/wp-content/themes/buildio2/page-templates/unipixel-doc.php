<?php
/*
Template Name: UniPixel Doc Page
Template Post Type: page
*/

get_header();

/**
 * CONFIG
 * The "UniPixel Documentation" parent page ID.
 */
$unipixel_docs_root_id = 0;

if (isset($_ENV['UNIPIXEL_DOC_PARENT_PAGE_ID'])) {
	$unipixel_docs_root_id = (int) $_ENV['UNIPIXEL_DOC_PARENT_PAGE_ID'];
}

if ($unipixel_docs_root_id < 1) {
	// Fallback to your known value if env var missing
	$unipixel_docs_root_id = 346;
}

$current_id = 0;
if (is_singular('page')) {
	$current_id = (int) get_queried_object_id();
}

/**
 * If this page is NOT the root or a descendant of root, we still render something,
 * but we keep the menu rooted at $unipixel_docs_root_id (per your request).
 */
$ancestors = array();
if ($current_id > 0) {
	$ancestors = get_post_ancestors($current_id);

	if (!is_array($ancestors)) {
		$ancestors = array();
	}

	$ancestors = array_map('intval', $ancestors);
}


/**
 * Get the root page object.
 */
$root_post = get_post($unipixel_docs_root_id);

/**
 * Get all direct children of the root (these become the sidebar "sibling" links).
 * Sort by menu order (Page Attributes -> Order), then title.
 */
$root_children = get_pages(array(
	'post_type'   => 'page',
	'parent'      => $unipixel_docs_root_id,
	'sort_column' => 'menu_order,post_title',
	'sort_order'  => 'ASC',
	'post_status' => 'publish',
));

/**
 * Helper to safely render a list-group item.
 */
function buildio2_render_docs_nav_item($page_id, $title, $url, $is_active) {
	$classes = 'list-group-item list-group-item-action';
	if ($is_active) {
		$classes .= ' active';
	}

	echo '<a class="' . esc_attr($classes) . '" href="' . esc_url($url) . '">';
	echo esc_html($title);
	echo '</a>';
}

?>

<div class="container px-4 mt-5">
	<div class="row">

		<!-- LEFT SIDEBAR -->
		<div class="col-12 col-md-4 col-lg-3 mb-4 mb-md-0">
			<div class="card">
				<div class="card-body">
					<div class="mb-3">
						<div class="text-uppercase small text-muted">Documentation</div>
					</div>

					<div class="list-group">

						<?php
						// Root link at the top
						if (!empty($root_post) && !is_wp_error($root_post)) {
							$root_title = get_the_title($unipixel_docs_root_id);
							$root_url   = get_permalink($unipixel_docs_root_id);

							$is_active_root = false;
							if ($current_id === $unipixel_docs_root_id) {
								$is_active_root = true;
							}

							buildio2_render_docs_nav_item(
								$unipixel_docs_root_id,
								$root_title,
								$root_url,
								$is_active_root
							);
						}

						// Child/sibling links (all items under UniPixel Documentation)
						if (!empty($root_children)) {

							echo '<div class="my-2"></div>';

							foreach ($root_children as $child_page) {
								$child_id    = (int) $child_page->ID;
								$child_title = get_the_title($child_id);
								$child_url   = get_permalink($child_id);

								$is_active_child = false;
								if ($current_id === $child_id) {
									$is_active_child = true;
								}

								buildio2_render_docs_nav_item(
									$child_id,
									$child_title,
									$child_url,
									$is_active_child
								);
							}
						} else {
							// If there are no children, show a gentle placeholder
							echo '<div class="mt-3 text-muted small">No documentation pages found under this section.</div>';
						}
						?>

					</div>

					<?php
					// Optional helper message if someone uses this template outside the docs tree
					if ($current_id > 0 && $is_root_or_descendant === false) {
						echo '<div class="mt-3 small text-muted">';
						echo 'Note: This page is not under UniPixel Documentation (ID ' . esc_html($unipixel_docs_root_id) . ').';
						echo '</div>';
					}
					?>
				</div>
			</div>
		</div>

		<!-- MAIN CONTENT -->
		<div class="col-12 col-md-8 col-lg-9">
			<?php
			while (have_posts()) :
				the_post();
			?>

				<h1 class="mb-4"><?php echo esc_html(get_the_title()); ?></h1>

				<div class="card">
					<div class="card-body">
						<?php the_content(); ?>
					</div>
				</div>

			<?php
			endwhile;
			?>
		</div>

	</div>
</div>

<?php
get_footer();

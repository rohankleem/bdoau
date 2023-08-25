<?php get_header(); ?>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner rounded">
		<div class="carousel-item active">
			<img class="d-block w-100" src="<?php echo get_stylesheet_directory_uri() ?>/img/buildio-hero-2.jpg" alt="Buildio"/>
			<div class="carousel-caption d-none d-md-block">
				<h5>Digital Integrations for Business Development</h5>
				<p>Tie together business processes for optimsation and easy workflow automation.</p>
			</div>
		</div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
</div>



<div class="row blog-tile-snippets mt-5">
    <?php if (have_posts()) : ?>
        <?php $post_counter = 0; ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php
            if ($post_counter < 3) {
                // Show up to 3 posts on mobile devices
                $post_counter++;
            ?>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <h2><?php the_title(); ?></h2>
                    <small>Posted on <?php the_time('F jS, Y') ?></small>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php
            } elseif ($post_counter < 6) {
                // Show up to 6 posts on larger screens
                $post_counter++;
            ?>
                <div class="col-4 d-none d-md-block">
                    <h2><?php the_title(); ?></h2>
                    <small>Posted on <?php the_time('F jS, Y') ?></small>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php
            } else {
                break; // Stop looping once the maximum post count is reached
            }
            ?>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e('No articles to show.'); ?></p>
    <?php endif; ?>
</div>




<?php get_footer(); ?>
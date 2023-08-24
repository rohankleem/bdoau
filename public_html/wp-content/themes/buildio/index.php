<?php get_header(); ?>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="https://picsum.photos/800/300" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h5>First slide label</h5>
				<p>Some representative placeholder content for the first slide.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="https://picsum.photos/800/300" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h5>Second slide label</h5>
				<p>Some representative placeholder content for the second slide.</p>
			</div>
		</div>
		<div class="carousel-item">
			<img src="https://picsum.photos/800/300" class="d-block w-100" alt="...">
			<div class="carousel-caption d-none d-md-block">
				<h5>Third slide label</h5>
				<p>Some representative placeholder content for the third slide.</p>
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



<div class="row">
    <?php if (have_posts()) : ?>
        <?php $post_counter = 0; ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php
            if ($post_counter < 3) {
                // Show up to 3 posts on mobile devices
                $post_counter++;
            ?>
                <div class="col-4 col-sm-12">
                    <h2><?php the_title(); ?></h2>
                    <small>Posted on <?php the_time('F jS, Y') ?></small>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php
            } elseif ($post_counter < 6) {
                // Show up to 6 posts on larger screens
                $post_counter++;
            ?>
                <div class="col-4 d-none d-md-block ">
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
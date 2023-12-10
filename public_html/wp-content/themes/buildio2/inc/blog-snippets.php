
<div class="container">


<div class="row blog-tile-snippets mt-5">
    <?php if (have_posts()) : ?>
        <?php $post_counter = 0; ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php
            if ($post_counter < 6) {
                // Show up to 3 posts on mobile devices
                $post_counter++;
            ?>
                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                    <h3><?php the_title(); ?></h3>
                    <small>Posted on <?php the_time('F jS, Y') ?></small>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php
            } elseif ($post_counter < 9) {
                // Show up to 6 posts on larger screens
                $post_counter++;
            ?>
                <div class="col-4 d-none d-md-block">
                    <h3><?php the_title(); ?></h3>
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


</div>
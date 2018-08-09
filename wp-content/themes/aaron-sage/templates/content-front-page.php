<section class="home-slider">
    <div class="home-slider-content">
        <h2>Is your website AODA compliant?</h2>
        <h3>In Ontario, most company websites are required to be AODA compliant.</h3>
        <a href="#" class="btn btn-lg mt-3">Learn More <i class="fas fa-arrow-right"></i></a>
    </div>
</section>
<section class="front-blog">
<h2>Latest Posts</h2>
    <div class="container">
        <div class="row">
            <?php
                $args = array(
                	'posts_per_page'         => '3',
                );
                
                // The Query
                $query = new WP_Query( $args );
                
                // The Loop
                if ( $query->have_posts() ) {
                	while ( $query->have_posts() ) {
                		$query->the_post(); ?>
                	<div class="col-4">
                	<a href="<?php the_permalink(); ?>">
                	<div class="front-blog-image">
                	    <?php the_post_thumbnail('front-thumb'); ?>
                	</div>
                	<h3><?php the_title(); ?></h3>
                	<?php the_date('F j, Y', '<span>', '</span>'); ?>
                	</a>
                	</div>
                <?php	}
                } else {
                	// no posts found
                }
                
                // Restore original Post Data
                wp_reset_postdata();
                ?>
        </div>
    </div>
</section>
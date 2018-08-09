<article <?php post_class(); ?>>
  <div class="row mb-3">
    <div class="col-12 col-sm-6">
      <?php if ( has_post_thumbnail() ) {
    	  the_post_thumbnail('medium');
      } ?>
    </div>
    <div class="col-12 col-sm-6">
      <header>
        <h2 class="entry-title iii"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php get_template_part('templates/entry-meta'); ?>
      </header>
    </div>
  </div>
</article>

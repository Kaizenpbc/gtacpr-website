<?php get_header(); ?>
<main>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="section"><div class="section-inner"><?php the_content(); ?></div></div>
  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>

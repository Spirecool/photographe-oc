
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_content(); ?></p>
      <?php endwhile; endif; ?>
    </div>
    <div class="col-md-4">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
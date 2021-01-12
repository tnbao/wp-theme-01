<?php
/*
 * Template Name: Shop Page
 */
?>
<?php get_header() ?>

<?php get_template_part( 'template-parts/section', 'hero' ) ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1><?php the_title(); ?></h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <?php the_content(); ?>
        <?php endwhile; endif;?>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>

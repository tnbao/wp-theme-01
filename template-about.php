<?php
/*
 * Template Name: About
 */
?>
<?php get_header() ?>

<?php get_template_part( 'template-parts/section', 'hero' ) ?>

<?php get_template_part( 'template-parts/section', 'breadcrumb', array( 'section_title' => 'About Us' ) ) ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-6 text-center">
        <p>This is about page.</p>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>

<?php get_header() ?>

<?php get_template_part( 'template-parts/section', 'hero' ) ?>

<?php get_template_part( 'template-parts/section', 'breadcrumb', array( 'section_title' => 'Shop' ) ) ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <?php woocommerce_content(); ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer() ?>

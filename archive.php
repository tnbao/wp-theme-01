<?php get_header() ?>

<?php get_template_part( 'template-parts/section', 'hero' ) ?>

<?php get_template_part( 'template-parts/section', 'breadcrumb', array( 'section_title' => single_cat_title('', false) ) ) ?>

<!-- Blog Section Begin -->
<section class="blog spade">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-7">
        <div class="row">
					<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>
					  <?php get_template_part( 'template-parts/section', 'archive' ); ?>
					<?php endwhile; endif; ?>
          <div class="col-lg-12">
            <div class="product__pagination blog__pagination">
							<?php get_template_part( 'template-parts/section', 'pagination' ); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-5">
        <?php get_template_part( 'template-parts/section', 'blog-sidebar' ) ?>
      </div>
    </div>
  </div>
</section>
<!-- Blog Section End -->

<?php get_footer() ?>

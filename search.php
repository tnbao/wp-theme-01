<?php get_header() ?>

<?php get_template_part( 'template-parts/section', 'hero' ) ?>

<?php get_template_part( 'template-parts/section', 'breadcrumb', array( 'section_title' => single_cat_title('', false) ) ) ?>

<!-- Blog Section Begin -->
<section class="blog spade">
  <div class="container">
    <div class="row mb-4">
      <h2>Search Results for '<?php echo get_search_query(); ?>'</h2>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-7">
        <?php if ( have_posts() ): ?>
        <div class="row">
          <?php while ( have_posts() ): the_post(); ?>
          <div class="col-lg-4 col-md-4 col-sm-4">
            <?php get_template_part( 'template-parts/section', 'blog-item' ); ?>
          </div>
          <?php endwhile; ?>
          <div class="col-lg-12">
            <div class="product__pagination blog__pagination">
              <?php get_template_part( 'template-parts/section', 'pagination' ); ?>
            </div>
          </div>
        </div>
        <?php else: ?>
        <div class="row">
          <p>There are no results for '<?php echo get_search_query(); ?>'</p>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<!-- Blog Section End -->

<?php get_footer() ?>

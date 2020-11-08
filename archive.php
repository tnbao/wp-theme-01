<?php get_header() ?>

<?php get_template_part( 'template-parts/section', 'hero' ) ?>

<?php get_template_part( 'template-parts/section', 'breadcrumb', array( 'section_title' => single_cat_title('', false) ) ) ?>

<!-- Blog Section Begin -->
<section class="blog spade">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-5">
        <div class="blog__sidebar">
          <div class="blog__sidebar__search">
            <form action="#">
              <input type="text" placeholder="Search...">
              <button type="submit"><span class="icon_search"></span></button>
            </form>
          </div>
          <div class="blog__sidebar__item">
            <h4>Categories</h4>
            <ul>
              <li><a href="#">All</a></li>
              <li><a href="#">Beauty (20)</a></li>
              <li><a href="#">Food (5)</a></li>
              <li><a href="#">Life Style (9)</a></li>
              <li><a href="#">Travel (10)</a></li>
            </ul>
          </div>
          <div class="blog__sidebar__item">
            <h4>Recent News</h4>
            <div class="blog__sidebar__recent">
              <a href="#" class="blog__sidebar__recent__item">
                <div class="blog__sidebar__recent__item__pic">
                  <img src="<?php bloginfo( 'template_directory' ) ?>/img/blog/sidebar/sr-1.jpg" alt="">
                </div>
                <div class="blog__sidebar__recent__item__text">
                  <h6>09 Kinds Of Vegetables<br/> Protect The Liver</h6>
                  <span>MAR 05, 2019</span>
                </div>
              </a>
              <a href="#" class="blog__sidebar__recent__item">
                <div class="blog__sidebar__recent__item__pic">
                  <img src="<?php bloginfo( 'template_directory' ) ?>/img/blog/sidebar/sr-2.jpg" alt="">
                </div>
                <div class="blog__sidebar__recent__item__text">
                  <h6>Tips You To Balance<br/> Nutrition Meal Day</h6>
                  <span>MAR 05, 2019</span>
                </div>
              </a>
              <a href="#" class="blog__sidebar__recent__item">
                <div class="blog__sidebar__recent__item__pic">
                  <img src="<?php bloginfo( 'template_directory' ) ?>/img/blog/sidebar/sr-3.jpg" alt="">
                </div>
                <div class="blog__sidebar__recent__item__text">
                  <h6>4 Principles Help You Lose <br/>Weight With Vegetables</h6>
                  <span>MAR 05, 2019</span>
                </div>
              </a>
            </div>
          </div>
          <div class="blog__sidebar__item">
            <h4>Search By</h4>
            <div class="blog__sidebar__item__tags">
              <a href="#">Apple</a>
              <a href="#">Beauty</a>
              <a href="#">Vegetables</a>
              <a href="#">Fruit</a>
              <a href="#">Healthy Food</a>
              <a href="#">Lifestyle</a>
            </div>
          </div>
        </div>
      </div>
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
    </div>
  </div>
</section>
<!-- Blog Section End -->

<?php get_footer() ?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/section', 'hero' ) ?>

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

	<?php
	$author          = get_the_author_meta( 'last_name' ) . ' ' . get_the_author_meta( 'first_name' );
	$author_nickname = get_the_author_meta( 'nickname' );
	?>

  <!-- Blog Details Hero Begin -->
  <section class="blog-details-hero set-bg"
           data-setbg="<?php bloginfo( 'template_directory' ) ?>/img/blog/details/details-hero.jpg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="blog__details__hero__text">
            <h2><?php the_title(); ?></h2>
            <ul>
              <li><?php echo $author; ?></li>
              <li><?php the_date(); ?></li>
							<?php if ( get_comments_number( get_the_ID() ) > 0 ): ?>
                <li><i class="fa fa-comment-o"></i> <?php echo get_comments_number( get_the_ID() ); ?></li>
							<?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Details Hero End -->

  <!-- Blog Details Section Begin -->
  <section class="blog-details spade">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-5 order-md-1 order-2">
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
        <div class="col-lg-8 col-md-7 order-md-1 order-1">
          <div class="blog__details__text">
						<?php the_content(); ?>
          </div>
          <div class="blog__details__content">
            <div class="row">
              <div class="col-lg-6">
                <div class="blog__details__author">
                  <div class="blog__details__author__pic">
                    <img src="<?php bloginfo( 'template_directory' ) ?>/img/blog/details/details-author.jpg" alt="">
                  </div>
                  <div class="blog__details__author__text">
                    <h6><?php echo $author; ?></h6>
                    <span><?php echo $author_nickname; ?></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="blog__details__widget">
                  <ul>
										<?php if ( has_category() ): ?>
                      <li>
                        <span>Categories:</span>
												<?php
												$categories = get_the_category();
												foreach ( $categories as $cat ): ?>
                          <a class="link-normal"
                             href="<?php echo get_category_link( $cat->term_id ); ?>"><?php echo $cat->name; ?></a>
												<?php endforeach; ?>
                      </li>
										<? endif; ?>
										<?php if ( has_tag() ): ?>
                      <li>
                        <span>Tags:</span>
												<?php
												$tags = get_the_tags();
												foreach ( $tags as $tag ): ?>
                          <a class="link-normal"
                             href="<?php echo get_tag_link( $tag->term_id ); ?>"><?php echo $tag->name; ?></a>
												<?php endforeach; ?>
                      </li>
										<?php endif; ?>
                  </ul>
                  <div class="blog__details__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-google-plus"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-envelope"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>

					<?php /*comments_template(); */ ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Details Section End -->

<?php endwhile; endif; ?>

<!-- Related Blog Section Begin -->
<?php
$post_may_like = get_field( 'post_may_like' );
if ( $post_may_like ): ?>
  <section class="related-blog spade">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-title related-blog-title">
            <h2>Post You May Like</h2>
          </div>
        </div>
      </div>
      <div class="row">
				<?php
				foreach ( $post_may_like as $post ):
					// Setup this post for WP functions (variable must be named $post).
					setup_postdata( $post ); ?>
          <div class="col-lg-4 col-md-4 col-sm-6">
            <div class="blog__item">
              <div class="blog__item__pic">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php bloginfo( 'template_directory' ) ?>/img/blog/blog-1.jpg" alt="">
                </a>
              </div>
              <div class="blog__item__text">
                <ul>
                  <li><i class="fa fa-calendar-o"></i> <?php echo get_the_date(); ?></li>
                  <li><i class="fa fa-comment-o"></i> <?php echo get_comments_number( get_the_ID() ); ?></li>
                </ul>
                <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                <p><?php the_excerpt(); ?></p>
              </div>
            </div>
          </div>
				<?php endforeach; ?>
      </div>
    </div>
  </section>
	<?php
	// Reset the global post object so that the rest of the page works correctly.
	wp_reset_postdata(); ?>
<?php endif; ?>
<!-- Related Blog Section End -->

<?php get_footer(); ?>

<?php get_header(); ?>

<?php get_template_part( 'template-parts/section', 'hero' ) ?>

<?php if ( have_posts() ): while ( have_posts() ): the_post(); ?>

	<?php
	$author          = get_the_author_meta( 'last_name' ) . ' ' . get_the_author_meta( 'first_name' );
	$author_nickname = get_the_author_meta( 'nickname' );
	$author_image    = get_avatar( get_the_author_meta( 'ID' ), 92 )
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
					<?php get_template_part( 'template-parts/section', 'blog-sidebar' ) ?>
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
										<?php echo $author_image; ?>
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

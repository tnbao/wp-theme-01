<div class="blog__item">
  <div class="blog__item__pic">
    <?php echo get_the_post_thumbnail( get_the_ID(), 'post_thumbnail_large' ); ?>
  </div>
  <div class="blog__item__text">
    <ul>
      <li><i class="fa fa-calendar-o"></i> <?php echo get_the_date(); ?></li>
      <?php if ( get_comments_number( get_the_ID() ) > 0 ): ?>
        <li><i class="fa fa-comment-o"></i> <?php echo get_comments_number( get_the_ID() ); ?></li>
      <?php endif; ?>
    </ul>
    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
    <p><?php echo get_the_excerpt() ?></p>
    <a href="<?php the_permalink(); ?>" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
  </div>
</div>

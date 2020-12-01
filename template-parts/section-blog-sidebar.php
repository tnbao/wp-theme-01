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
			<?php
			$all_categories = get_categories( array(
				'orderby' => 'name',
				'order'   => 'ASC'
			) );
			foreach ( $all_categories as $category ): ?>
        <li>
          <a href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>"><?php echo esc_html( $category->name ) ?>
            (<?php echo $category->count ?>)</a>
        </li>
			<?php endforeach; ?>
    </ul>
  </div>
  <div class="blog__sidebar__item">
    <h4>Recent News</h4>
    <div class="blog__sidebar__recent">
			<?php
			$recent_posts = wp_get_recent_posts( array(
				"numberposts" => 3, // Number of recent posts thumbnails to display
				'post_status' => 'publish' // Show only the published posts
			) );
			foreach ( $recent_posts as $post ): ?>
        <a href="<?php echo get_permalink( $post['ID'] ) ?>" class="blog__sidebar__recent__item">
          <div class="blog__sidebar__recent__item__pic">
						<?php echo get_the_post_thumbnail( $post['ID'], 'post_thumbnail_small' ); ?>
          </div>
          <div class="blog__sidebar__recent__item__text">
            <h6><?php echo $post['post_title'] ?></h6>
            <span><?php echo get_the_date( 'M d, Y', $post['ID'] ) ?></span>
          </div>
        </a>
			<?php endforeach;
			wp_reset_query(); ?>
    </div>
  </div>
  <div class="blog__sidebar__item">
    <h4>Search By</h4>
    <div class="blog__sidebar__item__tags">
			<?php
			$all_tags = get_tags();
			foreach ( $all_tags as $tag ): ?>
        <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag -> name; ?></a>
			<?php endforeach; ?>
    </div>
  </div>
</div>

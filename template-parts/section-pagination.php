<?php
function my_pagination( $pages = '', $range = 2 ) {
	$show_items = ( $range * 2 ) + 1;

	global $paged;
	if ( empty( $paged ) ) {
		$paged = 1;
	}

	if ( $pages == '' ) {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if ( ! $pages ) {
			$pages = 1;
		}
	}

	if ( 1 != $pages ) {
		if ( $paged > 1 && $show_items < $pages ) {
			echo "<a href='" . get_pagenum_link( $paged - 1 ) . "'><i class='fa fa-long-arrow-left'></i></a>";
		}

		for ( $i = 1; $i <= $pages; $i ++ ) {
			if ( 1 != $pages && ( ! ( $i >= $paged + $range + 1 || $i <= $paged - $range - 1 ) || $pages <= $show_items ) ) {
				echo ( $paged == $i ) ? "<a class='current'>" . $i . "</a>" : "<a href='" . get_pagenum_link( $i ) . "' class='inactive' >" . $i . "</a>";
			}
		}

		if ( $paged < $pages && $show_items < $pages ) {
			echo "<a href='" . get_pagenum_link( $paged + 1 ) . "'><i class='fa fa-long-arrow-right'></i></a>";
		}
	}
}

my_pagination();
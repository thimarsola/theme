<?php


/**
 * @param  mixed  $query
 *
 * @return void
 */
function modify_product_cat_query( mixed $query ): void {
	if ( ! is_admin() && $query->is_archive( 'category' ) ) {
		$query->set( 'posts_per_page', 12 );
	}
}

add_action( 'pre_get_posts', 'modify_product_cat_query' );

<?php

/**
 * Returns the URL of the current page.
 *
 * @return string
 */
function get_current_page_url(): string {
	global $wp;

	return home_url( add_query_arg( array(), $wp->request ) );
}

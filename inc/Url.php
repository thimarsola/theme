<?php

/**
 * Returns the URL of the current page.
 *
 * @return string|null
 */
function get_current_page_url(): ?string {
    global $wp;
    $current_url = home_url( add_query_arg( array(), $wp->request ) );

    return $current_url;
}

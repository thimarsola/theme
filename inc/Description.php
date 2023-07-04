<?php

/**
 * Function that returns a description.
 *
 * @return string
 */
function get_description(): string {
	if ( is_singular( 'post' ) ) {
		$description = get_the_excerpt();
	} else {
		$description = '';
	}

	return $description;
}

<?php

/**
 * Formats a phone number by removing spaces, parentheses, and hyphens.
 *
 * @param string $phone The phone number to be formatted.
 *
 * @return string Returns the formatted phone number.
 */
function format_phone( string $phone ): string {
	return str_replace( array( ' ', '(', ')', '-' ), '', $phone );
}

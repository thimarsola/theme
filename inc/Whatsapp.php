<?php

/**
 * Generates a link to WhatsApp.
 *
 * @param string $phone The phone number to which the message will be sent. Must be in international format (e.g. 5511999999999).
 * @param string $message The message to be sent via WhatsApp.
 * @param string|null $text The link text. If not provided, the default value of 'Let's chat?' will be used.
 * @param string|null $class The CSS class for the link. Default value is NULL.
 * @param string $title The link title. Default value is 'Let's chat?'.
 *
 * @return string Returns the HTML for the WhatsApp link.
 */
function whatsapp_link( $phone, $message, $text = null, $class = null, $title = 'Vamos conversar?' ): string {
	if ( null === $class ) {
		$data_class = '';
	} else {
		$data_class = 'class="' . esc_attr( $class ) . '"';
	}

	return '<a rel="nofollow noreferrer noopener" ' . $data_class . ' href="https://api.whatsapp.com/send?phone=55' .
		esc_attr( format_phone( $phone ) ) . esc_html( '&text=' ) . rawurlencode( $message ) . '" target="_blank" title="' . esc_attr( $title ) . '">' . $text . '</a>';
}

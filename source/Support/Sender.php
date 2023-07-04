<?php
require_once dirname( __DIR__, 2 ) . '/vendor/autoload.php';

use Source\Support\Email;

if ( $_POST ) {
	$subject_form      = 'Formulário de Contato Website - ' . SITE['name'];
	$name_form         = filter_var( $_POST['name'], FILTER_SANITIZE_STRING );
	$mail_form         = filter_var( $_POST['email'], FILTER_SANITIZE_STRING );
	$phone_form        = filter_var( $_POST['phone'], FILTER_SANITIZE_STRING );
	$mobile_phone_form = filter_var( $_POST['mobilePhone'], FILTER_SANITIZE_STRING );
	$message_form      = filter_var( $_POST['message'], FILTER_SANITIZE_STRING );

	$email = new Email();

	$template = 'template.html';
	$body     = file_get_contents( __DIR__ . '/' . $template );
	$body     = str_replace( '%site-name%', SITE['name'], $body );
	$body     = str_replace( '%name%', $name_form, $body );
	$body     = str_replace( '%mail%', $mail_form, $body );
	$body     = str_replace( '%phone%', $phone_form, $body );
	$body     = str_replace( '%mobilePhone%', $mobile_phone_form, $body );
	$body     = str_replace( '%message%', $message_form, $body );

	$email->add(
		$subject_form,
		$body,
		SITE['name'],
		MAIL['from_email']
	)->send( $name_form, $mail_form );

	if ( ! $email->error() ) {
		echo json_encode(
			array(
				'message' => 'success',
			)
		);
	} else {
		http_response_code( 500 );

		echo json_encode(
			array(
				'message' => $email->error()->getMessage(),
			)
		);
	}
}

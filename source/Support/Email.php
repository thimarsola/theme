<?php

namespace Source\Support;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use stdClass;

class Email {

	const MAIL_HOST       = MAIL['host'];
	const MAIL_PORT       = MAIL['port'];
	const MAIL_USER       = MAIL['user'];
	const MAIL_PASS       = MAIL['passwd'];
	const MAIL_FROM_NAME  = MAIL['from_name'];
	const MAIL_FROM_EMAIL = MAIL['from_email'];

	/** @var PHPMailer */
	private PHPMailer $mail;

	/** @var stdClass */
	private stdClass $data;

	/** @var Exception */
	private Exception $error;

	public function __construct() {
		$this->mail = new PHPMailer( true );
		$this->data = new stdClass();

		$this->mail->isSMTP();
		$this->mail->isHTML();
		$this->mail->setLanguage( 'br' );

		if ( $_SERVER['HTTP_HOST'] == 'localhost:8000' ) {
			// $this->mail->SMTPDebug = 4;
		}

		$this->mail->SMTPAuth = true;

		if ( ! $_SERVER['HTTP_HOST'] == 'localhost:8000' ) {
			$this->mail->SMTPSecure = 'tls';
			// $this->mail->SMTPSecure = "ssl";
		}

		$this->mail->CharSet = 'utf-8';

		$this->mail->Host     = self::MAIL_HOST;
		$this->mail->Port     = (int) self::MAIL_PORT;
		$this->mail->Username = (string) self::MAIL_USER;
		$this->mail->Password = (string) self::MAIL_PASS;
	}

	public function add( string $subject, string $body, string $recipient_name, string $recipient_email ): Email {
		$this->data->subject         = $subject;
		$this->data->body            = $body;
		$this->data->recipient_name  = $recipient_name;
		$this->data->recipient_email = $recipient_email;

		return $this;
	}

	public function attach( string $filePath, string $fileName ): Email {
		$this->data->attach[ $filePath ] = $fileName;

		return $this;
	}

	public function send( string $from_name = self::MAIL_FROM_NAME, string $from_email = self::MAIL_FROM_EMAIL ): bool {
		try {
			$this->mail->Subject = $this->data->subject;
			$this->mail->msgHTML( $this->data->body );
			$this->mail->addAddress( $this->data->recipient_email, $this->data->recipient_name );
			$this->mail->setFrom( $from_email, $from_name );

			if ( ! empty( $this->data->attach ) ) {
				foreach ( $this->data->attach as $path => $name ) {
					$this->mail->addAttachment( $path, $name );
				}
			}

			$this->mail->send();

			return true;
		} catch ( Exception $exception ) {
			$this->error = $exception;

			return false;
		}
	}

	public function error(): ?Exception {
		return $this->error;
	}
}

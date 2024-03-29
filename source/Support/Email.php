<?php

namespace Source\Support;

use Exception;
use PHPMailer\PHPMailer\PHPMailer;
use stdClass;

class Email {
	/** @var PHPMailer */
	private $mail;

	/** @var stdClass */
	private $data;

	/** @var Exception */
	private $error;

	public function __construct() {
		$this->mail = new PHPMailer( true );
		$this->data = new stdClass();

		$this->mail->isSMTP();
		$this->mail->isHTML();
		$this->mail->setLanguage( 'br' );

		if ( 'localhost:8000' === $_SERVER['HTTP_HOST'] ) {
			//          $this->mail->SMTPDebug = 4;
		}

		$this->mail->SMTPAuth = true;

		if ( 'localhost:8000' !== $_SERVER['HTTP_HOST'] ) {
			$this->mail->SMTPSecure = 'tls';
			//        $this->mail->SMTPSecure = "ssl";
		}

		$this->mail->CharSet = 'utf-8';

		$this->mail->Host     = MAIL['host'];
		$this->mail->Port     = (int) MAIL['port'];
		$this->mail->Username = (string) MAIL['user'];
		$this->mail->Password = (string) MAIL['passwd'];
	}

	public function add( string $subject, string $body, string $recipient_name, string $recipient_email ): Email {
		$this->data->subject         = $subject;
		$this->data->body            = $body;
		$this->data->recipient_name  = $recipient_name;
		$this->data->recipient_email = $recipient_email;

		return $this;
	}

	public function attach( string $file_path, string $file_name ): Email {
		$this->data->attach[ $file_path ] = $file_name;

		return $this;
	}

	public function send( string $from_name = MAIL['from_name'], string $from_email = MAIL['from_email'] ): bool {
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

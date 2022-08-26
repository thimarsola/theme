<?php
require_once(dirname(__DIR__, 2) . '/vendor/autoload.php');

use Source\Support\Email;

if ($_POST) {
    $subjectForm = 'Formulário de Contato Website - ' . SITE['name'];
    $nameForm = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $mailForm = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $phoneForm = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $messageForm = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    $email = new Email();

    $template = 'template.html';
    $body = file_get_contents(__DIR__ . '/' . $template);
    $body = str_replace('%site-name%', SITE['name'], $body);
    $body = str_replace('%name%', $nameForm, $body);
    $body = str_replace('%mail%', $mailForm, $body);
    $body = str_replace('%phone%', $phoneForm, $body);
    $body = str_replace('%message%', $messageForm, $body);

    $email->add(
        $subjectForm,
        $body,
        SITE['name'],
        MAIL['from_email']
    )->send($nameForm, $mailForm);

    if (!$email->error()) {
        echo json_encode([
            "message" => "success",
        ]);
    } else {
        http_response_code(500);

        echo json_encode([
            "message" => $email->error()->getMessage()
        ]);
    }
}

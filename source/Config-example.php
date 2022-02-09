<?php

/**
 * DEVELOPER
 */
define("DEV", [
   "name" => "Goognet Solução Digital",
   "url" => "https://goognet.com.br",
   "domain" => "goognet.com.br"
]);

/**
 * SITE CONFIG
 */
define("SITE", [
   "name" => "name",
   "desc" => "desc",
   "domain" => "domain.com.br",
   "locale" => "pt_BR",
   "lang" => "pt-BR",
   "image" => "image.jpg",
   "gtm" => ''
]);

/**
 * SITE MINIFY
 */
if ($_SERVER["SERVER_NAME"] == "localhost") {
   require __DIR__ . '/Minifier.php';
}

/**
 * SOCIAL CONFIG
 */
define("SOCIAL", [
   "facebook_page" => "",
   "facebook_author" => "",
   "facebook_appId" => "",
   "twitter_creator" => "",
   "twitter_site" => ""
]);

/**
 * MAIL CONNECT
 */
define("MAIL", [
   "host" => "mail.domain.com.br",
   "port" => "587",
   "user" => "sender@domain.com.br",
   "passwd" => "password",
   "from_name" => "Website Name",
   "from_email" => "name@domain.com.br"
]);

/**
 * REGION
 */
define("REGION", [
   "region" => "BR-SP",
   "placename" => "S&atilde;o Caetano do Sul",
   "position" => "-23.632206;-46.582405",
   "icbm" => "-23.632206;-46.582405"
]);

/**
 * CONTACT
 */
define("CONTACT", [
   "whatsapp" => [
      "number" => "(11) 91234-5678",
      "message" => "Olá Pepetos, gostaria de maiores informações",
   ],
   "phone" => [
      "01" => "(11) 1234-5678",
   ],
   "mail" => "mail@domain.com.br",
   "address" => "address",
   "addressLink" => "https://g.page/domain?share",
   "instagram" => "https://www.instagram.com/name/",
   "facebook" => "https://www.facebook.com/name",
   "youtube" => "",
   "linkedin" => ""
]);
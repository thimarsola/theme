<?php

/**
 * Function for create a whatsapp anchor message
 * @param string $phone
 * @param string $message
 * @param string|null $text
 * @param string|null $class
 * @param string $title
 * @return string
 */

function whatsapp(string $phone, string $message, string $text = NULL, string $class = NULL, string $title = 'Vamos conversar?'): string{

    if($class == NULL){
        $dataClass = '';
    }else{
        $dataClass = 'class="' . $class . '"';
    }

    $whatsapp = '<a rel="nofollow noreferrer noopener" ' . $dataClass . ' href="https://api.whatsapp.com/send?phone=55' . $phone . '&text=' . urlencode($message) . '" target="_blank" title="' . $title . '">' . $text . '</a>';

    return $whatsapp;
}
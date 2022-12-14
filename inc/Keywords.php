<?php

function keywords(): string
{
    $keywords = null;

    if (is_home()) {
        $keywords = "";
    } else {
        $keywords = "";
    }

    return $keywords;
}

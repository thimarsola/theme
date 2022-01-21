<?php

/**
 * @param string $phone
 * @return string
 */
function formatPhone(string $phone): string{
    $data = str_replace([' ', '(', ')', '-'], '', $phone);

    return $data;
}
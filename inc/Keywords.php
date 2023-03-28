<?php

/**
 * Function that returns a list of keywords from the post title, excluding common words and adding a custom string.
 *
 * @param string $name Custom string to add to the keywords list.
 *
 * @return string Comma-separated list of keywords.
 */
function get_post_keywords( string $name ): string {
    $exclude  = array(
        'de',
        'para',
        'em',
        'a',
        'o',
        'é',
        'e',
        'um',
        'uma',
        '?',
        'da',
        'pelo',
        'pela',
        'por',
        'no',
        'na',
        'sua',
        'seu',
        'nos',
        'nas',
        'das',
        'com',
        'as',
        'ser',
        'que',
        'o',
        'a',
        '-',
        ':',
        '/',
        '|'
    );
    $keywords = array();
    $words    = explode( " ", get_the_title() );

    foreach ( $words as $word ) {
        if ( ! in_array( $word, $exclude ) ) {
            $keywords[] = str_replace( array( ':', ',', ';', '?', ' ', '|', '/', '\/' ), '', $word );
        }
    }

    $keyword_list = implode( ", ", $keywords );

    return $keyword_list . " , " . $name;
}

/**
 * Function that returns a list of keywords.
 *
 * @return string
 */
function get_keywords(): string {
    if ( is_singular( 'post' ) ) {
        $keywords = esc_attr( get_post_keywords( SITE['name'] ) );
    } else {
        $keywords = "";
    }

    return $keywords;
}

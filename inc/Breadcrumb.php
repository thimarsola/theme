<?php

/**
 * @param string $home_text
 * @param string $separator
 * @param string $class_wrapper
 * @param string $class_item
 * @param string $class_separator
 * @param string $class_link
 * @param string $class_current
 */
function get_breadcrumb(
    $home_text = 'Home',
    $separator = '|',
    $class_wrapper = 'breadcrumb',
    $class_item = 'breadcrumb-item',
    $class_separator = 'separator',
    $class_link = 'breadcrumb-link',
    $class_current = 'breadcrumb-current'
): void {
    $post = get_queried_object();

    echo '<ol class="' . esc_attr($class_wrapper) . '">';

    echo
    '<li class="' . esc_attr($class_item) . '">
            <a class="' . esc_attr($class_link) . '" href="' . esc_url(home_url()) . '">' . esc_html($home_text) . '</a>
        </li>';

    if (is_category() || is_single()) {

        if (is_singular('post')) {
            echo '<li><span class="' . esc_attr($class_separator) . '">' . $separator . '</span></li>';

            $query = new WP_Query(
                array(
                    'post_type' => 'page',
                    'title'     => 'Blog'
                )
            );

            echo
            '<li class="' . esc_attr($class_item) . '">
                    <a class="' . esc_attr($class_link) . '" href="' .
                esc_url(get_the_permalink($query->post)) . '">' . esc_html($query->post->post_title) . '</a>
                </li>';
        } else {
            $categories = get_the_category();

            if ($categories) {

                foreach ($categories as $category) {
                    echo '<li><span class="' . esc_attr($class_separator) . '">' . esc_html($separator) . '</span></li>';
                    echo
                    '<li class="' . esc_attr($class_item) . '">
                            <a class="' . esc_attr($class_link) . '" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>
                        </li>';
                }
            }
        }

        if (is_single()) {
            echo '<li><span class="' . esc_attr($class_separator) . '">' . esc_html($separator) . '</span></li>';
            echo
            '<li class="' . esc_attr($class_item) . '">
                <span class="' . esc_attr($class_current) . '">' . get_the_title() . '</span>
            </li>';
        }
    } elseif (is_page()) {

        $ancestors = get_post_ancestors($post);

        if ($ancestors) {

            $ancestors = array_reverse($ancestors);

            foreach ($ancestors as $ancestor) {
                echo '<li><span class="' . esc_attr($class_separator) . '">' . esc_html($separator) . '</span></li>';
                echo
                '<li class="' . esc_attr($class_item) . '">
                        <a class="' . esc_attr($class_link) . '" href="' . esc_url(get_permalink($ancestor)) . '">' . esc_html(get_the_title($ancestor)) . '</a>
                    </li>';
            }
        }

        echo '<li><span class="' . esc_attr($class_separator) . '">' . esc_html($separator) . '</span></li>';
        echo
        '<li class="' . esc_attr($class_item) . '">
                <span class="' . esc_attr($class_current) . '">' . get_the_title() . '</span>
            </li>';
    } elseif (is_search()) {

        echo '<li class="' . esc_attr($class_item) . '">Resultados para "' . esc_html(get_search_query()) . '"</li>';
    } elseif (is_404()) {
        echo '<li class="' . esc_attr($class_item) . '">Página não encontrada</li>';
    }

    echo '</ol>';
}

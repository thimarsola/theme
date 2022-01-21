<?php

/**
 * Function for create a title
 * @param string $class
 * @param string $description
 * @param string $title
 * @return string
 */
function title(string $class, string $description, string $title):string
{
    return '        
        <header class="' . $class . ' title">
            <p>' . $description . '</p>
            <h2 class="f-7 mb-3">' . $title . '</h2>            
            <div class="title__divider">
                 <span></span>
                 <span></span>
             </div>
        </header>';
}
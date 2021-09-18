<?php

include(get_theme_file_path("/includes/frontend/enqueue.php"));

//Enqueue scripts -  bootstrap, font-awesome, style.css
add_action("wp_enqueue_scripts", "style_enqueue");

//Enqueue scripts - JQuery, script.js
add_action("wp_enqueue_scripts", "js_enqueue");

//Menu suport
add_theme_support("menus");


//Register menus
register_nav_menus(
    array(
        "top-menu" => __("Top Menu", "theme"),

    )
);


?>
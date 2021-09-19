<?php

include(get_theme_file_path("/includes/frontend/enqueue.php"));

//Enqueue scripts -  bootstrap, font-awesome, style.css
add_action("wp_enqueue_scripts", "lea_style_enqueue");

//Enqueue scripts - JQuery, script.js
add_action("wp_enqueue_scripts", "lea_js_enqueue");


//Adding dynamic title (edible in wp dashboard)
function lea_dynamic_title(){
    //Title support
    add_theme_support("title-tag");
}

add_action("after_setup_theme", "lea_dynamic_title");


//Menu support
add_theme_support("menus");


//Register menus
register_nav_menus(
    array(
        "top-menu" => __("Top Menu", "theme"),

    )
);



?>
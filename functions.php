<?php

include(get_theme_file_path("/includes/frontend/enqueue.php"));

//Enqueue scripts -  bootstrap, font-awesome, style.css
add_action("wp_enqueue_scripts", "lea_style_enqueue");

//Enqueue scripts - JQuery, script.js
add_action("wp_enqueue_scripts", "lea_js_enqueue");


//Theme support
function lea_theme_support(){

    //Menu support
    add_theme_support("menus");

    //Thumbnail support
    add_theme_support("post-thumbnail");
}

add_action("after_setup_theme", "lea_theme_support");


//Register menus
register_nav_menus(
    array(
        "top-menu" => __("Top Menu", "theme"),
        "blog-menu" => __("Blog Meny", "theme"),
        "side-menu" => __("Side Menu", "theme")
    )
);


?>


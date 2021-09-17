<?php

include(get_theme_file_path("/includes/frontend/enqueue.php"));

//Enqueue scripts -  bootstrap, font-awesome, style.css
add_action("wp_enqueue_scripts", "style_enqueue");

//Enqueue scripts - JQuery, script.js
add_action("wp_enqueue_scripts", "js_enqueue")


?>
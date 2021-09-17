<?php   

    function style_enqueue(){

        $uri = get_theme_file_uri();

        wp_register_style("bootstrap", $uri . "/css/bootstrap.css");
        wp_register_style("font-awesome", $uri . "/css/font-awesome.css");
        wp_register_style("style", $uri . "/css/style.css");
        
        wp_enqueue_style("bootstrap");
        wp_enqueue_style("font-awesome");
        wp_enqueue_style("style");
    }

    function js_enqueue(){

        $uri = get_theme_file_uri();

        wp_enqueue_script("jquery");
        
        //wp_register_script("name of script", "path", dependency, version, add the script to footer == true) 
        wp_register_script("js_enqueue", $uri . "/js/script.js", "", 1, true);

        wp_enqueue_script("js_enqueue");
    }







?>
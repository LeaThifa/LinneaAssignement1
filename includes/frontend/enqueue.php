<?php   

    function lea_style_enqueue(){

        $uri = get_theme_file_uri();

        wp_register_style("lea_bootstrap", $uri . "/css/bootstrap.css");
        wp_register_style("lea_font-awesome", $uri . "/css/font-awesome.css");
        wp_register_style("lea_style", $uri . "/css/style.css");
        
        wp_enqueue_style("lea_bootstrap");
        wp_enqueue_style("lea_font-awesome");
        wp_enqueue_style("lea_style");
    }

    function lea_js_enqueue(){

        $uri = get_theme_file_uri();

        wp_enqueue_script("jquery");
        
        //wp_register_script("name of script", "path", dependency, version, add the script to footer == true) 
        wp_register_script("lea_js_enqueue", $uri . "/js/script.js", "", 1, true);

        wp_enqueue_script("lea_js_enqueue");
    }







?>
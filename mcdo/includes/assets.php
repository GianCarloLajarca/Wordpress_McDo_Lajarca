<?php 

function careers_assets(){
    wp_enqueue_style('careers-style', get_template_directory_uri() . '/css/main.css', microtime());
}
add_action('wp_enqueue_scripts', 'careers_assets');
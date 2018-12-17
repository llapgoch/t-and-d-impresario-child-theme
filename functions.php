<?php
add_action('login_enqueue_scripts', function(){
    wp_register_style('t_and_d_child', get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_style('t_and_d_child');
});
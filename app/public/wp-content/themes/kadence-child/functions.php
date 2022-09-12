<?php

function charger_bootstrap() {

    wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . 'bootstrap/js/bootstrap.min.js', array( 'jquery' ), null, true );
    
    wp_enqueue_style( 'bootstrap-css', get_stylesheet_directory_uri() . 'bootstrap/css/bootstrap.min.css' );
    
    }
    
    add_action('wp_enqueue_scripts', 'charger_bootstrap');
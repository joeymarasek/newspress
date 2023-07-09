<?php

/**
 * Theme functions
 * 
 * @package NewsPress
 */

 function newspress_enqueue_scripts() {
    
    //Register styles
    wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&family=Special+Elite&display=swap', [], false, 'all' );
    wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css' ), 'all' );

    //Register scripts
    wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', [ 'jquery' ], filemtime( get_template_directory() . '/assets/js/main.js' ), true );

    //Enqueue styles
    wp_enqueue_style( 'google-fonts' );
    wp_enqueue_style( 'style-css' );

    //Enqueue scripts
    wp_enqueue_script( 'main-js' );

 }

 add_action( 'wp_enqueue_scripts', 'newspress_enqueue_scripts' );

 ?>
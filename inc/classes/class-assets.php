<?php

/**
 * Enqueue Theme Asstes
 * 
 * @package NewsPress
 */

 namespace NEWSPRESS_THEME\Inc;

 use NEWSPRESS_THEME\Inc\Traits\Singleton;

 class Assets {
    use Singleton;

    protected function __construct() {
        // Load class
        $this->set_hooks();
    }

    protected function set_hooks() {
        // Actions
        add_action( 'wp_enqueue_scripts', [ $this, 'register_styles'] );
    }

    public function register_styles() {

        // Register styles
        wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&family=Special+Elite&display=swap', [], false, 'all' );
        wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( NEWSPRESS_DIR_PATH . '/style.css' ), 'all' );

        // Enqueue styles
        wp_enqueue_style( 'google-fonts' );
        wp_enqueue_style( 'style-css' );

    }

    public function register_scripts() {

        // Register scripts
        wp_register_script( 'main-js', NEWSPRESS_DIR_URI . '/assets/js/main.js', [ 'jquery' ], filemtime( NEWSPRESS_DIR_PATH . '/assets/js/main.js' ), true );

        // Enqueue scripts
        wp_enqueue_script( 'main-js' );

    }

 }
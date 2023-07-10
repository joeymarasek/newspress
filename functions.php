<?php

/**
 * Theme functions
 * 
 * @package NewsPress
 */

 if( ! defined( 'NEWSPRESS_DIR_PATH' ) ) {
   define( 'NEWSPRESS_DIR_PATH', untrailingslashit( get_template_directory() ) );
 }

 if( ! defined( 'NEWSPRESS_DIR_URI' ) ) {
  define( 'NEWSPRESS_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
 }

 require_once NEWSPRESS_DIR_PATH . '/inc/helpers/autoloader.php';

 function newspress_get_theme_instance() {
   \NEWSPRESS_THEME\Inc\NEWSPRESS_THEME::get_instance();
 }

 newspress_get_theme_instance();

 ?>
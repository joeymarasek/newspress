<?php

/**
 * Load Instances
 * 
 * @package NewsPress
 */

 namespace NEWSPRESS_THEME\Inc;

 use NEWSPRESS_THEME\Inc\Traits\Singleton;

 class NEWSPRESS_THEME {
    use Singleton;

    protected function __construct() {
        // Load class

        Assets::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        // Actions
    }

 }
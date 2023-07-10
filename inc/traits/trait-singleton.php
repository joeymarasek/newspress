<?php
/**
 * Singleton trait which implements Singleton pattern in any class in which this trait is used.
 *
 * @package NewsPress
 */

namespace NEWSPRESS_THEME\Inc\Traits;

trait Singleton {
	public function __construct() {

	}

	final protected function __clone() {

	}

	final public static function get_instance() {
		static $instance = [];
		$called_class = get_called_class();

		if ( !isset( $instance[ $called_class ] ) ) {
			$instance[ $called_class ] = new $called_class();

			do_action( sprintf( 'newspress_theme_singleton_init%s', $called_class ) );
		}

		return $instance[ $called_class ];

	}
}
<?php
/**
 * Singleton trait which implements Singleton pattern in any class in which this trait is used.
 *
 * @package NewsPress
 */

namespace NEWSPRESS_THEME\Inc\Traits;

trait Singleton {

	protected function __construct() {
	}

	final protected function __clone() {
	}

	/**
	 * This method returns new or existing Singleton instance
	 * of the class for which it is called. This method is set
	 * as final intentionally, it is not meant to be overridden.
	 *
	 * @return object Singleton instance of the class.
	 */

	final public static function get_instance() {

		/**
		 * Collection of instance.
		 *
		 * @var array
		 */
        
		static $instance = [];

		$called_class = get_called_class();

		if ( ! isset( $instance[ $called_class ] ) ) {

			$instance[ $called_class ] = new $called_class();

			do_action( sprintf( 'newspress_theme_singleton_init_%s', $called_class ) );

		}

		return $instance[ $called_class ];

	}

}
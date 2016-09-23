<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://lancekey.com
 * @since      1.0.0
 *
 * @package    WP_OOP_Helloworld
 * @subpackage WP_OOP_Helloworld/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    WP_OOP_Helloworld
 * @subpackage WP_OOP_Helloworld/includes
 * @author     Gene Kobilansky <gene@lancekey.com>
 */
class WP_OOP_Helloworld_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-oop-helloworld',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}

}

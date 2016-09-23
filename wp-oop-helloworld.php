<?php

/**
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://lancekey.com
 * @since             1.0.0
 * @package           WP_OOP_Helloworld
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress OOP Hello World
 * Plugin URI:        http://lancekey.com/wp-oop-helloworld-uri/
 * Description:       Uses a short code to place a little phrase somewhere
 * Version:           1.0.0
 * Author:            Lancekey
 * Author URI:        http://lancekey.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-oop-helloworld
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-oop-helloworld.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_oop_helloworld() {

	$plugin = new WP_OOP_Helloworld();
	$plugin->run();

}
run_wp_oop_helloworld();

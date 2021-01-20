<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              awshweta@gmail.com
 * @since             1.0.0
 * @package           Ced_Woo_Extension
 *
 * @wordpress-plugin
 * Plugin Name:       ced-woo-extension
 * Plugin URI:        https://wordpress/wp-content/plugins/ced-woo-extension/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Shweta Awasthi
 * Author URI:        awshweta@gmail.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ced-woo-extension
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'CED_WOO_EXTENSION_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ced-woo-extension-activator.php
 */
function activate_ced_woo_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ced-woo-extension-activator.php';
	Ced_Woo_Extension_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ced-woo-extension-deactivator.php
 */
function deactivate_ced_woo_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ced-woo-extension-deactivator.php';
	Ced_Woo_Extension_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ced_woo_extension' );
register_deactivation_hook( __FILE__, 'deactivate_ced_woo_extension' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ced-woo-extension.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ced_woo_extension() {

	$plugin = new Ced_Woo_Extension();
	$plugin->run();

}
run_ced_woo_extension();

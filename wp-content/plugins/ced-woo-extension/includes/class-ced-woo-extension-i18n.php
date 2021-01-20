<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       awshweta@gmail.com
 * @since      1.0.0
 *
 * @package    Ced_Woo_Extension
 * @subpackage Ced_Woo_Extension/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Ced_Woo_Extension
 * @subpackage Ced_Woo_Extension/includes
 * @author     Shweta Awasthi <shwetaawasthi@cedcoss.com>
 */
class Ced_Woo_Extension_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'ced-woo-extension',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

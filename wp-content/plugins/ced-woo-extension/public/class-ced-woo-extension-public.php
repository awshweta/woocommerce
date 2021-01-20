<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       awshweta@gmail.com
 * @since      1.0.0
 *
 * @package    Ced_Woo_Extension
 * @subpackage Ced_Woo_Extension/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Ced_Woo_Extension
 * @subpackage Ced_Woo_Extension/public
 * @author     Shweta Awasthi <shwetaawasthi@cedcoss.com>
 */
class Ced_Woo_Extension_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ced_Woo_Extension_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ced_Woo_Extension_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/ced-woo-extension-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ced_Woo_Extension_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ced_Woo_Extension_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/ced-woo-extension-public.js', array( 'jquery' ), $this->version, false );

	}	

	/**
	 * Rename email address and phone field of checkout page
	 * ced_override_form_fields
	 *
	 * @param  mixed $fields
	 * @return void
	 */
	public function ced_override_form_fields($fields) {
		$fields['billing_email']['label'] = __('Email', 'woocommerce');
		$fields['billing_phone']['label'] = __('Mobile', 'woocommerce');
		return $fields;
	}
	
	/**
	 * This function is used for add sold Badge
	 * ced_product_stock_flash
	 *
	 * @return void
	 */
	public function ced_product_stock_flash() {
		global $product;
		global $post;
		$getStock =get_post_meta($post->ID ,	
		"_stock" , 1);
		$getStock = (int)$getStock;
		if ($getStock == 0 || !$product->is_in_stock()) {
			echo '<span <span class="onsold">Sold</span>';
		}
	}
	
	/**
	 * This function is used for Overwriting the woocommerce title.php
	 * ced_woocommerce_locate_template
	 *
	 * @param  mixed $template
	 * @return void
	 */
	public function ced_woocommerce_locate_template($template) {
		if('title.php' == basename($template)) {
			$template  = ABSPATH . 'wp-content/plugins/ced-woo-extension/woocommerce/single-product/title.php';
			return $template;
		}
		return $template;
	}

}

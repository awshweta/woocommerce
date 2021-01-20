<?php
/**
 * @package ceylonthemes
 * @subpackage eCommerce Plus
 * @since 1.0.0
 */
global $ecommerce_plus_options;

$wp_customize->add_section( 'ecommerce_plus_styles', array(
	'title'             => esc_html__( 'Global Styles','ecommerce-plus' ),
	'description'       => esc_html__( 'Edit heading, button and global styles.', 'ecommerce-plus' ),
	'panel'             => 'ecommerce_plus_theme_options_panel',
) );


// Post Category
$wp_customize->add_setting( 'ecommerce_plus_options[featured_heading_style]' , array(
	'default'   		=> $ecommerce_plus_options['featured_heading_style'],
	'sanitize_callback' => 'ecommerce_plus_sanitize_select',
	'type'				=> 'option'
));

$wp_customize->add_control('ecommerce_plus_options[featured_heading_style]' , array(
	'label' 	=> __('Featured Title Style','ecommerce-plus' ),
	'section' 	=> 'ecommerce_plus_styles',
	'type'		=> 'select',
	'choices'	=> array (
						'default' => esc_html__('Default', 'ecommerce-plus'),
						'full-underline' => esc_html__('Full Underline', 'ecommerce-plus'),
					),
));




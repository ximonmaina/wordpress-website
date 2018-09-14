<?php
/**
 * Theme Customizer.
 */
//CUSTOM HEADER
function igthemes_custom_header_setup() {
    add_theme_support( 'custom-header', apply_filters( 'igthemes_custom_header_args', array(
	            'default-image' => '',
				'header-text'   => false,
				'width'         => 1142,
				'height'        => 300,
				'flex-width'    => true,
				'flex-height'   => true,
    ) ) );
}
add_action( 'after_setup_theme', 'igthemes_custom_header_setup' );

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function igthemes_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
}
add_action( 'customize_register', 'igthemes_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function igthemes_customize_preview_js() {
	wp_enqueue_script( 'igthemes_customizer', get_template_directory_uri() . '/inc/admin/options/assetts/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'igthemes_customize_preview_js' );

/**
 * Required files
 */
require dirname( __FILE__ ) . '/assetts/customizer-settings.php';
require dirname( __FILE__ ) . '/assetts/customizer-custom-controls.php';
require dirname( __FILE__ ) . '/assetts/customizer-sanitization.php';
require dirname( __FILE__ ) . '/assetts/customizer-dynamic-css.php';

<?php
/**
 * High Responsive back compat functionality
 *
 * Prevents High Responsive from running on WordPress versions prior to 4.4,
 * since this theme is not meant to be backward compatible beyond that and
 * relies on many newer functions and markup changes introduced in 4.4.
 *
 * @package High_Responsive
 */

/**
 * Prevent switching to High Responsive on old versions of WordPress.
 *
 * Switches to the default theme.
 *
 * @since High Responsive 1.0
 */
function highresponsive_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );

	unset( $_GET['activated'] );

	add_action( 'admin_notices', 'highresponsive_upgrade_notice' );
}
add_action( 'after_switch_theme', 'highresponsive_switch_theme' );

/**
 * Adds a message for unsuccessful theme switch.
 *
 * Prints an update nag after an unsuccessful attempt to switch to
 * High Responsive on WordPress versions prior to 4.4.
 *
 * @since High Responsive 1.0
 *
 * @global string $wp_version WordPress version.
 */
function highresponsive_upgrade_notice() {
	$message = sprintf( __( 'High Responsive requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'high-responsive' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );// WPCS: XSS ok.
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 4.4.
 *
 * @since High Responsive 1.0
 *
 * @global string $wp_version WordPress version.
 */
function highresponsive_customize() {
	wp_die( sprintf( __( 'High Responsive requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'high-responsive' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );// WPCS: XSS ok.
}
add_action( 'load-customize.php', 'highresponsive_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 4.4.
 *
 * @since High Responsive 1.0
 *
 * @global string $wp_version WordPress version.
 */
function highresponsive_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'High Responsive requires at least WordPress version 4.4. You are running version %s. Please upgrade and try again.', 'high-responsive' ), $GLOBALS['wp_version'] ) );// WPCS: XSS ok.
	}
}
add_action( 'template_redirect', 'highresponsive_preview' );

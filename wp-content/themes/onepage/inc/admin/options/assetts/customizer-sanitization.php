<?php
/**
 * Customizer: Sanitization Callbacks
 */

/**
 * Sanitization for checkbox input
 *
 * @param $input string (1 or empty) checkbox state
 * @return $output '1' or false
 */
function igthemes_sanitize_checkbox( $input ) {
    // Boolean check
    return ( ( isset( $input ) && true == $input ) ? true : false );
}

// Sanitization for url field
function igthemes_sanitize_url( $input ) {
    return esc_url_raw( $input );
}
add_filter( 'igthemes_sanitize_url', 'igthemes_sanitize_url' );

// Sanitize a color represented in hexidecimal notation.
function igthemes_sanitize_hex_color( $input ) {
    $hex = sanitize_hex_color( $input );
    return  $hex;
}
// Sanitization for text input
function igthemes_sanitize_text( $input ) {
    global $allowedtags;
    return wp_kses(force_balance_tags( $input , $allowedtags ));
}
// Sanitization for textarea field
function igthemes_sanitize_textarea( $input ) {
    global $allowedposttags;
    $output = wp_kses (force_balance_tags($input, $allowedposttags ));
    return $output;
}
// CSS sanitization callback.
function igthemes_sanitize_css( $input  ) {
	return wp_strip_all_tags( $input  );
}
// Sanitization choices
function igthemes_sanitize_choices( $input, $setting ) {
	// Ensure input is a slug.
	$input = sanitize_key( $input );

	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;

	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

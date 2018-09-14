<?php
/**
 * The template used for displaying hero content
 *
 * @package High_Responsive
 */
?>

<?php
$enable_section = get_theme_mod( 'highresponsive_hero_content_visibility', 'disabled' );

if ( ! highresponsive_check_section( $enable_section ) ) {
	// Bail if hero content is not enabled
	return;
}

get_template_part( 'template-parts/hero-content/post-type', 'hero' );

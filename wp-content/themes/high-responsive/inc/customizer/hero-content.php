<?php
/**
 * Hero Content Options
 *
 * @package High_Responsive
 */

/**
 * Add hero content options to theme options
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function highresponsive_hero_content_options( $wp_customize ) {
	$wp_customize->add_section( 'highresponsive_hero_content_options', array(
			'title' => esc_html__( 'Hero Content Options', 'high-responsive' ),
			'panel' => 'highresponsive_theme_options',
		)
	);

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_hero_content_visibility',
			'default'           => 'disabled',
			'sanitize_callback' => 'highresponsive_sanitize_select',
			'choices'           => highresponsive_section_visibility_options(),
			'label'             => esc_html__( 'Enable on', 'high-responsive' ),
			'section'           => 'highresponsive_hero_content_options',
			'type'              => 'select',
		)
	);

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_hero_content',
			'default'           => '0',
			'sanitize_callback' => 'highresponsive_sanitize_post',
			'active_callback'   => 'highresponsive_is_hero_content_active',
			'label'             => esc_html__( 'Page', 'high-responsive' ),
			'section'           => 'highresponsive_hero_content_options',
			'type'              => 'dropdown-pages',
		)
	);

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_disable_hero_content_title',
			'sanitize_callback' => 'highresponsive_sanitize_checkbox',
			'active_callback'   => 'highresponsive_is_hero_content_active',
			'label'             => esc_html__( 'Check to disable title', 'high-responsive' ),
			'section'           => 'highresponsive_hero_content_options',
			'type'              => 'checkbox',
		)
	);
}
add_action( 'customize_register', 'highresponsive_hero_content_options' );

/** Active Callback Functions **/
if ( ! function_exists( 'highresponsive_is_hero_content_active' ) ) :
	/**
	* Return true if hero content is active
	*
	* @since High Responsive 1.0
	*/
	function highresponsive_is_hero_content_active( $control ) {
		global $wp_query;

		$page_id = $wp_query->get_queried_object_id();

		// Front page display in Reading Settings
		$page_for_posts = get_option( 'page_for_posts' );

		$enable = $control->manager->get_setting( 'highresponsive_hero_content_visibility' )->value();

		//return true only if previwed page on customizer matches the type of content option selected
		return ( 'entire-site' == $enable  || ( ( is_front_page() || ( is_home() && $page_for_posts != $page_id ) ) &&	 'homepage' == $enable )
			);
	}
endif;

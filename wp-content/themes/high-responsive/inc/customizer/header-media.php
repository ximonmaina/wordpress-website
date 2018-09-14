<?php
/**
 * Header Media Options
 *
 * @package High_Responsive
 */

/**
 * Add Header Media options
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function highresponsive_header_media_options( $wp_customize ) {
	$wp_customize->get_section( 'header_image' )->description = esc_html__( 'If you add video, it will only show up on Homepage/FrontPage. Other Pages will use Header/Post/Page Image depending on your selection of option. Header Image will be used as a fallback while the video loads ', 'high-responsive' );

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_header_media_option',
			'default'           => 'homepage',
			'sanitize_callback' => 'highresponsive_sanitize_select',
			'choices'           => array(
				'homepage'               => esc_html__( 'Homepage / Frontpage', 'high-responsive' ),
				'exclude-home'           => esc_html__( 'Excluding Homepage', 'high-responsive' ),
				'exclude-home-page-post' => esc_html__( 'Excluding Homepage, Page/Post Featured Image', 'high-responsive' ),
				'entire-site'            => esc_html__( 'Entire Site', 'high-responsive' ),
				'entire-site-page-post'  => esc_html__( 'Entire Site, Page/Post Featured Image', 'high-responsive' ),
				'pages-posts'            => esc_html__( 'Pages and Posts', 'high-responsive' ),
				'disable'                => esc_html__( 'Disabled', 'high-responsive' ),
			),
			'label'             => esc_html__( 'Enable on ', 'high-responsive' ),
			'section'           => 'header_image',
			'type'              => 'select',
			'priority'          => 1,
		)
	);

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_header_media_title',
			'default'           => esc_html__( 'Welcome to High Responsive', 'high-responsive' ),
			'sanitize_callback' => 'wp_kses_post',
			'label'             => esc_html__( 'Header Media Title', 'high-responsive' ),
			'section'           => 'header_image',
			'type'              => 'text',
		)
	);

    highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_header_media_text',
			'default'           => esc_html__( 'Make things as simple as possible but no simpler.', 'high-responsive' ),
			'sanitize_callback' => 'wp_kses_post',
			'label'             => esc_html__( 'Header Media Text', 'high-responsive' ),
			'section'           => 'header_image',
			'type'              => 'textarea',
		)
	);

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_header_media_url',
			'default'           => '#',
			'sanitize_callback' => 'esc_url_raw',
			'label'             => esc_html__( 'Header Media Url', 'high-responsive' ),
			'section'           => 'header_image',
		)
	);

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_header_media_url_text',
			'default'           => esc_html__( 'Continue Reading', 'high-responsive' ),
			'sanitize_callback' => 'sanitize_text_field',
			'label'             => esc_html__( 'Header Media Url Text', 'high-responsive' ),
			'section'           => 'header_image',
		)
	);

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_header_url_target',
			'sanitize_callback' => 'highresponsive_sanitize_checkbox',
			'label'             => esc_html__( 'Check to Open Link in New Window/Tab', 'high-responsive' ),
			'section'           => 'header_image',
			'type'              => 'checkbox',
		)
	);
}
add_action( 'customize_register', 'highresponsive_header_media_options' );

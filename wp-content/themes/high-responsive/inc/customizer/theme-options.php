<?php
/**
 * Theme Options
 *
 * @package High_Responsive
 */

/**
 * Add theme options
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function highresponsive_theme_options( $wp_customize ) {
	$wp_customize->add_panel( 'highresponsive_theme_options', array(
		'title'    => esc_html__( 'Theme Options', 'high-responsive' ),
		'priority' => 130,
	) );

	// Breadcrumb Option.
	$wp_customize->add_section( 'highresponsive_breadcrumb_options', array(
		'description'   => esc_html__( 'Breadcrumbs are a great way of letting your visitors find out where they are on your site with just a glance.', 'high-responsive' ),
		'panel'         => 'highresponsive_theme_options',
		'title'         => esc_html__( 'Breadcrumb', 'high-responsive' ),
	) );

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_breadcrumb_option',
			'default'           => 1,
			'sanitize_callback' => 'highresponsive_sanitize_checkbox',
			'label'             => esc_html__( 'Check to enable Breadcrumb', 'high-responsive' ),
			'section'           => 'highresponsive_breadcrumb_options',
			'type'              => 'checkbox',
		)
	);

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_latest_posts_title',
			'default'           => esc_html__( 'News', 'high-responsive' ),
			'sanitize_callback' => 'wp_kses_post',
			'label'             => esc_html__( 'Latest Posts Title', 'high-responsive' ),
			'section'           => 'highresponsive_theme_options',
		)
	);

	// Layout Options
	$wp_customize->add_section( 'highresponsive_layout_options', array(
		'title' => esc_html__( 'Layout Options', 'high-responsive' ),
		'panel' => 'highresponsive_theme_options',
		)
	);

	/* Layout Type */
	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_layout_type',
			'default'           => 'fluid',
			'sanitize_callback' => 'highresponsive_sanitize_select',
			'label'             => esc_html__( 'Site Layout', 'high-responsive' ),
			'section'           => 'highresponsive_layout_options',
			'type'              => 'radio',
			'choices'           => array(
				'fluid' => esc_html__( 'Fluid', 'high-responsive' ),
				'boxed' => esc_html__( 'Boxed', 'high-responsive' ),
			),
		)
	);

	/* Default Layout */
	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_default_layout',
			'default'           => 'right-sidebar',
			'sanitize_callback' => 'highresponsive_sanitize_select',
			'label'             => esc_html__( 'Default Layout', 'high-responsive' ),
			'section'           => 'highresponsive_layout_options',
			'type'              => 'radio',
			'choices'           => array(
				'right-sidebar'         => esc_html__( 'Right Sidebar ( Content, Primary Sidebar )', 'high-responsive' ),
				'no-sidebar'            => esc_html__( 'No Sidebar', 'high-responsive' ),
			),
		)
	);

	/* Homepage/Archive Layout */
	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_homepage_archive_layout',
			'default'           => 'right-sidebar',
			'sanitize_callback' => 'highresponsive_sanitize_select',
			'label'             => esc_html__( 'Homepage/Archive Layout', 'high-responsive' ),
			'section'           => 'highresponsive_layout_options',
			'type'              => 'radio',
			'choices'           => array(
				'right-sidebar'         => esc_html__( 'Right Sidebar ( Content, Primary Sidebar )', 'high-responsive' ),
				'no-sidebar'            => esc_html__( 'No Sidebar', 'high-responsive' ),
			),
		)
	);

	/* Archive Content Layout */
	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_content_layout',
			'default'           => 'excerpt-image-left',
			'sanitize_callback' => 'highresponsive_sanitize_select',
			'label'             => esc_html__( 'Archive Content Layout', 'high-responsive' ),
			'section'           => 'highresponsive_layout_options',
			'type'              => 'radio',
			'choices'           => array(
				'excerpt-image-left'     => esc_html__( 'Show Excerpt( Image Left)', 'high-responsive' ),
				'full-content'           => esc_html__( 'Show Full Content ( No Featured Image )', 'high-responsive' ),
			),
		)
	);

	/* Single Page/Post Image Layout */
	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_single_layout',
			'default'           => 'disabled',
			'sanitize_callback' => 'highresponsive_sanitize_select',
			'label'             => esc_html__( 'Single Page/Post Image Layout', 'high-responsive' ),
			'section'           => 'highresponsive_layout_options',
			'type'              => 'radio',
			'choices'           => array(
				'disabled'              => esc_html__( 'Disabled', 'high-responsive' ),
				'post-thumbnail'        => esc_html__( 'Enable (Post Thumbnail)', 'high-responsive' ),
			),
		)
	);

	// Excerpt Options.
	$wp_customize->add_section( 'highresponsive_excerpt_options', array(
		'panel'     => 'highresponsive_theme_options',
		'title'     => esc_html__( 'Excerpt Options', 'high-responsive' ),
	) );

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_excerpt_length',
			'default'           => '20',
			'sanitize_callback' => 'absint',
			'description' => esc_html__( 'Excerpt length. Default is 30 words', 'high-responsive' ),
			'input_attrs' => array(
				'min'   => 10,
				'max'   => 200,
				'step'  => 5,
				'style' => 'width: 60px;',
			),
			'label'    => esc_html__( 'Excerpt Length (words)', 'high-responsive' ),
			'section'  => 'highresponsive_excerpt_options',
			'type'     => 'number',
		)
	);

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_excerpt_more_text',
			'default'           => esc_html__( 'Continue reading &gt;', 'high-responsive' ),
			'sanitize_callback' => 'sanitize_text_field',
			'label'             => esc_html__( 'Read More Text', 'high-responsive' ),
			'section'           => 'highresponsive_excerpt_options',
			'type'              => 'text',
		)
	);

	// Excerpt Options.
	$wp_customize->add_section( 'highresponsive_search_options', array(
		'panel'     => 'highresponsive_theme_options',
		'title'     => esc_html__( 'Search Options', 'high-responsive' ),
	) );

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_search_text',
			'default'           => esc_html__( 'Search', 'high-responsive' ),
			'sanitize_callback' => 'sanitize_text_field',
			'label'             => esc_html__( 'Search Text', 'high-responsive' ),
			'section'           => 'highresponsive_search_options',
			'type'              => 'text',
		)
	);

	// Header Top Options
	$wp_customize->add_section( 'highresponsive_header_top', array(
		'panel'       => 'highresponsive_theme_options',
		'title'       => esc_html__( 'Header Top Options', 'high-responsive' ),
	) );

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_enable_date',
			'sanitize_callback' => 'highresponsive_sanitize_checkbox',
			'label'             => esc_html__( 'Enable Date', 'high-responsive' ),
			'section'           => 'highresponsive_header_top',
			'type'              => 'checkbox',
		)
	);

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_email',
			'sanitize_callback' => 'sanitize_email',
			'label'             => esc_html__( 'Email', 'high-responsive' ),
			'section'           => 'highresponsive_header_top',
			'type'              => 'text',
		)
	);

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_phone',
			'sanitize_callback' => 'sanitize_text_field',
			'label'             => esc_html__( 'Phone', 'high-responsive' ),
			'section'           => 'highresponsive_header_top',
			'type'              => 'text',
		)
	);

	// Homepage / Frontpage Options.
	$wp_customize->add_section( 'highresponsive_homepage_options', array(
		'description' => esc_html__( 'Only posts that belong to the categories selected here will be displayed on the front page', 'high-responsive' ),
		'panel'       => 'highresponsive_theme_options',
		'title'       => esc_html__( 'Homepage / Frontpage Options', 'high-responsive' ),
	) );

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_front_page_category',
			'sanitize_callback' => 'highresponsive_sanitize_category_list',
			'custom_control'    => 'Highresponsive_Multi_Categories_Control',
			'label'             => esc_html__( 'Categories', 'high-responsive' ),
			'section'           => 'highresponsive_homepage_options',
			'type'              => 'dropdown-categories',
		)
	);

	// Pagination Options.
	$pagination_type = get_theme_mod( 'highresponsive_pagination_type', 'default' );

	$nav_desc = '';

	/**
	* Check if navigation type is Jetpack Infinite Scroll and if it is enabled
	*/
	$nav_desc = sprintf(
		wp_kses(
			__( 'Infinite Scroll Options requires %1$sJetPack Plugin%2$s with Infinite Scroll module Enabled.', 'high-responsive' ),
			array(
				'a' => array(
					'href' => array(),
					'target' => array(),
				),
				'br'=> array()
			)
		),
		'<a target="_blank" href="https://wordpress.org/plugins/jetpack/">',
		'</a>'
	);

	$nav_desc .= '&nbsp;' . sprintf(
		wp_kses(
			__( 'Once Jetpack is installed, Infinite Scroll Settings can be found %1$shere%2$s', 'high-responsive' ),
			array(
				'a' => array(
					'href' => array(),
					'target' => array(),
				),
				'br'=> array()
			)
		),
		'<a target="_blank" href="' . esc_url( admin_url( 'admin.php?page=jetpack#/settings' ) ) . '">',
		'</a>'
	);

	$wp_customize->add_section( 'highresponsive_pagination_options', array(
		'description' => $nav_desc,
		'panel'       => 'highresponsive_theme_options',
		'title'       => esc_html__( 'Pagination Options', 'high-responsive' ),
	) );

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_pagination_type',
			'default'           => 'default',
			'sanitize_callback' => 'highresponsive_sanitize_select',
			'choices'           => highresponsive_get_pagination_types(),
			'label'             => esc_html__( 'Pagination type', 'high-responsive' ),
			'section'           => 'highresponsive_pagination_options',
			'type'              => 'select',
		)
	);

	/* Scrollup Options */
	$wp_customize->add_section( 'highresponsive_scrollup', array(
		'panel'    => 'highresponsive_theme_options',
		'title'    => esc_html__( 'Scrollup Options', 'high-responsive' ),
	) );

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_disable_scrollup',
			'sanitize_callback' => 'highresponsive_sanitize_checkbox',
			'label'             => esc_html__( 'Disable Scroll Up', 'high-responsive' ),
			'section'           => 'highresponsive_scrollup',
			'type'              => 'checkbox',
		)
	);
}
add_action( 'customize_register', 'highresponsive_theme_options' );

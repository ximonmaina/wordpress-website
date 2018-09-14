<?php
/**
 * Featured Content options
 *
 * @package High_Responsive
 */

/**
 * Add featured content options to theme options
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function highresponsive_featured_content_options( $wp_customize ) {
	// Add note to Jetpack Testimonial Section
    highresponsive_register_option( $wp_customize, array(
            'name'              => 'highresponsive_ect_feat_content_cpt_note',
            'sanitize_callback' => 'sanitize_text_field',
            'custom_control'    => 'Highresponsive_Note_Control',
            'label'             => sprintf( esc_html__( 'For More Featured Content Options for High Responsive Theme, go %1$shere%2$s', 'high-responsive' ),
                '<a href="javascript:wp.customize.section( \'highresponsive_featured_content\' ).focus();">',
                 '</a>'
            ),
           'section'            => 'ect_featured_content',
            'type'              => 'description',
            'priority'          => 1,
        )
    );

    $wp_customize->add_section( 'highresponsive_featured_content', array(
			'title' => esc_html__( 'Featured Content', 'high-responsive' ),
			'panel' => 'highresponsive_theme_options',
		)
	);

	highresponsive_register_option( $wp_customize, array(
            'name'              => 'highresponsive_featured_content_note_1',
            'sanitize_callback' => 'sanitize_text_field',
            'custom_control'    => 'Highresponsive_Note_Control',
            'active_callback'   => 'highresponsive_is_ect_featured_content_inactive',
            'label'             => sprintf( esc_html__( 'For Featured Content, install %1$sEssential Content Types%2$s Plugin with Testimonial Content Type Enabled', 'high-responsive' ),
                '<a target="_blank" href="https://wordpress.org/plugins/essential-content-types/">',
                '</a>'
            ),
            'section'           => 'highresponsive_featured_content',
            'type'              => 'description',
            'priority'          => 1,
        )
    );

	// Add color scheme setting and control.
	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_featured_content_option',
			'default'           => 'disabled',
			'sanitize_callback' => 'highresponsive_sanitize_select',
			'active_callback'   => 'highresponsive_is_ect_featured_content_active',
			'choices'           => highresponsive_section_visibility_options(),
			'label'             => esc_html__( 'Enable on', 'high-responsive' ),
			'section'           => 'highresponsive_featured_content',
			'type'              => 'select',
		)
	);

	highresponsive_register_option( $wp_customize, array(
            'name'              => 'highresponsive_featured_content_cpt_note',
            'sanitize_callback' => 'sanitize_text_field',
            'custom_control'    => 'Highresponsive_Note_Control',
            'active_callback'   => 'highresponsive_is_featured_content_active',
            /* translators: 1: <a>/link tag start, 2: </a>/link tag close. */
			'label'             => sprintf( esc_html__( 'For CPT heading and sub-heading, go %1$shere%2$s', 'high-responsive' ),
                 '<a href="javascript:wp.customize.control( \'featured_content_title\' ).focus();">',
                 '</a>'
            ),
            'section'           => 'highresponsive_featured_content',
            'type'              => 'description',
        )
    );

	highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_featured_content_number',
			'default'           => 3,
			'sanitize_callback' => 'highresponsive_sanitize_number_range',
			'active_callback'   => 'highresponsive_is_featured_content_active',
			'description'       => esc_html__( 'Save and refresh the page if No. of Featured Content is changed (Max no of Featured Content is 20)', 'high-responsive' ),
			'input_attrs'       => array(
				'style' => 'width: 100px;',
				'min'   => 0,
			),
			'label'             => esc_html__( 'No of Featured Content', 'high-responsive' ),
			'section'           => 'highresponsive_featured_content',
			'type'              => 'number',
			'transport'         => 'postMessage',
		)
	);

	$number = get_theme_mod( 'highresponsive_featured_content_number', 3 );

	//loop for featured post content
	for ( $i = 1; $i <= $number ; $i++ ) {
		highresponsive_register_option( $wp_customize, array(
				'name'              => 'highresponsive_featured_content_cpt_' . $i,
				'sanitize_callback' => 'highresponsive_sanitize_post',
				'active_callback'   => 'highresponsive_is_featured_content_active',
				'label'             => esc_html__( 'Featured Content', 'high-responsive' ) . ' ' . $i ,
				'section'           => 'highresponsive_featured_content',
				'type'              => 'select',
                'choices'           => highresponsive_generate_post_array( 'featured-content' ),
			)
		);
	} // End for().
}
add_action( 'customize_register', 'highresponsive_featured_content_options' );

/** Active Callback Functions **/
if( ! function_exists( 'highresponsive_is_featured_content_active' ) ) :
	/**
	* Return true if featured content is active
	*
	* @since High Responsive 1.0
	*/
	function highresponsive_is_featured_content_active( $control ) {
		$enable = $control->manager->get_setting( 'highresponsive_featured_content_option' )->value();

		//return true only if previwed page on customizer matches the type of content option selected
		return ( highresponsive_check_section( $enable ) && ( class_exists( 'Essential_Content_Featured_Content' ) || class_exists( 'Essential_Content_Pro_Featured_Content' ) ) );
	}
endif;

if ( ! function_exists( 'highresponsive_is_ect_featured_content_active' ) ) :
    /**
    * Return true if featured_content is active
    *
    * @since High Responsive 1.0
    */
    function highresponsive_is_ect_featured_content_active( $control ) {
        return ( class_exists( 'Essential_Content_Featured_Content' ) || class_exists( 'Essential_Content_Pro_Featured_Content' ) );
    }
endif;

if ( ! function_exists( 'highresponsive_is_ect_featured_content_inactive' ) ) :
    /**
    * Return true if featured_content is active
    *
    * @since High Responsive 1.0
    */
    function highresponsive_is_ect_featured_content_inactive( $control ) {
        return ! ( class_exists( 'Essential_Content_Featured_Content' ) || class_exists( 'Essential_Content_Pro_Featured_Content' ) );
    }
endif;

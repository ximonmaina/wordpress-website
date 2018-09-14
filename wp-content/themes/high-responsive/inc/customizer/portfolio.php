<?php
/**
 * Add Portfolio Settings in Customizer
 *
 * @package High_Responsive
 */

/**
 * Add portfolio options to theme options
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function highresponsive_portfolio_options( $wp_customize ) {
    // Add note to Jetpack Portfolio Section
    highresponsive_register_option( $wp_customize, array(
            'name'              => 'highresponsive_jetpack_portfolio_cpt_note',
            'sanitize_callback' => 'sanitize_text_field',
            'custom_control'    => 'Highresponsive_Note_Control',
            'label'             => sprintf( esc_html__( 'For Portfolio Options for High Responsive Theme, go %1$shere%2$s', 'high-responsive' ),
                 '<a href="javascript:wp.customize.section( \'highresponsive_portfolio\' ).focus();">',
                 '</a>'
            ),
            'section'           => 'jetpack_portfolio',
            'type'              => 'description',
            'priority'          => 1,
        )
    );

    $wp_customize->add_section( 'highresponsive_portfolio', array(
            'panel'    => 'highresponsive_theme_options',
            'title'    => esc_html__( 'Portfolio', 'high-responsive' ),
        )
    );

    highresponsive_register_option( $wp_customize, array(
            'name'              => 'highresponsive_portfolio_note_1',
            'sanitize_callback' => 'sanitize_text_field',
            'custom_control'    => 'Highresponsive_Note_Control',
            'active_callback'   => 'highresponsive_is_ect_portfolio_inactive',
            'label'             => sprintf( esc_html__( 'For Portfolio, install %1$sEssential Content Types%2$s Plugin with Portfolio Content Type Enabled', 'high-responsive' ),
                '<a target="_blank" href="https://wordpress.org/plugins/essential-content-types/">',
                '</a>'
            ),
            'section'           => 'highresponsive_portfolio',
            'type'              => 'description',
            'priority'          => 1,
        )
    );

    highresponsive_register_option( $wp_customize, array(
			'name'              => 'highresponsive_portfolio_option',
			'default'           => 'disabled',
			'sanitize_callback' => 'highresponsive_sanitize_select',
            'active_callback'   => 'highresponsive_is_ect_portfolio_active',
			'choices'           => highresponsive_section_visibility_options(),
			'label'             => esc_html__( 'Enable on', 'high-responsive' ),
			'section'           => 'highresponsive_portfolio',
			'type'              => 'select',
		)
	);

    highresponsive_register_option( $wp_customize, array(
            'name'              => 'highresponsive_portfolio_cpt_note',
            'sanitize_callback' => 'sanitize_text_field',
            'custom_control'    => 'Highresponsive_Note_Control',
            'active_callback'   => 'highresponsive_is_portfolio_active',
            /* translators: 1: <a>/link tag start, 2: </a>/link tag close. */
			'label'             => sprintf( esc_html__( 'For CPT heading and sub-heading, go %1$shere%2$s', 'high-responsive' ),
                 '<a href="javascript:wp.customize.control( \'jetpack_portfolio_title\' ).focus();">',
                 '</a>'
            ),
            'section'           => 'highresponsive_portfolio',
            'type'              => 'description',
        )
    );

    highresponsive_register_option( $wp_customize, array(
            'name'              => 'highresponsive_portfolio_number',
            'default'           => '3',
            'sanitize_callback' => 'highresponsive_sanitize_number_range',
            'active_callback'   => 'highresponsive_is_portfolio_active',
            'label'             => esc_html__( 'Number of items to show', 'high-responsive' ),
            'section'           => 'highresponsive_portfolio',
            'type'              => 'number',
            'input_attrs'       => array(
                'style'             => 'width: 100px;',
                'min'               => 0,
            ),
        )
    );

    $number = get_theme_mod( 'highresponsive_portfolio_number', 3 );

    for ( $i = 1; $i <= $number ; $i++ ) {
        highresponsive_register_option( $wp_customize, array(
                'name'              => 'highresponsive_portfolio_cpt_' . $i,
                'sanitize_callback' => 'highresponsive_sanitize_post',
                'active_callback'   => 'highresponsive_is_portfolio_active',
                'label'             => esc_html__( 'Portfolio', 'high-responsive' ) . ' ' . $i ,
                'section'           => 'highresponsive_portfolio',
                'type'              => 'select',
                'choices'           => highresponsive_generate_post_array( 'jetpack-portfolio' ),
            )
        );
    } // End for().
}
add_action( 'customize_register', 'highresponsive_portfolio_options' );

/**
 * Active Callback Functions
 */
if ( ! function_exists( 'highresponsive_is_portfolio_active' ) ) :
    /**
    * Return true if portfolio is active
    *
    * @since High Responsive 1.0
    */
    function highresponsive_is_portfolio_active( $control ) {
        $enable = $control->manager->get_setting( 'highresponsive_portfolio_option' )->value();

        //return true only if previwed page on customizer matches the type of content option selected
        return ( highresponsive_check_section( $enable ) && ( class_exists( 'Essential_Content_Jetpack_Portfolio' ) || class_exists( 'JetPack' ) || class_exists( 'Essential_Content_Pro_Jetpack_Portfolio' ) ) );
    }
endif;

/**
 * Active Callback Functions
 */
if ( ! function_exists( 'highresponsive_is_ect_portfolio_active' ) ) :
    /**
    * Return true if portfolio is active
    *
    * @since High Responsive 1.0
    */
    function highresponsive_is_ect_portfolio_active( $control ) {
        return ( class_exists( 'Essential_Content_Jetpack_Portfolio' ) || class_exists( 'JetPack' ) || class_exists( 'Essential_Content_Pro_Jetpack_Portfolio' ) );
    }
endif;

if ( ! function_exists( 'highresponsive_is_ect_portfolio_inactive' ) ) :
    /**
    * Return true if portfolio is active
    *
    * @since High Responsive 1.0
    */
    function highresponsive_is_ect_portfolio_inactive( $control ) {
        return ! ( class_exists( 'Essential_Content_Jetpack_Portfolio' ) || class_exists( 'JetPack' ) || class_exists( 'Essential_Content_Pro_Jetpack_Portfolio' ) );
    }
endif;

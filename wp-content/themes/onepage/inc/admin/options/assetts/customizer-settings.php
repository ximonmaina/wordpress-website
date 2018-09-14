<?php
//start class
class IGthemes_Customizer {
	//start
    public function __construct() {
			add_action( 'customize_register',              array( $this, 'customize_register' ), 10 );
			add_action( 'customize_controls_print_styles', array( $this, 'customizer_custom_control_css' ), 30 );
    }
    /*+++++++++++++++++++++++++++++++++++++++++++++
    CUSTOMIZER SETTINGS AND OPTIONS
    +++++++++++++++++++++++++++++++++++++++++++++*/
    public function customize_register($wp_customize) {
        //DEFAULTS
        include dirname( __FILE__ ) . '/customizer-defaults.php';
        //PANEL
        $wp_customize->add_panel( 'igtheme_options', array(
          'title' => __( 'Theme Settings', 'onepage'),
          'description' => '', 
          'priority' => 10, 
        ) );
        // HOME
        $wp_customize->add_section('home-settings', array(
            'title' => __('Home', 'onepage'),
            'panel' => 'igtheme_options',
            'priority' => 5, 
         ));
        // Blog
        $wp_customize->add_section('blog-settings', array(
            'title' => __('Blog', 'onepage'),
            'panel' => 'igtheme_options',
            'priority' => 10, 
         ));
        // Post
        $wp_customize->add_section('post-settings', array(
            'title' => __('Post', 'onepage'),
            'panel' => 'igtheme_options',
            'priority' => 20, 
         ));
        // HEADER
        $wp_customize->add_section( 'header-settings' , array(
          'title' => __( 'Header', 'onepage'),
          'panel' => 'igtheme_options',
          'priority' => 30, 
        ) );
        // TYPOGRAPHY
        $wp_customize->add_section('typography-settings', array(
            'title' => __('Typography', 'onepage'),
            'panel' => 'igtheme_options',
            'priority' => 40, 
        ));
        // BUTTONS
        $wp_customize->add_section('buttons-settings', array(
            'title' => __('Buttons', 'onepage'),
            'panel' => 'igtheme_options',
            'priority' => 50, 
         ));
        // FOOTER
        $wp_customize->add_section('footer-settings', array(
            'title' => __('Footer', 'onepage'),
            'panel' => 'igtheme_options',
            'priority' => 60, 
        ));
        // SOCIAL
        $wp_customize->add_section('social-settings', array(
            'title' => __('Social', 'onepage'),
            'panel' => 'igtheme_options',
            'priority' => 60, 
        ));
        // SHOP
        $wp_customize->add_section('shop-settings', array(
            'title' => esc_html__('Shop', 'onepage'),
            'panel' => 'igtheme_options',
            'priority' => 70,
        ));
        // ADVANCED
        $wp_customize->add_section('advanced-settings', array(
            'title' => esc_html__('Advanced', 'onepage'),
            'panel' => 'igtheme_options',
            'priority' => 80,
        ));
        /*****************************************************************
        * PREMIUM
        ******************************************************************/
            if ( apply_filters( 'igthemes_customizer_more', true ) ) {

                $wp_customize->add_section( 'upgrade_premium' , array(
                    'title'      		=> __( 'More Options', 'onepage' ),
                    'panel'             => 'igtheme_options',
                    'priority'   		=> 1,
                ) );

                $wp_customize->add_setting( 'upgrade_premium', array(
                    'default'    		=> null,
                    'sanitize_callback' => 'igthemes_sanitize_text',
                ) );

                $wp_customize->add_control( new IGthemes_More_Control( $wp_customize, 'upgrade_premium', array(
                    'label'    			=> __( 'Looking for more options?', 'onepage' ),
                    'section'  			=> 'upgrade_premium',
                    'settings' 			=> 'upgrade_premium',
                    'priority' 			=> 1,
                ) ) );

          }
        //THEME IPTIONS
/*****************************************************************
* HOME SETTINGS
******************************************************************/
//home_heading
    $wp_customize->add_setting( 'home_heading', array(
        'sanitize_callback' => 'igthemes_sanitize_textarea',
    ));

    $wp_customize->add_control( new IGthemes_Heading( $wp_customize, 'home_heading', array(
         'section' => 'home-settings',
         'label' => __( 'Posts', 'onepage' ),
         'description' => __( '', 'onepage' ),
         'active_callback' => 'is_home',
    ) ) );
//home_posts_per_page
    $wp_customize->add_setting( 'home_posts_per_page', array(
        'default' => '12',
        'sanitize_callback' => 'igthemes_sanitize_text',
    ));
    $wp_customize->add_control('home_posts_per_page', array(
        'label' => __('', 'onepage'),
        'description' => __('Change the number of posts showed in the home page.', 'onepage'),
        'type' => 'number',
        'section' => 'home-settings',
        'settings' => 'home_posts_per_page',
        'input_attrs' => array(
            'style' => 'width: 65px;',
        ),
         'active_callback' => 'is_home',
    ));
//home_portfolio_heading
    $wp_customize->add_setting( 'home_portfolio_heading', array(
        'sanitize_callback' => 'igthemes_sanitize_textarea',
    ));
    $wp_customize->add_control( new IGthemes_Heading( $wp_customize, 'home_portfolio_heading', array(
         'section' => 'home-settings',
         'label' => __( 'Portfolio section', 'onepage' ),
         'description' => __( 'To use this section you must download and install our free <a href="https://wordpress.org/plugins/ig-portfolio/" target="_blank">IG Portfolio</a> plugin.', 'onepage' ),
         'active_callback' => 'is_home',
    ) ) );
//home_portfolio
    $wp_customize->add_setting('home_portfolio', array(
        'sanitize_callback' => 'igthemes_sanitize_checkbox',
        'default' => 0,
    ));
    $wp_customize->add_control('home_portfolio', array(
        'label' => __('Enable portfolio section?', 'onepage'),
        'description' => __('', 'onepage'),
        'type' => 'checkbox',
        'section' => 'home-settings',
        'settings' => 'home_portfolio',
        'active_callback' => 'is_home',
    ));
//home_portfolio_title
    $wp_customize->add_setting('home_portfolio_title', array(
        'default' => __('Our new projects', 'onepage'),
        'sanitize_callback' => 'igthemes_sanitize_textarea',
    ));
    $wp_customize->add_control('home_portfolio_title', array(
        'label' => __('', 'onepage'),
        'description' => __('Section title', 'onepage'),
        'type' => 'text',
        'section' => 'home-settings',
        'settings' => 'home_portfolio_title',
        'active_callback' => 'is_home',
    ));
//home_portfolio_description
    $wp_customize->add_setting('home_portfolio_description', array(
        'sanitize_callback' => 'igthemes_sanitize_text',
        'default' => __('See our latest works!', 'onepage'),
         'active_callback' => 'is_home',
    ));
    $wp_customize->add_control('home_portfolio_description', array(
        'label' => __('', 'onepage'),
        'description' => __('Section description', 'onepage'),
        'type' => 'textarea',
        'section' => 'home-settings',
        'settings' => 'home_portfolio_description',
        'active_callback' => 'is_home',
    ));
//home_portfolio_tax
    $wp_customize->add_setting( 'home_portfolio_tax', array(
        'default' => '',
        'sanitize_callback' => 'igthemes_sanitize_text',
    ));
    $wp_customize->add_control('home_portfolio_tax', array(
        'label' => __('', 'onepage'),
        'description' => __('Write the slug of the category you want to show', 'onepage'),
        'type' => 'text',
        'section' => 'home-settings',
        'settings' => 'home_portfolio_tax',
        'active_callback' => 'is_home',
    ));
//home_testimonials_heading
    $wp_customize->add_setting( 'home_testimonials_heading', array(
        'sanitize_callback' => 'igthemes_sanitize_textarea',
    ));

    $wp_customize->add_control( new IGthemes_Heading( $wp_customize, 'home_testimonials_heading', array(
         'section' => 'home-settings',
         'label' => __( 'Testimonials section', 'onepage' ),
         'description' => __( 'To use this section you must download and install our free <a href="https://wordpress.org/plugins/ig-testimonals/" target="_blank">IG Testimonials</a> plugin.', 'onepage' ),
         'active_callback' => 'is_home',
    ) ) );
//home_testimonials
    $wp_customize->add_setting('home_testimonials', array(
        'sanitize_callback' => 'igthemes_sanitize_checkbox',
        'default' => 0,
    ));
    $wp_customize->add_control('home_testimonials', array(
        'label' => __('Enable testimonials section?', 'onepage'),
        'description' => __('', 'onepage'),
        'type' => 'checkbox',
        'section' => 'home-settings',
        'settings' => 'home_testimonials',
        'active_callback' => 'is_home',
    ));
//home_testimonials_title
    $wp_customize->add_setting('home_testimonials_title', array(
        'default' => __('What our clients says', 'onepage'),
         'sanitize_callback' => 'igthemes_sanitize_textarea',
    ));
    $wp_customize->add_control('home_testimonials_title', array(
        'label' => esc_html__('', 'onepage'),
        'description' => __('Section title', 'onepage'),
        'type' => 'text',
        'section' => 'home-settings',
        'settings' => 'home_testimonials_title',
        'active_callback' => 'is_home',
    ));
//home_testimonials_description
    $wp_customize->add_setting('home_testimonials_description', array(
        'sanitize_callback' => 'igthemes_sanitize_text',
        'default' => __('We make every thing with best quality, our customers and partners are very happy!', 'onepage'),
    ));
    $wp_customize->add_control('home_testimonials_description', array(
        'label' => __('', 'onepage'),
        'description' => __('Section description', 'onepage'),
        'type' => 'textarea',
        'section' => 'home-settings',
        'settings' => 'home_testimonials_description',
        'active_callback' => 'is_home',
    ));
//home_testimonials_tax
    $wp_customize->add_setting( 'home_testimonials_tax', array(
        'default' => '',
        'sanitize_callback' => 'igthemes_sanitize_text',
    ));
    $wp_customize->add_control('home_testimonials_tax', array(
        'label' => __('', 'onepage'),
        'description' => __('Write the slug of the category you want to show', 'onepage'),
        'type' => 'text',
        'section' => 'home-settings',
        'settings' => 'home_testimonials_tax',
        'active_callback' => 'is_home',
    ));
/*****************************************************************
* LAYOUT SETTINGS
******************************************************************/
//Images
    $wp_customize->add_setting('blog-layout', array(
        'default'    		=> null,
        'sanitize_callback' => null,
    ));
    $wp_customize->add_control( new IGthemes_Heading( $wp_customize, 'blog-layout', array(
        'label' => esc_html__('Blog layout', 'onepage'),
        'description' => esc_html__('', 'onepage'),
        'section' => 'blog-settings',
        'settings' => 'blog-layout',
        'priority'   => 1,
    ) ) );
//main layout
    $wp_customize->add_setting(
        'main_sidebar',
        array(
            'sanitize_callback' => 'igthemes_sanitize_choices',
            'default' => 'right',
    ));
    $wp_customize->add_control(
            new IGthemes_Radio_Image_Control(
            // $wp_customize object
            $wp_customize,
            // $id
            'main_sidebar',
            // $args
            array(
                'label'			=> __( '', 'onepage' ),
                'description'	=> __( 'Select the blog layout', 'onepage' ),
                'priority' =>   2, 
                'type'          => 'radio-image',
                'section'		=> 'blog-settings',
                'settings'      => 'main_sidebar',
                'choices'		=> array(
                    'left' 	    => get_template_directory_uri() . '/inc/admin/options/assetts/images/left.png',
                    'right' 	=> get_template_directory_uri() . '/inc/admin/options/assetts/images/right.png'
                )
            )
    ));
//main post content
    $wp_customize->add_setting('main_post_content', array(
        'sanitize_callback' => 'igthemes_sanitize_checkbox',
        'default' => 0,
    ));
    $wp_customize->add_control('main_post_content', array(
        'label' => esc_html__('Display full posts content', 'onepage'),
        'description' => esc_html__('', 'onepage'),
        'type' => 'checkbox',
        'section' => 'blog-settings',
        'settings' => 'main_post_content',
        'priority'   => 3
    ));
//Images
    $wp_customize->add_setting('images', array(
        'default'    		=> null,
        'sanitize_callback' => null,
    ));
    $wp_customize->add_control( new IGthemes_Heading( $wp_customize, 'images', array(
        'label' => esc_html__('Images', 'onepage'),
        'description' => esc_html__('', 'onepage'),
        'section' => 'blog-settings',
        'settings' => 'images',
        'priority'   => 5,
    ) ) );
//main featured images
    $wp_customize->add_setting('main_featured_images', array(
        'sanitize_callback' => 'igthemes_sanitize_checkbox',
        'default' => 1,
    ));
    $wp_customize->add_control('main_featured_images', array(
        'label' => esc_html__('Display posts featured images', 'onepage'),
        'description' => esc_html__('', 'onepage'),
        'type' => 'checkbox',
        'section' => 'blog-settings',
        'settings' => 'main_featured_images',
        'priority'   => 6,
    ));
//Navigation
    $wp_customize->add_setting('navigation', array(
        'default'    		=> null,
        'sanitize_callback' => null,
    ));
    $wp_customize->add_control( new IGthemes_Heading( $wp_customize, 'navigation', array(
        'label' => esc_html__('Navigation', 'onepage'),
        'description' => esc_html__('', 'onepage'),
        'section' => 'blog-settings',
        'settings' => 'navigation',
    ) ) );
//numeric_pagination
    $wp_customize->add_setting(
        'numeric_pagination',
        array(
            'sanitize_callback' => 'igthemes_sanitize_checkbox',
    ));
    $wp_customize->add_control(
        'numeric_pagination',
        array(
            'label'         => esc_html__('Use numeric pagination?', 'onepage'),
            'description'   => __( 'WP-PageNavi supported', 'onepage'),
            'type'          => 'checkbox',
            'section'       => 'blog-settings',
            'settings'      => 'numeric_pagination',
    ));
/*****************************************************************
* POST SETTINGS
******************************************************************/
    //Navigation
    $wp_customize->add_setting('post_navigation', array(
        'default'    		=> null,
        'sanitize_callback' => null,
    ));
    $wp_customize->add_control( new IGthemes_Heading( $wp_customize, 'post_navigation', array(
        'label' => esc_html__('Navigation', 'onepage'),
        'description' => esc_html__('', 'onepage'),
        'section' => 'post-settings',
        'settings' => 'post_navigation',
    ) ) );
    //breadcrumb
    $wp_customize->add_setting(
        'post_breadcrumb',
        array(
            'sanitize_callback' => 'igthemes_sanitize_checkbox',
    ));
    $wp_customize->add_control(
        'breadcrumb',
        array(
            'label'         => esc_html__('Display breadcrumb?', 'onepage'),
            'description'   => __( 'Yoast Breadcrumb supported<br>NavXT Breadcrumb supported', 'onepage'),
            'type'          => 'checkbox',
            'section'       => 'post-settings',
            'settings'      => 'post_breadcrumb',
    ));
    //post_nav
    $wp_customize->add_setting(
        'post_nav',
        array(
            'default' => true,
            'sanitize_callback' => 'igthemes_sanitize_checkbox',
    ));
    $wp_customize->add_control( 'post_nav',
        array(
            'label'         => esc_html__('Show previous/next post links?', 'onepage'),
            'description'   => __( '', 'onepage'),
            'type'          => 'checkbox',
            'section'       => 'post-settings',
            'settings'      => 'post_nav',
    )); 
/*****************************************************************
* HEADER SETTINGS
******************************************************************/
//header colors
    $wp_customize->add_setting('header_colors', array(
        'default'    		=> null,
        'sanitize_callback' => null,
    ));
    $wp_customize->add_control( new IGthemes_Heading( $wp_customize, 'header_colors', array(
        'label' => esc_html__('Colors', 'onepage'),
        'description' => esc_html__('', 'onepage'),
        'section' => 'header-settings',
        'settings' => 'navigation',
    ) ) );
//header color
    $wp_customize->add_setting(
        'header_background_color',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $header_background_color,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'header_background_color',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Background color', 'onepage'),
                'type' => 'color',
                'section' => 'header-settings',
                'settings' => 'header_background_color',
            )
    ));
//header text color
    $wp_customize->add_setting(
        'header_text_color',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $header_text_color,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'header_text_color',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Text color', 'onepage'),
                'type' => 'color',
                'section' => 'header-settings',
                'settings' => 'header_text_color',
            )
    ));
//header link normal
    $wp_customize->add_setting(
        'header_link_normal',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $header_link_normal,
        //'transport' => 'postMessage'
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'header_link_normal',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Link color', 'onepage'),
                'type' => 'color',
                'section' => 'header-settings',
                'settings' => 'header_link_normal',
            )
    ));
//header link hover
    $wp_customize->add_setting(
        'header_link_hover',
        array(
        
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $header_link_hover,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'header_link_hover',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Link hover color', 'onepage'),
                'type' => 'color',
                'section' => 'header-settings',
                'settings' => 'header_link_hover',
            )
    ));
/*****************************************************************
* TYPOGRAPHY SETTINGS
******************************************************************/
    //Fonts Colors
    $wp_customize->add_setting('font-colors', array(
        'default'    		=> null,
        'sanitize_callback' => null,
    ));
    $wp_customize->add_control( new IGthemes_Heading( $wp_customize, 'font-colors', array(
        'label' => esc_html__('Colors', 'onepage'),
        'description' => esc_html__('', 'onepage'),
        'section' => 'typography-settings',
        'settings' => 'font-colors',
        'priority' => 1
    ) ) );  
    //body text color
    $wp_customize->add_setting(
        'body_text_color',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $body_text_color,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'body_text_color',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Body text color', 'onepage'),
                'priority' => 1,
                'type' => 'color',
                'section' => 'typography-settings',
                'settings' => 'body_text_color',
            )
    ));
    //body headings color
    $wp_customize->add_setting(
        'body_headings_color',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $body_headings_color,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'body_headings_color',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Headings color', 'onepage'),
                'priority' => 2,
                'type' => 'color',
                'section' => 'typography-settings',
                'settings' => 'body_headings_color',
            )
    ));
    //body link normal
    $wp_customize->add_setting(
        'body_link_normal',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $body_link_normal,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'body_link_normal',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Link color', 'onepage'),
                'priority' => 3,
                'type' => 'color',
                'section' => 'typography-settings',
                'settings' => 'body_link_normal',
            )
    ));
    //body link hover
    $wp_customize->add_setting(
        'body_link_hover',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $body_link_hover,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'body_link_hover',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Link hover color', 'onepage'),
                'priority' => 4,
                'type' => 'color',
                'section' => 'typography-settings',
                'settings' => 'body_link_hover',
            )
    ));
/*****************************************************************
* BUTTONS SETTINGS
******************************************************************/
    //Main buttons
    $wp_customize->add_setting('button', array(
        'default'    		=> null,
        'sanitize_callback' => null,
    ));
    $wp_customize->add_control( new IGthemes_Heading( $wp_customize, 'button', array(
        'label' => esc_html__('Colors', 'onepage'),
        'description' => esc_html__('', 'onepage'),
        'section' => 'buttons-settings',
        'settings' => 'button',
        'priority' => 1
    ) ) ); 
    //button background color
    $wp_customize->add_setting(
        'button_background_normal',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $button_background_normal,
        //'transport' => 'postMessage'
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'button_background_normal',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Background color', 'onepage'),
                'priority' => 1,
                'type' => 'color',
                'section' => 'buttons-settings',
                'settings' => 'button_background_normal',
            )
    ));
    //button background hover
    $wp_customize->add_setting(
        'button_background_hover',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $button_background_hover,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'button_background_hover',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Background hover', 'onepage'),
                'priority' => 2,
                'type' => 'color',
                'section' => 'buttons-settings',
                'settings' => 'button_background_hover',
            )
    ));
    //button text color
    $wp_customize->add_setting(
        'button_text_normal',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $button_text_normal,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'button_text_normal',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Text normal', 'onepage'),
                'priority' => 3,
                'type' => 'color',
                'section' => 'buttons-settings',
                'settings' => 'button_text_normal',
            )
    ));
    //button text hover
    $wp_customize->add_setting(
        'button_text_hover',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $button_text_hover,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'button_text_hover',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Text hover', 'onepage'),
                'priority' => 4,
                'type' => 'color',
                'section' => 'buttons-settings',
                'settings' => 'button_text_hover',
            )
    ));
/*****************************************************************
* FOOTER SETTINGS
******************************************************************/
    //Footer Colors
    $wp_customize->add_setting('footer-colors', array(
        'default'    		=> null,
        'sanitize_callback' => null,
    ));
    $wp_customize->add_control( new IGthemes_Heading( $wp_customize, 'footer-colors', array(
        'label' => esc_html__('Colors', 'onepage'),
        'description' => esc_html__('', 'onepage'),
        'section' => 'footer-settings',
        'settings' => 'button',
        'priority' => 1
    ) ) );
    //footer background color
    $wp_customize->add_setting(
        'footer_background_color',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $footer_background_color,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'footer_background_color',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Background color', 'onepage'),
                'priority' => 1,
                'type' => 'color',
                'section' => 'footer-settings',
                'settings' => 'footer_background_color',
            )
    ));
    //footer text color
    $wp_customize->add_setting(
        'footer_text_color',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $footer_text_color,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'footer_text_color',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Text color', 'onepage'),
                'priority' => 2,
                'type' => 'color',
                'section' => 'footer-settings',
                'settings' => 'footer_text_color',
            )
    ));
    //footer headings color
    $wp_customize->add_setting(
        'footer_headings_color',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $footer_headings_color,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'footer_headings_color',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Hedings color', 'onepage'),
                'priority' => 3,
                'type' => 'color',
                'section' => 'footer-settings',
                'settings' => 'footer_headings_color',
            )
    ));
    //footer link normal
    $wp_customize->add_setting(
        'footer_link_normal',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $footer_link_normal,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'footer_link_normal',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Link color', 'onepage'),
                'priority' => 4,
                'type' => 'color',
                'section' => 'footer-settings',
                'settings' => 'footer_link_normal',
            )
    ));
    //footer link hover
    $wp_customize->add_setting(
        'footer_link_hover',
        array(
        'sanitize_callback' => 'igthemes_sanitize_hex_color',
        'default'  => $footer_link_hover,
    ));
    $wp_customize->add_control(
        new WP_Customize_color_Control(
        $wp_customize, 'footer_link_hover',
            array(
                'label' => __('', 'onepage'),
                'description' => __('Link hover color', 'onepage'),
                'priority' => 5,
                'type' => 'color',
                'section' => 'footer-settings',
                'settings' => 'footer_link_hover',
            )
    ));
/*****************************************************************
* SOCIAL SETTINGS
******************************************************************/
//facebook
    $wp_customize->add_setting('facebook_url', array(
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('facebook_url', array(
        'label' => esc_html__('Facebook url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => 'facebook_url',
    ));
//twitter
    $wp_customize->add_setting('twitter_url', array(
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('twitter_url', array(
        'label' => esc_html__('Twitter url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => 'twitter_url',
    ));
//google
    $wp_customize->add_setting('google_url', array(
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('google_url', array(
        'label' => esc_html__('Google plus url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => 'google_url',
    ));
//pinterest
    $wp_customize->add_setting('pinterest_url', array(
        
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('pinterest_url', array(
        'label' => esc_html__('Pinterest url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => 'pinterest_url',
    ));
//tumblr
    $wp_customize->add_setting('tumblr_url', array(
        
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('tumblr_url', array(
        'label' => esc_html__('Tumblr url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => 'tumblr_url',
    ));
//instagram
    $wp_customize->add_setting('instagram_url', array(
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('instagram_url', array(
        'label' => esc_html__('Instagram url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => 'instagram_url',
    ));
//linkedin
    $wp_customize->add_setting('linkedin_url', array(
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('linkedin_url', array(
        'label' => esc_html__('Linkedin url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => 'linkedin_url',
    ));
//dribbble
    $wp_customize->add_setting('dribbble_url', array(
        
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('dribbble_url', array(
        'label' => esc_html__('Dribble url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => 'dribbble_url',
    ));
//youtube
    $wp_customize->add_setting('youtube_url', array(
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('youtube_url', array(
        'label' => esc_html__('Youtube url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => 'youtube_url',
    ));
    //END
}

    /*+++++++++++++++++++++++++++++++++++++++++++++
    CUSTOM CONTROL CSS
    +++++++++++++++++++++++++++++++++++++++++++++*/
    public function customizer_custom_control_css() {
        ?>
        <style>
        .customize-control-radio-image .image.ui-buttonset input[type=radio] {
            height: auto;
        }
        .customize-control-radio-image .image.ui-buttonset label {
            display: inline-block;
            width: 30%;
            padding: 1%;
            box-sizing: border-box;
        }
        .customize-control-radio-image .image.ui-buttonset label.ui-state-active {
            background: none;
        }
        .customize-control-radio-image .customize-control-radio-buttonset label {
            background: #f7f7f7;
            line-height: 35px;
        }
        .customize-control-radio-image label img {
            border: 2px solid #eee;
        }
        #customize-controls .customize-control-radio-image label img {
            height: auto;
        }
        .customize-control-radio-image label.ui-state-active img {
            border: 2px solid #fff;
            background: #fff;
        }
        .customize-control-radio-image label.ui-state-hover img {
            border: 2px solid #fff;
        }
        .customize-control-heading {
            border-top: 1px solid #ddd;
            margin-top: 15px;
            padding-top: 20px;
        }
        .customize-control-heading .customize-control-title:after {
            content
        }
        #customize-control-upgrade_premium .button-upgrade {
              background: #fc3;
              border: 1px solid #e6ac00;
              color: #5d4b16;
              text-transform: uppercase;
              display: inline-block;
              text-decoration: none;
              font-size: 13px;
              line-height: 30px;
              height: 32px;
              margin: 15px 0;
              padding: 0 20px 1px;
              cursor: pointer;
              -webkit-appearance: none;
              -webkit-border-radius: 2px;
              border-radius: 2px;
              white-space: nowrap;
              -webkit-box-sizing: border-box;
              -moz-box-sizing: border-box;
              box-sizing: border-box;
              text-shadow: 2px 2px #fd3;
        }
        #customize-control-upgrade_premium .button-upgrade:hover {
            background: #fd3;
            color: #5d4b16;
            border-color: #ffc61a;
        }
        #customize-control-upgrade_premium ul {
            list-style: square;
            margin: 10px 16px;
        }
        </style>
        <?php
    }
//END OF CLASS
}
return new IGthemes_Customizer();

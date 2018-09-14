<?php
/**
 * Onepage functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Onepage
 */

if ( ! function_exists( 'onepage_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function onepage_setup() {
    /*
	 * Make theme available for translation.
	 * If you're building a theme based on this theme, use a find and replace
	 * to change 'onepage' to the name of your theme in all the template files.
	 */
    load_theme_textdomain( 'onepage' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary', 'onepage' ),
        'header-menu' => esc_html__( 'Header Menu', 'onepage' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'onepage_custom_background_args', array(
        'default-color' => 'f6f6f6',
        'default-image' => '',
    ) ) );

    // Custom logo support.
    add_theme_support( 'custom-logo' );
}
endif;
add_action( 'after_setup_theme', 'onepage_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function onepage_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'onepage_content_width', 1140 );
}
add_action( 'after_setup_theme', 'onepage_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function onepage_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'onepage' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'onepage' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Header widget area', 'onepage' ),
        'id'            => 'header-widget',
        'description'   => esc_html__( 'Add widgets here.', 'onepage' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    for ( $i = 1; $i <= intval( 4 ); $i++ ) {
        register_sidebar( array(
            'name' 				=> sprintf( __( 'Footer %d', 'onepage' ), $i ),
            'id' 				=> sprintf( 'footer-%d', $i ),
            'description' 		=> sprintf( esc_html__( 'Widgetized Footer Region %d.','onepage' ), $i ),
            'before_widget'     => '<section id="%1$s" class="widget %2$s">',
            'after_widget' 		=> '</section>',
            'before_title' 		=> '<h3 class="widget-title">',
            'after_title' 		=> '</h3>',
            )
        );
    }
    if( is_edd_activated() || is_woocommerce_activated() ) {
        register_sidebar( array(
            'name'          => esc_html__( 'Shop widget area', 'onepage' ),
            'id'            => 'sidebar-shop',
            'description'   => esc_html__( 'Add widgets here.', 'onepage' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        ) );
    }

}
add_action( 'widgets_init', 'onepage_widgets_init' );


/**
 * Enqueue scripts and styles.
 */

function onepage_scripts() {
    wp_enqueue_style( 'onepage-style', get_stylesheet_uri() );

    wp_enqueue_script( 'onepage-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'onepage-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    wp_enqueue_script( 'onepage-theme', get_template_directory_uri() . '/js/theme.js', array('jquery'), '1.0', true );

    //conditional ie scripts
    global $wp_scripts;
    wp_enqueue_script('igthemes-ie9',
                 get_template_directory_uri() . '/js/ie-fix.js',
                 array(),
                 '1.0',
                 false );
    wp_enqueue_script('igthemes-ie9');
    wp_script_add_data('igthemes-ie9', 'conditional', 'lt IE 9');
}
add_action( 'wp_enqueue_scripts', 'onepage_scripts' );

//Gooogle fonts
function onepage_google_fonts() {
        wp_enqueue_style( 'onepage-fonts', '//fonts.googleapis.com/css?family='. apply_filters( 'igthemes_google_font', 'Open+Sans:300,300i,400,400i,700,700i&subset=latin-ext'));
}

add_action( 'wp_enqueue_scripts', 'onepage_google_fonts' );

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/admin/options/customizer.php';
/**
 * Welcome screen.
 */
require get_template_directory() . '/inc/admin/welcome/welcome-screen.php';

/**
 * Template functions an actionss.
 */
require get_template_directory() . '/inc/render/template-functions.php';
require get_template_directory() . '/inc/render/template-tags.php';
require get_template_directory() . '/inc/render/extras.php';
//structure
require get_template_directory() . '/inc/render/structure/header.php';
require get_template_directory() . '/inc/render/structure/content-top.php';
require get_template_directory() . '/inc/render/structure/footer.php';
require get_template_directory() . '/inc/render/structure/loop.php';
require get_template_directory() . '/inc/render/structure/post.php';
require get_template_directory() . '/inc/render/structure/page.php';
//plugins
require get_template_directory() . '/inc/plugins/jetpack/jetpack-funtions.php';
require get_template_directory() . '/inc/plugins/beaver-builder/bbuilder-functions.php';

/*----------------------------------------------------------------------
# EDD SUPPORT
------------------------------------------------------------------------*/
if ( ! function_exists( 'is_edd_activated' ) ) {
    function is_edd_activated() {
        return class_exists( 'Easy_Digital_Downloads' ) ? true : false;
    }
}
if (is_edd_activated()) {
    require get_template_directory() . '/inc/plugins/edd/edd-functions.php';
}

/*----------------------------------------------------------------------
# WOOCOMMERCE SUPPORT
------------------------------------------------------------------------*/
add_action( 'after_setup_theme', 'igthemes_woocommerce_support' );
function igthemes_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Check if woocommerce is active and prevent fatal error
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
    function is_woocommerce_activated() {
        return class_exists( 'woocommerce' ) ? true : false;
    }
}

if (is_woocommerce_activated()) {
    require get_template_directory() . '/inc/plugins/woocommerce/wc-functions.php';
}

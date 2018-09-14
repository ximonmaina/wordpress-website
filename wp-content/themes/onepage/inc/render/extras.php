<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 */

/**
 * Adds custom classes to the array of body classes.
 */
function igthemes_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'group-blog';
    }

    // Adds a class of hfeed to non-singular pages.
    if ( ! is_singular() ) {
        $classes[] = 'hfeed';
    }

    // If our main sidebar doesn't contain widgets, adjust the layout to be full-width.
    if ( ! is_active_sidebar( 'sidebar-1' ) && is_home() 
        || ! is_active_sidebar( 'sidebar-1' ) && is_category()
        || ! is_active_sidebar( 'sidebar-1' ) && is_tag() 
        || ! is_active_sidebar( 'sidebar-1' ) && is_singular('post') 
        || is_page_template( 'page-fullwidth.php' ) ) {
            $classes[] = 'full-width';
    }
    // sidebar left page tempalte.
    if ( is_page_template( 'page-sidebarleft.php' ) || get_theme_mod('main_sidebar') =='left' && is_post_type_archive('post') ||  get_theme_mod('main_sidebar') =='left' && is_front_page() || get_theme_mod('main_sidebar') =='left' && is_home() || get_theme_mod('main_sidebar') =='left' && is_singular('post') ) {
        $classes[] = 'sidebar-left';
    }
    return $classes;
}
add_filter( 'body_class', 'igthemes_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function igthemes_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', bloginfo( 'pingback_url' ), '">';
	}
}
add_action( 'wp_head', 'igthemes_pingback_header' );
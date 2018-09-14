<?php
/**
 * Adds custom classes to the array of body classes.
 */
function igthemes_wc_body_classes( $classes ) {

    // If our shop sidebar doesn't contain widgets, adjust the layout to be full-width.
	if ( ! is_active_sidebar( 'sidebar-shop' ) && is_woocommerce()  ) {
		$classes[] = 'full-width';
	}

    return $classes;
}
add_filter( 'body_class', 'igthemes_wc_body_classes' );
/*----------------------------------------------------------------------
# REPLACE PAGINATION WITH THEME DEFAULT
------------------------------------------------------------------------*/
remove_action('woocommerce_pagination', 'woocommerce_pagination', 10);

if (!function_exists('woocommerce_pagination')) {
    function woocommerce_pagination() {
		igthemes_posts_navigation();
	}
}
add_action( 'woocommerce_pagination', 'woocommerce_pagination', 10);

/*----------------------------------------------------------------------
# WOOCOMMERCE PRODUCTS PER PAGE
------------------------------------------------------------------------*/
add_filter( 'loop_shop_per_page', 'igthemes_wc_products_per_page' );

if (!function_exists('igthemes_wc_products_per_page')) {
    function igthemes_wc_products_per_page() {
	   return intval( apply_filters( 'igthemes_wc_products_per_page', 12 ) );
    }
}
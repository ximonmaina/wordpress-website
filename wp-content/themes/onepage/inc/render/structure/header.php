<?php
/*-----------------------------------------------------------------
 * HEADER
-----------------------------------------------------------------*/
add_action( 'igthemes_header', 'igthemes_header_navigation', 10 );
add_action( 'igthemes_header', 'igthemes_site_branding', 20 );
add_action( 'igthemes_header', 'igthemes_main_navigation', 30 );

// SITE TITLE
if ( ! function_exists( 'igthemes_site_title' ) ) {
    //start
    function igthemes_site_title() {
        if ( '' != get_bloginfo( 'description' ) && !has_custom_logo() ) {
            echo '<div class="site-title"><h1><a href="'. esc_url( home_url( '/' ) ).'" rel="home"> ' . get_bloginfo( "name" ) . '</a></h1></div>';
        }
    }
}
add_action( 'igthemes_site_branding', 'igthemes_site_title', 10 );
// SITE DESCRIPTION
if ( ! function_exists( 'igthemes_site_description' ) ) {
    //start
    function igthemes_site_description() { 
        if ( '' != get_bloginfo( 'description' ) && !has_custom_logo() ) {
            echo '<div class="site-description">' . get_bloginfo( 'description' ) . '</div>';
        }
    }
}
add_action( 'igthemes_site_branding', 'igthemes_site_description', 10 );

// SITE LOGO
if ( ! function_exists( 'igthemes_site_logo' ) ) {
    //start
    function igthemes_site_logo() { 
        if ( function_exists( 'jetpack_has_site_logo' ) && jetpack_has_site_logo() ) {
            jetpack_the_site_logo();
        } else {
            the_custom_logo();
        }
    }
}
add_action( 'igthemes_site_branding', 'igthemes_site_logo', 10 );

// BRANDING
if ( ! function_exists( 'igthemes_site_branding' ) ) {
    //start
    function igthemes_site_branding() { 
        echo '<div class="site-branding '. apply_filters('igthemes-header-class', 'center') . '">';
            do_action( 'igthemes_site_branding');
        echo '</div>';
    }
}
// MAIN NAVIGATION
if ( ! function_exists( 'igthemes_main_navigation' ) ) {
    //start function
    function igthemes_main_navigation() { ?>
    <nav id="site-navigation" class="main-navigation <?php echo apply_filters('igthemes-header-class', 'center') ;?>" role="navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <?php esc_html_e( 'Menu', 'onepage' ); ?>
        </button>
        <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
    </nav><!-- #site-navigation -->
<?php  }
}
// HEADER NAVIGATION
if ( ! function_exists( 'igthemes_header_navigation' ) ) {
    //start function
    function igthemes_header_navigation() { ?>
    <nav id="header-navigation" class="header-nav <?php echo apply_filters('igthemes-header-class', 'center') ;?>" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'menu_id' => 'header-menu', 'fallback_cb' => false ) ); ?>
    </nav><!-- #site-navigation -->
<?php  }
}
// ADD SITE DESCRIPTION TO HEADER NAVIGATION
//add_filter( 'wp_nav_menu_items', 'igthemes_header_desc_menu_item', 10, 2 );
function igthemes_header_desc_menu_item ( $items, $args ) {
    if ($args->theme_location == 'header-menu') {
        $items .= '<li style="float:left;"><div class="site-description">' . get_bloginfo( 'description' ) . '</div></li>';
    }
    return $items;
}

<?php
/*-----------------------------------------------------------------
 * CONTENT TOP
-----------------------------------------------------------------*/
add_action( 'igthemes_content_top', 'igthemes_header_widget', 10 );
add_action( 'igthemes_content_top', 'igthemes_top_breadcrumb', 20 );
add_action( 'igthemes_content_top', 'igthemes_home_portfolio', 30 );
add_action( 'igthemes_content_top', 'igthemes_home_testimonials', 40 );

/*-----------------------------------------------------------------
 * TOP WIDGETS
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_header_widget' ) ) {
    //start function
    function igthemes_header_widget() {
        if ( is_active_sidebar( 'header-widget' ) ) {
            echo '<div class="header-widget-region" role="complementary">';
                dynamic_sidebar( 'header-widget' );
            echo '</div>';
        }
    }
}
/*-----------------------------------------------------------------
 * BREADCRUMB
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_breadcrumb' ) ) {
    // start function
    function igthemes_breadcrumb() {
        if (get_theme_mod('post_breadcrumb')) {
            if ( function_exists('bcn_display') && !is_home() ) { ?>
            <div class="breadcrumb" typeof="BreadcrumbList" vocab="http://schema.org/">
                <div class="container">
                    <?php bcn_display(); ?>
                </div>
            </div>
            <?php } elseif ( function_exists('yoast_breadcrumb') ) { 
                yoast_breadcrumb('<div class="breadcrumb"><div class="container">','</div></div>');
            } else {
                if (!is_home()) {
                    echo '<div class="breadcrumb">';
                    echo '<a href="'. esc_url(home_url('/')) .'">';
                    echo esc_html__('Home', 'onepage');
                    echo '</a>';
                    if (is_single()) {
                        the_category('');
                        if (is_singular( 'post' )) {
                            echo '<span class="current">';
                            the_title();
                            echo '</span>';
                        } 
                    }
                    echo '</div>';
                }
            }
        }
    }
}
//DISPLAY BREADCRUMBS
if ( ! function_exists( 'igthemes_top_breadcrumb' ) ) {
    //start function
    function igthemes_top_breadcrumb() {
        if (is_singular('post')) {
            igthemes_breadcrumb();
        }
    }
}
/*-----------------------------------------------------------------
 * PORTFOLIO SECTIONS
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_home_portfolio' )  ) {
    //start function
    function igthemes_home_portfolio() {
        if (is_home() && get_theme_mod('home_portfolio',0)=='1') {
            echo '<div class="portfolio scrollto" id="portfolio">';
            $cat = get_theme_mod('home_portfolio_tax');
                if ( get_theme_mod('home_portfolio_title','Our new projects')) {
                    echo '<h2 class="title">' . get_theme_mod('home_portfolio_title','Our new projects') . '</h2>';
                }    
                if ( get_theme_mod('home_portfolio_description','See our latest works!')) {
                    echo '<p class="description">' . get_theme_mod('home_porfolio_description','See our latest works!') . '</p>';
                }
                echo do_shortcode('[ig-portfolio-gallery cat="'. $cat .'" title="true" perpage="4"]');
            echo '</div>';
        }
    }
}
/*-----------------------------------------------------------------
 * TESTIMONIALS SECTIONS
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_home_testimonials' )  ) {
    //start function
    function igthemes_home_testimonials() {
        if (is_home() && get_theme_mod('home_testimonials',0)=='1') {
            echo '<div class="testimonials scrollto" id="testimonials">';
            $cat = get_theme_mod('home_testimonials_tax');
                if ( get_theme_mod('home_testimonials_title','What our clients says')) {
                    echo '<h2 class="title">' . get_theme_mod('home_testimonials_title','What our clients says') . '</h2>';
                }    
                if ( get_theme_mod('home_testimonials_description','We make every thing with best quality, our customers and partners are very happy!')) {
                    echo '<p class="description">' . get_theme_mod('home_testimonials_description','We make every thing with best quality, our customers and partners are very happy!') . '</p>';
                }
                echo do_shortcode('[ig-testimonials-carousel items="3" autoplay="true" image="true" arrows="false" dots="false" cat="'. $cat .'" perpage="9"]');
            echo '</div>';
        }
    }
}
<?php
/*-----------------------------------------------------------------
 * FOOTER
-----------------------------------------------------------------*/
add_action( 'igthemes_footer', 'igthemes_footer_widgets', 10 );
add_action( 'igthemes_footer', 'igthemes_scroll_top', 20 );
add_action( 'igthemes_footer', 'igthemes_social', 30 );
add_action( 'igthemes_footer', 'igthemes_credit', 40 );

/*-----------------------------------------------------------------
 * CREDITS
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_credit' ) ) {
    function igthemes_credit() { ?>
        <div class="site-info">
            <?php echo esc_html( apply_filters( 'igthemes_copyright_text', $content = '&copy; ' . get_bloginfo( 'name' ) . ' ' . date( 'Y' ) ) ); ?>
            <?php if ( apply_filters( 'igthemes_credit_link', true ) ) { ?>
                <br /><?php printf( esc_attr__( '%1$s designed by %2$s.', 'onepage' ), 'Onepage', '<a href="http://www.iograficathemes.com" alt="Free and Premium WordPress Themes & Plugins" title="Free and Premium WordPress Themes & Plugins" rel="designer">Iografica Themes</a>' ); ?>
            <?php } ?>
        </div><!-- .site-info -->
    <?php }
}
/*-----------------------------------------------------------------
 * SCROLL TO TOP
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_scroll_top' ) ) {
    function igthemes_scroll_top() { ?>
        <div class="scroll-top">
            <a href="#mathead" id="scrolltop">
                <span class="icon-arrow-up"></span>
            </a>
        </div>
<?php }
}
/*-----------------------------------------------------------------
 * SOCIAL
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_social' ) ) {
    function igthemes_social() { ?>
    <div class="social-url">
        <?php if ( get_theme_mod('facebook_url') ) {
            $facebook_url = esc_url(get_theme_mod('facebook_url', ''));
            echo "<a href='$facebook_url' title='Facebook' target='_blank' class='facebook-icon'><span class='icon-social-facebook'></span></a>";
        }?>
        <?php if ( get_theme_mod('twitter_url') ) {
            $twitter_url = esc_url(get_theme_mod('twitter_url', ''));
            echo "<a href='$twitter_url' title='Twitter' target='_blank' class='twitter-icon'><span class='icon-social-twitter'></span></a>";
        }?>
        <?php if ( get_theme_mod('google_url') ) {
            $google_url = esc_url(get_theme_mod('google_url', ''));
            echo "<a href='$google_url' title='Google Plus' target='_blank' class='google-icon'><span class='icon-social-google'></span></a>";
        }?>
        <?php if ( get_theme_mod('pinterest_url') ) {
            $pinterest_url = esc_url(get_theme_mod('pinterest_url', ''));
            echo "<a href='$pinterest_url' title='Pinterest' target='_blank' class='pinterest-icon'><span class='icon-social-pinterest'></span></a>";
        }?>
        <?php if ( get_theme_mod('tumblr_url') ) {
            $tumblr_url = esc_url(get_theme_mod('tumblr_url', ''));
            echo "<a href='$tumblr_url' title='Tumblr' target='_blank' class='tumblr-icon'><span class='icon-social-tumblr'></span></a>";
        }?>
        <?php if ( get_theme_mod('instagram_url') ) {
            $instagram_url = esc_url(get_theme_mod('instagram_url', ''));
            echo "<a href='$instagram_url' title='Instagram' target='_blank' class='instagram-icon'><span class='icon-social-instagram'></span></a>";
        }?>
        <?php if ( get_theme_mod('linkedin_url') ) {
            $linkedin_url = esc_url(get_theme_mod('linkedin_url', ''));
            echo "<a href='$linkedin_url' title='Linkedin' target='_blank' class='linkedin-icon'><span class='icon-social-linkedin'></span></a>";
        }?>
        <?php if ( get_theme_mod('dribbble_url') ) {
            $dribbble_url = esc_url(get_theme_mod('dribbble_url', ''));
            echo "<a href='$dribbble_url' title='Dribble' target='_blank' class='dribble-icon'><span class='icon-social-dribbble'></span></a>";
        }?>
        <?php if ( get_theme_mod('youtube_url') ) {
            $youtube_url = esc_url(get_theme_mod('youtube_url', ''));
            echo "<a href='$youtube_url' title='Youtube' target='_blank' class='youtube-icon'><span class='icon-social-youtube'></span></a>";
        }?>
    </div><!-- .social url -->
<?php }
}
/*-----------------------------------------------------------------
 * FOOTER WIDGET
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_footer_widgets' ) ) {
    function igthemes_footer_widgets() {
        if ( is_active_sidebar( 'footer-4' ) ) {
            $widget_columns = apply_filters( 'igthemes_footer_widget_regions', 4 );
        } elseif ( is_active_sidebar( 'footer-3' ) ) {
            $widget_columns = apply_filters( 'igthemes_footer_widget_regions', 3 );
        } elseif ( is_active_sidebar( 'footer-2' ) ) {
            $widget_columns = apply_filters( 'igthemes_footer_widget_regions', 2 );
        } elseif ( is_active_sidebar( 'footer-1' ) ) {
            $widget_columns = apply_filters( 'igthemes_footer_widget_regions', 1 );
        } else {
            $widget_columns = apply_filters( 'igthemes_footer_widget_regions', 0 );
        }
        if ( $widget_columns > 0 ) : ?>

    <div class="footer-widget-region grid-container">
    <?php
        $i = 0;
        while ( $i < $widget_columns ) : $i++;
        if ( is_active_sidebar( 'footer-' . $i ) ) : ?>
        
        <section class="footer-widget col<?php echo intval( $widget_columns ); ?>">
            <?php dynamic_sidebar( 'footer-' . intval( $i ) ); ?>
        </section>
    <?php 
        endif;
        endwhile; 
    ?>
    </div><!-- /.footer-widgets  -->

<?php endif;
    }
}

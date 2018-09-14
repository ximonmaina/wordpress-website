<?php
/**
 * Displays header top bar
 *
 * @package High_Responsive
 */
?>

<?php
	$search_text = get_theme_mod( 'highresponsive_search_text', esc_html__( 'Search', 'high-responsive' ) );
?>

<div id="header-top" class="header-top-bar">
	<div class="wrapper">
		<button id="search-toggle-top" class="menu-search-top-toggle menu-toggle"><?php echo highresponsive_get_svg( array(
					'icon' => 'search',
				), true ); echo highresponsive_get_svg( array(
					'icon' => 'close',
				), true ); ?><span class="search-label"><?php echo esc_attr( $search_text ); ?></span>
		</button>

		<div id="search-top-container" class="with-social displaynone">
        	<div id="search-container">
            	<?php get_search_form(); ?>
            </div><!-- #search-container -->

			<?php if( get_theme_mod( 'highresponsive_enable_date' ) || get_theme_mod( 'highresponsive_email' ) || get_theme_mod( 'highresponsive_phone' ) ): ?>
				<div class="header-top-left">
            		<ul class="contact-details">
						<?php if ( get_theme_mod( 'highresponsive_enable_date' ) ) : ?>
						<li class="date"><?php echo highresponsive_get_svg( array( 'icon' => 'calendar' ) ); ?><?php echo esc_html( date_i18n( 'l, F j, Y' ) ); ?></li>
						<?php endif; ?>

						<?php if ( get_theme_mod( 'highresponsive_email' ) ) : ?>
						<li class="contact-email"><a href="mailto:<?php echo esc_attr( antispambot( get_theme_mod( 'highresponsive_email' ) ) ); ?>"><?php echo highresponsive_get_svg( array( 'icon' => 'envelope-o' ) ); ?><?php echo esc_html( antispambot( get_theme_mod( 'highresponsive_email' ) ) ) ?></a></li>
						<?php endif; ?>

						<?php if ( get_theme_mod( 'highresponsive_phone' ) ) : ?>
						<li class="contact-phone"><a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', get_theme_mod( 'highresponsive_phone' ) ) ); ?>"><?php echo highresponsive_get_svg( array( 'icon' => 'phone' ) ); ?><?php echo esc_html( preg_replace( '/\s+/', '', get_theme_mod( 'highresponsive_phone' ) ) ); ?></a></li>
						<?php endif; ?>
					</ul><!-- .contact-details -->
				</div><!-- .header-top-left -->
        	<?php endif; ?>
        </div><!-- #search-top-container -->

   		<?php if( get_theme_mod( 'highresponsive_enable_date' ) || get_theme_mod( 'highresponsive_email' ) || get_theme_mod( 'highresponsive_phone' ) ): ?>
			<div class="header-top-left disable-in-mobile">
        		<ul class="contact-details">
					<?php if ( get_theme_mod( 'highresponsive_enable_date' ) ) : ?>
					<li class="date"><?php echo highresponsive_get_svg( array( 'icon' => 'calendar' ) ); ?><?php echo esc_html( date_i18n( 'l, F j, Y' ) ); ?></li>
					<?php endif; ?>

					<?php if ( get_theme_mod( 'highresponsive_email' ) ) : ?>
					<li class="contact-email"><a href="mailto:<?php echo esc_attr( antispambot( get_theme_mod( 'highresponsive_email' ) ) ); ?>"><?php echo highresponsive_get_svg( array( 'icon' => 'envelope-o' ) ); ?><?php echo esc_html( antispambot( get_theme_mod( 'highresponsive_email' ) ) ) ?></a></li>
					<?php endif; ?>

					<?php if ( get_theme_mod( 'highresponsive_phone' ) ) : ?>
					<li class="contact-phone"><a href="tel:<?php echo esc_attr( preg_replace( '/\s+/', '', get_theme_mod( 'highresponsive_phone' ) ) ); ?>"><?php echo highresponsive_get_svg( array( 'icon' => 'phone' ) ); ?><?php echo esc_html( preg_replace( '/\s+/', '', get_theme_mod( 'highresponsive_phone' ) ) ); ?></a></li>
					<?php endif; ?>
				</ul><!-- .contact-details -->
			</div><!-- .header-top-left -->
    	<?php endif; ?>

    	<?php if ( has_nav_menu( 'social-top' ) ) : ?>
    		<div class="header-top-right top-without-menu">
				<nav id="social-navigation" class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'high-responsive' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social-top',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>' . highresponsive_get_svg( array( 'icon' => 'chain' ) ),
						) );
					?>
				</nav><!-- .social-navigation -->
			</div><!-- .header-top-right -->
		<?php endif; ?>

	</div><!-- .wrapper -->
</div><!-- #header-top -->

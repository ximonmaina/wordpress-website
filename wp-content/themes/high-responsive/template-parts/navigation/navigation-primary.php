<?php
/**
 * Displays Primary Navigation
 *
 * @package High_Responsive
 */
?>

<div id="header-navigation-area">
	<div class="wrapper">
		<button id="primary-menu-toggle" class="menu-primary-toggle menu-toggle" aria-controls="primary-menu" aria-expanded="false">
			<?php
			echo highresponsive_get_svg( array( 'icon' => 'bars' ) );
			echo highresponsive_get_svg( array( 'icon' => 'close' ) );
			echo '<span class="menu-label-prefix">'. esc_attr__( 'Primary ', 'high-responsive' ) . '</span><span class="menu-label">'. esc_attr__( 'Menu', 'high-responsive' ) . '</span>';
			?>
		</button>

		<div id="site-header-menu" class="site-primary-menu">
			<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
				<nav id="site-primary-navigation" class="main-navigation site-navigation custom-primary-menu" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'high-responsive' ); ?>">
					<?php wp_nav_menu( array(
						'theme_location'	=> 'menu-1',
						'container_class'	=> 'primary-menu-container',
						'menu_class'		=> 'primary-menu',
					) ); ?>
				</nav><!-- #site-primary-navigation.custom-primary-menu -->
			<?php else : ?>
				<nav id="site-primary-navigation" class="main-navigation site-navigation default-page-menu" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'high-responsive' ); ?>">
					<?php wp_page_menu(
						array(
							'menu_class' => 'primary-menu-container',
							'before'     => '<ul id="primary-page-menu" class="primary-menu">',
							'after'      => '</ul>',
						)
					); ?>
				</nav><!-- #site-primary-navigation.default-page-menu -->

			<?php endif; ?>
		</div><!-- .site-header-main -->
	</div><!-- .wrapper -->
</div><!-- #header-navigation-area -->

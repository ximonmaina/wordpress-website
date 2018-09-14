<?php
/**
 * The template for the content bottom widget areas on posts and pages
 *
 * @package High_Responsive
 */
?>

<?php
if ( ! is_active_sidebar( 'sidebar-2' ) && ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}

// If we get this far, we have widgets. Let's do this.
?>
<aside id="content-bottom-widgets" class="content-bottom-widgets" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-6' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-6' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>

	<?php if ( is_active_sidebar( 'sidebar-7' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-7' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
</aside><!-- .content-bottom-widgets -->

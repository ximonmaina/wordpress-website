<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package High_Responsive
 */
?>

<?php
$highresponsive_layout = highresponsive_get_theme_layout();

// Bail early if no sidebar layout is selected.
if ( 'no-sidebar' === $highresponsive_layout ) {
	return;
}

if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>

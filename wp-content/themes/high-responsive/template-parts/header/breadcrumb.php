<?php
/**
 * Display Breadcrumb
 *
 * @package High_Responsive
 */
?>

<?php
$enable_breadcrumb = get_theme_mod( 'highresponsive_breadcrumb_option', 1 );

if ( $enable_breadcrumb ) :
    highresponsive_breadcrumb();
endif;

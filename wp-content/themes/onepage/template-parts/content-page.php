<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Onepage
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * Functions hooked into igthemes_single_page 
	 */
	do_action( 'igthemes_single_page' );
	?>

</article><!-- #post-## -->

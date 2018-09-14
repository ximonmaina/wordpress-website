<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Onepage
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * Functions hooked into igthemes_single_post  and igthemes_loop
	 */
    if (is_single()) {
        do_action( 'igthemes_single_post' );
    } else {
        do_action( 'igthemes_loop' );
    }
	   
	?>
</article><!-- #post-## -->

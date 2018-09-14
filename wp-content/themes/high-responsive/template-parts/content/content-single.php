<?php
/**
 * The template part for displaying single posts
 *
 * @package High_Responsive
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php if ( 'post' === get_post_type() ) :
			highresponsive_entry_header();
		endif; ?>
	</header><!-- .entry-header -->

	<?php highresponsive_excerpt(); ?>

	<?php
	$single_layout = get_theme_mod( 'highresponsive_single_layout', 'disabled' );

	if ( 'disabled' !== $single_layout ) {
		highresponsive_post_thumbnail( $single_layout );
	}
	?>

	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'high-responsive' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'high-responsive' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php highresponsive_entry_footer(); ?>

</article><!-- #post-## -->

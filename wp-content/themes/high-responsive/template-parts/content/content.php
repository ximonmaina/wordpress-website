<?php
/**
 * The template part for displaying content
 *
 * @package High_Responsive
 */
?>

<?php
$show_meta 	  = get_theme_mod( 'highresponsive_featured_meta_show', 'show-meta' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hentry-inner">
		<?php
		$content_layout = get_theme_mod( 'highresponsive_content_layout', 'excerpt-image-left' );

		if ( 'excerpt-image-left' === $content_layout || 'excerpt-image-right' === $content_layout ) {
			highresponsive_post_thumbnail( 'highresponsive-featured' );
		} elseif ( 'excerpt-image-top' === $content_layout || 'full-content-image-top' === $content_layout ) {
			highresponsive_post_thumbnail();
		}
		?>

		<div class="entry-container">
			<header class="entry-header">
				<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
					<span class="sticky-post"><?php _e( 'Featured', 'high-responsive' ); ?></span>
				<?php endif; ?>

				<?php if ( 'show-meta' === $show_meta ) {
					echo highresponsive_entry_category_date();
				} ?>

				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</header><!-- .entry-header -->

			<?php
			if ( 'excerpt-image-left' === $content_layout || 'excerpt-image-right' === $content_layout || 'excerpt-image-top' === $content_layout ) { ?>
				<div class="entry-summary">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
			<?php
			} else {
			?>
			<div class="entry-content">
				<?php
					/* translators: %s: Name of current post */
					the_content( sprintf(
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'high-responsive' ),
						get_the_title()
					) );

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
			<?php
			}
			?>
		</div><!-- .entry-container -->
	</div><!-- .hentry-inner -->
</article><!-- #post-## -->

<?php
/**
 * The template for displaying featured posts on the front page
 *
 * @package High_Responsive
 */
?>

<?php $layout = 'layout-three' ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hentry-inner">
		<a class="post-thumbnail" href="<?php the_permalink(); ?>">
		<?php
		// Output the featured image.
		if ( has_post_thumbnail() ) {

			if ( 'layout-one' === $layout ) {
				$thumbnail = 'highresponsive-slider';
			}
			else {
				$thumbnail = 'highresponsive-featured';
			}

			the_post_thumbnail( $thumbnail );
		} else {
			echo '<a href=' . esc_url( get_permalink() ) .'><img src="' .  trailingslashit( esc_url( get_template_directory_uri() ) ) . 'assets/images/no-thumb.jpg"/></a>';
		}
		?>
		</a>

		<div class="entry-container">
			<header class="entry-header">
				<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">','</a></h2>' ); ?>
			</header>

			<div class="entry-summary">
				<p><?php the_excerpt(); ?></p>
			</div><!-- .entry-summary -->
		</div><!-- .entry-container -->
	</div><!-- .hentry-inner -->
</article>

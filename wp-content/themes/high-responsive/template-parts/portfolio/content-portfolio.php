<?php
/**
 * The template used for displaying projects on index view
 *
 * @package High_Responsive
 */
?>

<?php
$layout = 'layout-three';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> class="hentry">
	<div class="hentry-inner">
		<div class="portfolio-thumbnail post-thumbnail">
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
		</div><!-- .portfolio-thumbnail -->

		<div class="entry-container">
			<header class="entry-header portfolio-entry-header">
				<?php echo highresponsive_entry_category_date(); ?>

				<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			</header>

			<div class="entry-summary">
				<p><?php the_excerpt(); ?></p>
			</div><!-- .entry-summary -->
		</div><!-- .entry-container -->
	</div><!-- .hentry-inner -->
</article>

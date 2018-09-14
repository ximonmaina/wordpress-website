<?php
/**
 * The template used for displaying testimonial on front page
 *
 * @package High_Responsive
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) : ?>
		<div class="testimonial-thumbnail post-thumbnail">
			<?php the_post_thumbnail( 'highresponsive-testimonial' ); ?>
		</div>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<?php
	$position = get_post_meta( get_the_id(), 'ect_testimonial_position', true );
	if ( $position ) {
		$position = '<p class="entry-meta"><span class="position">' . esc_html( $position ) . '</span></p>';
	}
	?>

	<?php the_title( '<header class="entry-header"><h2 class="entry-title">', $position . '</h2></header>' ); ?>
</article>

<?php
/**
 * The template for displaying testimonial items
 *
 * @package High_Responsive
 */
?>

<?php
$enable = get_theme_mod( 'highresponsive_testimonial_option', 'disabled' );

if ( ! highresponsive_check_section( $enable ) ) {
	// Bail if featured content is disabled
	return;
}

//$type = get_theme_mod( 'highresponsive_testimonial_type', 'demo' );

// Get Jetpack options for testimonial.
$jetpack_defaults = array(
	'page-title' => esc_html__( 'Testimonials', 'high-responsive' ),
);

// Get Jetpack options for testimonial.
$jetpack_options = get_theme_mod( 'jetpack_testimonials', $jetpack_defaults );

$headline = isset( $jetpack_options['page-title'] ) ? $jetpack_options['page-title'] : esc_html__( 'Testimonials', 'high-responsive' );

$subheadline = isset( $jetpack_options['page-content'] ) ? $jetpack_options['page-content'] : '';

$layouts = 1;

$classes[] = 'section testimonial-wrapper';

$classes[] = 'layout-one';

if ( ! $headline && ! $subheadline ) {
	$classes[] = 'no-headline';
}

?>

<div id="testimonial-section" class="<?php echo esc_attr( implode( ' ', $classes ) ); ?>">
	<div class="wrapper">

	<?php if ( $headline || $subheadline ) : ?>
		<div class="section-heading-wrap testimonial-section-headline">
		<?php if ( $headline ) : ?>
			<div class="section-title-wrapper">
				<h2 class="section-title"><?php echo wp_kses_post( $headline ); ?></h2>
			</div><!-- .section-title-wrapper -->
		<?php endif; ?>

		<?php if ( $subheadline ) : ?>
			<div class="taxonomy-description-wrapper">
				<?php echo wp_kses_post( $subheadline ); ?>
			</div><!-- .taxonomy-description-wrapper -->
		<?php endif; ?>
		</div><!-- .section-heading-wrap -->
	<?php endif; ?>

		<div class="section-content-wrap">
			<?php $slider_select = get_theme_mod( 'highresponsive_testimonial_slider', 1 );

			if ( $slider_select ) : ?>
			<div class="cycle-slideshow"
				data-cycle-log="false"
				data-cycle-pause-on-hover="true"
				data-cycle-swipe="true"
				data-cycle-auto-height=container
				data-cycle-loader=false
				data-cycle-slides=".testimonial_slider_wrap"
				>
				<!-- prev/next links -->
				<button class="cycle-prev" aria-label="Previous">
					<span class="screen-reader-text"><?php esc_html_e( 'Previous Slide', 'high-responsive' ); ?></span><?php echo highresponsive_get_svg( array( 'icon' => 'angle-down' ) ); ?>
				</button>

				<button class="cycle-next" aria-label="Next">
					<span class="screen-reader-text"><?php esc_html_e( 'Next Slide', 'high-responsive' ); ?></span><?php echo highresponsive_get_svg( array( 'icon' => 'angle-down' ) ); ?>
				</button>


				<!-- empty element for pager links -->
				<div class="cycle-pager"></div>

				<div class="testimonial_slider_wrap">
			<?php endif; ?>

			<?php get_template_part( 'template-parts/testimonial/post-types', 'testimonial' ); ?>

			<?php if ( $slider_select ) : ?>
			</div><!-- .cycle-slideshow -->
			<?php endif; ?>
		</div><!-- .section-content-wrap -->
	</div><!-- .wrapper -->
</div><!-- .testimonial-section -->

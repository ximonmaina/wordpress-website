<?php
/**
 * The template for displaying featured content
 *
 * @package High_Responsive
 */
?>

<?php
$enable_content = get_theme_mod( 'highresponsive_featured_content_option', 'disabled' );

if ( ! highresponsive_check_section( $enable_content ) ) {
	// Bail if featured content is disabled.
	return;
}

$featured_posts = highresponsive_get_featured_posts();

if ( empty( $featured_posts ) ) {
	return;
}

$title     = get_option( 'featured_content_title', esc_html__( 'Contents', 'high-responsive' ) );
$sub_title = get_option( 'featured_content_content' );
$layout    = 'layout-three';
?>

<div id="featured-content-section" class="section">
	<div class="wrapper">
		<?php if ( '' !== $title || $sub_title ) : ?>
			<div class="section-heading-wrap featured-section-headline">
				<?php if ( '' !== $title ) : ?>
					<div class="section-title-wrapper">
						<h2 class="section-title"><?php echo wp_kses_post( $title ); ?></h2>
					</div><!-- .page-title-wrapper -->
				<?php endif; ?>

				<?php if ( $sub_title ) : ?>
					<div class="taxonomy-description-wrapper">
						<?php echo wp_kses_post( $sub_title ); ?>
					</div><!-- .taxonomy-description-wrapper -->
				<?php endif; ?>
			</div><!-- .section-heading-wrap -->
		<?php endif; ?>

		<div class="featured-content-wrapper <?php echo esc_attr( $layout ); ?>">
			<?php
			foreach ( $featured_posts as $post ) {
				setup_postdata( $post );

				// Include the featured content template.
				get_template_part( 'template-parts/featured-content/content', 'featured' );
			}

			wp_reset_postdata();
			?>
		</div><!-- .featured-content-wrapper -->
	</div><!-- .wrapper -->
</div><!-- #featured-content-section -->

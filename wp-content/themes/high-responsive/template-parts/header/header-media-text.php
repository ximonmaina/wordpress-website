<?php
/**
 * Display Header Media Text
 *
 * @package High_Responsive
 */
?>

<div class="custom-header-content sections header-media-section">
<?php
$header_media_title = get_theme_mod( 'highresponsive_header_media_title', esc_html__( 'Welcome to High Responsive', 'high-responsive' ) );

$header_media_text = get_theme_mod( 'highresponsive_header_media_text', esc_html__( 'Make things as simple as possible but no simpler.', 'high-responsive' ) );

if ( '' !== $header_media_title || '' !== $header_media_text ) : ?>

		<?php if ( '' !== $header_media_title ) : ?>
		<h2 class="entry-title section-title"><?php echo wp_kses_post( $header_media_title ); ?></h2>
		<?php endif; ?>

		<p class="site-header-text"><?php echo wp_kses_post( $header_media_text ); ?>
		<a href="<?php echo esc_url( get_theme_mod( 'highresponsive_header_media_url', '#' ) ); ?>" target="<?php echo get_theme_mod( 'highresponsive_header_url_target' ) ? '_blank' : '_self'; ?>" class="more-link"><?php echo esc_html( get_theme_mod( 'highresponsive_header_media_url_text', esc_html__( 'Continue Reading', 'high-responsive' ) ) ); ?><span class="screen-reader-text"><?php echo wp_kses_post( $header_media_title ); ?></span></a></p>

<?php endif; ?>
</div>

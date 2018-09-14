<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package High_Responsive
 */
?>

			</div><!-- .wrapper -->
		</div><!-- .site-content -->

		<?php
		$testimonial_position = get_theme_mod( 'highresponsive_testimonial_position' );

		if ( ! $testimonial_position ) {
			get_template_part( 'template-parts/testimonial/display', 'testimonial' );
		}
		?>

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>

			<div id="site-generator">
				<?php get_template_part( 'template-parts/footer/site', 'info' ); ?>
			</div><!-- #site-generator -->

			<!-- footer-widgets-->
			<div class="footer-widgets clearfix">

			<?php if(is_active_sidebar('footer1')) : ?>
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer1'); ?>
				</div>
			<?php endif ?>
			<?php if(is_active_sidebar('footer12')) : ?>
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer2'); ?>
				</div>
			<?php endif ?>
			<?php if(is_active_sidebar('footer3')) : ?>
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer3'); ?>
				</div>
			<?php endif ?>
			<?php if(is_active_sidebar('footer4')) : ?>
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer4'); ?>
				</div>
			<?php endif ?>
				
			</div><!-- /footer-widgets-->

		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>

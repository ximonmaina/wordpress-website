<?php
/**
 * The template for displaying the Slider
 *
 * @package High_Responsive
 */

if ( ! function_exists( 'highresponsive_featured_slider' ) ) :
	/**
	 * Add slider.
	 *
	 * @uses action hook highresponsive_before_content.
	 *
	 * @since High Responsive 1.0
	 */
	function highresponsive_featured_slider() {
		$enable_slider = get_theme_mod( 'highresponsive_slider_option', 'disabled' );

		if ( highresponsive_check_section( $enable_slider ) ) {
			$transition_effect = get_theme_mod( 'highresponsive_slider_transition_effect', 'fade' );
			$transition_length = get_theme_mod( 'highresponsive_slider_transition_length', 1 );
			$transition_delay  = get_theme_mod( 'highresponsive_slider_transition_delay', 4 );
			$image_loader      = get_theme_mod( 'highresponsive_slider_image_loader', true );

			$output = '
				<div id="feature-slider-section" class="section">
					<div class="wrapper">
						<div class="cycle-slideshow"
							data-cycle-log="false"
							data-cycle-pause-on-hover="true"
							data-cycle-swipe="true"
							data-cycle-auto-height=container
							data-cycle-fx="' . esc_attr( $transition_effect ) . '"
							data-cycle-speed="' . esc_attr( $transition_length * 1000 ) . '"
							data-cycle-timeout="' . esc_attr( $transition_delay * 1000 ) . '"
							data-cycle-loader=false
							data-cycle-slides="> article"
							>

							<!-- prev/next links -->
							<button class="cycle-prev" aria-label="Previous"><span class="screen-reader-text">' . esc_html__( 'Previous Slide', 'high-responsive' ) . '</span>' . highresponsive_get_svg( array( 'icon' => 'angle-down' ) ) . '</button>
							<button class="cycle-next" aria-label="Next"><span class="screen-reader-text">' . esc_html__( 'Next Slide', 'high-responsive' ) . '</span>' . highresponsive_get_svg( array( 'icon' => 'angle-down' ) ) . '</button>


							<!-- empty element for pager links -->
							<div class="cycle-pager"></div>';

			$output .= highresponsive_post_page_category_slider();

			$output .= '
						</div><!-- .cycle-slideshow -->
					</div><!-- .wrapper -->
				</div><!-- #feature-slider -->';

			echo $output;
		} // End if().
	}
	endif;
add_action( 'highresponsive_slider', 'highresponsive_featured_slider', 10 );


if ( ! function_exists( 'highresponsive_post_page_category_slider' ) ) :
	/**
	 * This function to display featured posts/page/category slider
	 *
	 * @param $options: highresponsive_theme_options from customizer
	 *
	 * @since High Responsive 1.0
	 */
	function highresponsive_post_page_category_slider() {
		$quantity     = get_theme_mod( 'highresponsive_slider_number', 4 );
		$no_of_post   = 0; // for number of posts
		$post_list    = array();// list of valid post/page ids
		$output     = '';

		$args = array(
			'post_type'           => 'page',
			'orderby'             => 'post__in',
			'ignore_sticky_posts' => 1, // ignore sticky posts
		);

		//Get valid number of posts
		for ( $i = 1; $i <= $quantity; $i++ ) {
			$post_id = get_theme_mod( 'highresponsive_slider_page_' . $i );

			if ( $post_id && '' !== $post_id ) {
				$post_list = array_merge( $post_list, array( $post_id ) );

				$no_of_post++;
			}
		}

		$args['post__in'] = $post_list;

		if ( ! $no_of_post ) {
			return;
		}

		$args['posts_per_page'] = $no_of_post;

		$loop = new WP_Query( $args );

		while ( $loop->have_posts() ) :
			$loop->the_post();

			$title_attribute = the_title_attribute( 'echo=0' );

			if ( 0 === $loop->current_post ) {
				$classes = 'post post-' . esc_attr( get_the_ID() ) . ' hentry slides displayblock';
			} else {
				$classes = 'post post-' . esc_attr( get_the_ID() ) . ' hentry slides displaynone';
			}

			// Default value if there is no featurd image or first image.
			$image_url = trailingslashit( esc_url ( get_template_directory_uri() ) ) . 'assets/images/no-thumb-1920x1080.jpg';

			if ( has_post_thumbnail() ) {
				$image_url = get_the_post_thumbnail_url( get_the_ID(), 'highresponsive-slider' );
			} else {
				// Get the first image in page, returns false if there is no image.
				$first_image_url = highresponsive_get_first_image( get_the_ID(), 'highresponsive-slider', '', true );

				// Set value of image as first image if there is an image present in the page.
				if ( $first_image_url ) {
					$image_url = $first_image_url;
				}
			}

			$output .= '
			<article class="' . $classes . '">';
				$output .= '
				<div class="slider-image-wrapper">
					<a href="' . esc_url( get_permalink() ) . '" title="' . $title_attribute . '">
							<img src="' . esc_url( $image_url ) . '" class="wp-post-image" alt="' . $title_attribute . '">
						</a>
				</div><!-- .slider-image-wrapper -->

				<div class="slider-content-wrapper">
					<div class="entry-container">
						<header class="entry-header">
							<h2 class="entry-title">
								<a title="' . $title_attribute . '" href="' . esc_url( get_permalink() ) . '">' . the_title( '<span>','</span>', false ) . '</a>
							</h2>
						</header>

						<div class="entry-summary">
							<p>' . get_the_excerpt() . '</p>
						</div><!-- .entry-summary -->
					</div><!-- .entry-container -->
				</div><!-- .slider-content-wrapper -->
			</article><!-- .slides -->';
		endwhile;

		wp_reset_postdata();

		return $output;
	}
endif; // highresponsive_post_page_category_slider.

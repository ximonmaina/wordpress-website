<?php
/**
 * The template for displaying Services
 *
 * @package High_Responsive
 */



if ( ! function_exists( 'highresponsive_service_display' ) ) :
	/**
	* Add Featured content.
	*
	* @uses action hook highresponsive_before_content.
	*
	* @since High Responsive 1.0
	*/
	function highresponsive_service_display() {
		$output = '';

		// get data value from options
		$enable_content = get_theme_mod( 'highresponsive_service_option', 'disabled' );

		if ( highresponsive_check_section( $enable_content ) ) {
			$layout        	= 'layout-two';
			$headline       = get_theme_mod( 'highresponsive_service_headline', esc_html__( 'Services', 'high-responsive' ) );
			$subheadline    = get_theme_mod( 'highresponsive_service_subheadline' );
			$main_image     = get_theme_mod( 'highresponsive_service_main_image' );

			$classes[] = 'section';
			if ( $main_image ) {
				$classes[] = 'has-main-image';
			}

			$output = '
				<div id="service-section" class="' . esc_attr( implode( ' ', $classes ) ) . '">
					<div class="wrapper">';

			// Service Main Image.
			if ( $main_image = get_theme_mod( 'highresponsive_service_main_image' ) ) {

				$thumbnail_url = wp_get_attachment_image_src($main_image, 'full', true );
				$output .= '<div class="main-image post-thumbnail" style="background-image: url( ' . esc_url( $thumbnail_url[0] ) . ' )">';

				if ( $image_link = get_theme_mod( 'highresponsive_service_main_image_link' ) ) {
					$output .= '<a class="cover-link" href="' . esc_url( $image_link ) . '" target="' . esc_attr( get_theme_mod( 'highresponsive_service_main_image_target' ) ? '_blank' : '_self' ) . '"></a>';
				}

				$output .= '
				</div><!-- .main-image.post-thumbnail -->';
			}

			$output .= '<div class="service-content-area ' . esc_attr( $layout ) . '">';

			if ( ! empty( $headline ) || ! empty( $subheadline ) ) {
				$output .= '<div class="section-heading-wrap service-section-headline">';

				if ( ! empty( $headline ) ) {
					$output .= '<div class="section-title-wrapper"><h2 class="section-title">' . wp_kses_post( $headline ) . '</h2></div>';
				}

				if ( ! empty( $subheadline ) ) {
					$output .= '<div class="taxonomy-description-wrapper">' . wp_kses_post( $subheadline ) . '</div>';
				}

				$output .= '
				</div><!-- .section-heading-wrap -->';
			}
			$output .= '
				<div class="service-content-wrapper ' . esc_attr( $layout ) . '">';

			$output .= highresponsive_post_page_category_service();

			$output .= '
						</div><!-- .service-wrapper -->
					</div><!-- .service-content-area -->
				</div><!-- .wrapper -->
			</div><!-- #service-section -->';

		}

		echo $output;
	}
endif;
add_action( 'highresponsive_service', 'highresponsive_service_display', 10 );


if ( ! function_exists( 'highresponsive_post_page_category_service' ) ) :
	/**
	 * This function to display featured posts content
	 *
	 * @param $options: highresponsive_theme_options from customizer
	 *
	 * @since High Responsive 1.0
	 */
	function highresponsive_post_page_category_service() {
		global $post;

		$quantity   = get_theme_mod( 'highresponsive_service_number', 4 );
		$no_of_post = 0; // for number of posts
		$post_list  = array();// list of valid post/page ids
		$type       = get_theme_mod( 'highresponsive_service_type', 'category' );
		$output     = '';

		$args = array(
			'orderby'             => 'post__in',
			'ignore_sticky_posts' => 1 // ignore sticky posts
		);

		$args['post_type'] = 'ect-service';

		for ( $i = 1; $i <= $quantity; $i++ ) {
			$post_id = '';

			$post_id = get_theme_mod( 'highresponsive_service_cpt_' . $i );

			if ( $post_id && '' !== $post_id ) {
				// Polylang Support.
				if ( class_exists( 'Polylang' ) ) {
					$post_id = pll_get_post( $post_id, pll_current_language() );
				}

				$post_list = array_merge( $post_list, array( $post_id ) );

				$no_of_post++;
			}
		}

		$args['post__in'] = $post_list;

		if ( 0 === $no_of_post ) {
			return;
		}

		$args['posts_per_page'] = $no_of_post;

		$loop     = new WP_Query( $args );

		while ( $loop->have_posts() ) {
			$loop->the_post();

			$title_attribute = the_title_attribute( 'echo=0' );

			$i = absint( $loop->current_post + 1 );

			$output .= '
				<article id="service-post-' . $i . '" class="status-publish has-post-thumbnail hentry ' . esc_attr( $type ) . '">';

				// Default value if there is no first image
				$image = '<img class="wp-post-image" src="' .  trailingslashit( esc_url( get_template_directory_uri() ) ) . 'assets/images/no-thumb.jpg" >';

				if ( has_post_thumbnail() ) {
					$image = get_the_post_thumbnail( $post->ID, 'thumbnail', array( 'title' => $title_attribute, 'alt' => $title_attribute ) );
				}
				else {
					// Get the first image in page, returns false if there is no image.
					$first_image = highresponsive_get_first_image( $post->ID, 'thumbnail', array( 'title' => $title_attribute, 'alt' => $title_attribute ) );

					// Set value of image as first image if there is an image present in the page.
					if ( $first_image ) {
						$image = $first_image;
					}
				}

				$output .= '
					<a class="post-thumbnail" href="' . esc_url( get_permalink() ) . '" title="' . $title_attribute . '">
						'. $image . '
					</a>
					<div class="entry-container">
						' . the_title( '<header class="entry-header"><h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2></header><!-- .entry-header -->', false ) . '

						<div class="entry-summary">
							<p>' . get_the_excerpt() . '</p>
						</div><!-- .entry-summary -->
					</div><!-- .entry-container -->
				</article><!-- .featured-post-' . $i . ' -->';
			} //endwhile

		wp_reset_postdata();

		return $output;
	}
endif; // highresponsive_post_page_category_service

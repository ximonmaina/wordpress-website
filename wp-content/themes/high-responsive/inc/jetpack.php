<?php
/**
 * Jetpack Compatibility File
 *
 * @link https://jetpack.me/
 *
 * @package High_Responsive
 */

/**
 * Jetpack setup function.
 *
 * See: https://jetpack.me/support/infinite-scroll/
 * See: https://jetpack.me/support/responsive-videos/
 */
function highresponsive_jetpack_setup() {
	/**
	 * Setup Infinite Scroll using JetPack if navigation type is set
	 */
	$pagination_type = get_theme_mod( 'highresponsive_pagination_type', 'default' );

	if ( 'infinite-scroll' === $pagination_type ) {
		add_theme_support( 'infinite-scroll', array(
			'container'      => 'main',
			'wrapper'        => false,
			'render'         => 'highresponsive_infinite_scroll_render',
			'footer'         => false,
			'footer_widgets' => array( 'sidebar-2', 'sidebar-3', 'sidebar-4' ),
		) );
	}

	// Add theme support for Responsive Videos.
	add_theme_support( 'jetpack-responsive-videos' );

	// Add theme support for JetPack Portfolio.
	add_theme_support( 'jetpack-portfolio', array(
		'title'          => true,
		'content'        => true,
		'featured-image' => true,
	) );

	// Add theme support for testimonials.
	add_theme_support( 'jetpack-testimonial' );
}
add_action( 'after_setup_theme', 'highresponsive_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function highresponsive_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		if ( is_search() ) :
			get_template_part( 'template-parts/content/content', 'search' );
		else :
			get_template_part( 'template-parts/content/content', get_post_format() );
		endif;
	}
}

/**
 * Portfolio Title
 *
 * @param  string $before before title content.
 * @param  string $after after title content.
 */
function highresponsive_portfolio_title( $before = '', $after = '' ) {
	get_option( 'jetpack_portfolio_title', esc_html__( 'Projects', 'high-responsive' ) );
	$title = '';

	if ( is_post_type_archive( 'jetpack-portfolio' ) ) {
		if ( isset( $jetpack_portfolio_title ) && '' !== $jetpack_portfolio_title ) {
			$title = $jetpack_portfolio_title;
		} else {
			$title = post_type_archive_title( '', false );
		}
	} elseif ( is_tax( 'jetpack-portfolio-type' ) || is_tax( 'jetpack-portfolio-tag' ) ) {
		$title = single_term_title( '', false );
	}

	$title = $before . $title . $after;

	echo $title;
}

/**
 * Portfolio Content
 *
 * @param  string $before before title content.
 * @param  string $after after title content.
 */
function highresponsive_portfolio_content( $before = '', $after = '' ) {
	$jetpack_portfolio_content = get_option( 'jetpack_portfolio_content' );
	$title = '';

	if ( is_tax() && get_the_archive_description() ) {
		$title = $before . get_the_archive_description() . $after;
	} elseif ( isset( $jetpack_portfolio_content ) && '' !== $jetpack_portfolio_content ) {
		$content = convert_chars( convert_smilies( wptexturize( stripslashes( wp_kses_post( addslashes( $jetpack_portfolio_content ) ) ) ) ) );
		$title = $before . $content . $after;
	}

	echo $title;
}

/**
 * Support JetPack featured content
 */
function highresponsive_get_featured_posts() {
	$number = get_theme_mod( 'highresponsive_featured_content_number', 3 );

	$post_list    = array();

	$args = array(
		'posts_per_page'      => $number,
		'post_type'           => 'featured-content',
		'ignore_sticky_posts' => 1, // ignore sticky posts.
	);

	// Get valid number of posts.
	for ( $i = 1; $i <= $number; $i++ ) {
		$post_id = get_theme_mod( 'highresponsive_featured_content_cpt_' . $i );

		if ( $post_id && '' !== $post_id ) {
			$post_list = array_merge( $post_list, array( $post_id ) );
		}
	}

	if ( empty ( $post_list ) ) {
		return false;
	}

	$args['post__in'] = $post_list;
	$args['orderby']  = 'post__in';

	$featured_posts = get_posts( $args );

	return $featured_posts;
}

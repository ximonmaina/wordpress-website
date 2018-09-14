<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Onepage
 */

if ( ! function_exists( 'igthemes_posts_navigation' ) ) :
/**
 * Display numeric pagination.
 */
function igthemes_posts_navigation() {
    echo '<div class="pagination">';
    if (get_theme_mod('numeric_pagination')) {
        if (function_exists('wp_pagenavi') ) {
            wp_pagenavi();
        } else {
        // Don't print empty markup if there's only one page.
        if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
            return;
        }
        ?>
        <?php global $wp_query; // pagination
            $big = 999999999; // need an unlikely integer

        echo paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'type'    => 'list',
            'prev_next'    => True,
            'prev_text'    => esc_html__('&#8592;', 'onepage'),
            'next_text'    => esc_html__('&#8594;', 'onepage'),
            'total' => $wp_query->max_num_pages
        ) ); ?>

    <?php }// end pagination
    } else {
        the_posts_navigation(array(
            'prev_text'          => __( 'Previous','onepage' ),
            'next_text'          => __( 'Next','onepage' ),
        ));
    }
    echo "</div>";
}
endif;

if ( ! function_exists( 'igthemes_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function igthemes_posted_on() {
    //AUTHOR
    $byline = sprintf(
          esc_html_x( apply_filters('igthemes-author','igthemes-author-text') . '%s', 'post author', 'onepage' ),
          '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>'
    );
    //TIME
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);

	$posted_on = sprintf(
		esc_html_x( apply_filters('igthemes_date', 'igthemes_date_text') . '%s', 'post date', 'onepage' ),
		'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);
    //RETURN
    if ( apply_filters( 'igthemes_post_date', true ) ) :
	    echo '<span class="posted-on">' . $posted_on . '</span>';
    endif;
    if ( apply_filters( 'igthemes_post_author', true ) ) :
        echo '<span class="byline"> ' . $byline . '</span>'; // WPCS: XSS OK.
    endif;
    //commnet
    if ( ! is_single() && ! post_password_required() && ( comments_open() || get_comments_number() ) && apply_filters( 'igthemes_post_comments_link', true ) ) {
		echo '<span class="comments-link">';
		/* translators: %s: post title */
		comments_popup_link( sprintf( wp_kses( __( 'Leave a comment<span class="screen-reader-text"> on %s</span>', 'onepage' ), array( 'span' => array( 'class' => array() ) ) ), get_the_title() ) );
		echo '</span>';
	}
}
endif;

if ( ! function_exists( 'igthemes_entry_footer' ) ) :
/**
 * Prints HTML with meta information for the categories, tags and comments.
 */
function igthemes_entry_footer() {
	// Hide category and tag text for pages.
	if ( 'post' === get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$categories_list = get_the_category_list( esc_html__( ', ', 'onepage' ) );
		if ( $categories_list && igthemes_categorized_blog() && apply_filters( 'igthemes_post_cat', true ) ) {
			printf( '<span class="cat-links">' . esc_html__( apply_filters('igthemes_cat_links', 'igthemes-cat-text') . '%1$s', 'onepage' ) . '</span>', $categories_list ); // WPCS: XSS OK.
		}

		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'onepage' ));
		if ( $tags_list && apply_filters( 'igthemes_post_tags', true ) ) {
			printf( '<span class="tags-links">' . esc_html__( apply_filters('igthemes_tags_links', 'igthemes-tags-text') . '%1$s', 'onepage' ) . '</span>', $tags_list ); // WPCS: XSS OK.
		}
	}
    //edit link
    edit_post_link(
		sprintf(
			/* translators: %s: Name of current post */
			esc_html__( 'Edit %s', 'onepage' ),
			the_title( '<span class="screen-reader-text">"', '"</span>', false )
		),
		'<span class="edit-link">',
		'</span>'
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function igthemes_categorized_blog() {
	if ( false === ( $all_the_cool_cats = get_transient( 'igthemes_categories' ) ) ) {
		// Create an array of all the categories that are attached to posts.
		$all_the_cool_cats = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $all_the_cool_cats );

		set_transient( 'igthemes_categories', $all_the_cool_cats );
	}

	if ( $all_the_cool_cats > 1 ) {
		// This blog has more than 1 category so igthemes_categorized_blog should return true.
		return true;
	} else {
		// This blog has only 1 category so igthemes_categorized_blog should return false.
		return false;
	}
}

/**
 * Flush out the transients used in igthemes_categorized_blog.
 */
function igthemes_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'igthemes_categories' );
}
add_action( 'edit_category', 'igthemes_category_transient_flusher' );
add_action( 'save_post',     'igthemes_category_transient_flusher' );

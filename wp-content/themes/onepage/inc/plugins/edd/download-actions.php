<?php
/*-----------------------------------------------------------------
 * SINGLE POST
-----------------------------------------------------------------*/
add_action( 'igthemes_single_download', 'igthemes_download_header', 10 );
add_action( 'igthemes_single_download', 'igthemes_download_content', 20 );
add_action( 'igthemes_single_download', 'igthemes_download_footer', 30 );

/*-----------------------------------------------------------------
 * POST HEADER
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_download_header' ) ) {
	// start function
    function igthemes_download_header() { ?>

 	  <header class="entry-header">
		<?php
			if ( is_single() ) {
                
                echo igthemes_breadcrumb();

				the_title( '<h1 class="entry-title">', '</h1>' );
                
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		; ?>
        <div class="entry-meta">
			<?php igthemes_posted_on(); ?>
		</div><!-- .entry-meta -->
	   </header><!-- .entry-header -->
   <?php }
}
/*-----------------------------------------------------------------
 * POST CONTENT
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_download_content' ) ) {
	// start function
	function igthemes_download_content() { 
            
        if ( is_single() ) { ?>

		<div class="entry-content">
        <?php
            igthemes_post_thumbnail( 'full' );

            the_content( sprintf(
                /* translators: %s: Name of current post. */
                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'onepage' ), array( 'span' => array( 'class' => array() ) ) ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'onepage' ),
                'after'  => '</div>',
            ) );
        ?>
		</div><!-- .entry-content -->
		<?php } else { ?>
        <div class="entry-content">
        <?php
            igthemes_download_thumbnail( 'full' );

            the_excerpt( );
        ?>
		</div><!-- .entry-content -->
    <?php   } 
    }
}
/*-----------------------------------------------------------------
 * POST FOOTER
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_download_footer' ) ) {
	// start function
	function igthemes_download_footer() { 
        //open entry-footer
        if ( has_term('','download_category' ) || has_term('','download_tag' ) ) :
	       echo '<footer class="entry-footer">';
        endif;
        //show categories
        if (has_term('','download_category' )) :
            echo '<span class="cat-links">';
                the_terms( get_the_id(), 'download_category', '<span class="title">Categories:</span>', ', ', '' );
            echo '</span>';
        endif;
        //sow tags
        if (has_term('','download_tag' )) :
            echo '<span class="tag-links">';
                the_terms( get_the_id(), 'download_tag', '<span class="title">Tags:</span> ', ', ', '' );
            echo '</span>';
        endif;
        //close ntry-footer
        if ( has_term('','download_category' ) || has_term('','download_tag' ) ) :
	       echo '</footer>';
        endif;
    }
}
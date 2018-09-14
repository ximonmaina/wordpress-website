<?php
/*-----------------------------------------------------------------
 * SINGLE POST
-----------------------------------------------------------------*/
add_action( 'igthemes_loop', 'igthemes_item_image', 10 );
add_action( 'igthemes_loop', 'igthemes_item_header', 20 );
add_action( 'igthemes_loop', 'igthemes_item_content', 30 );
add_action( 'igthemes_loop', 'igthemes_item_footer', 40 );

/*-----------------------------------------------------------------
 * POST HEADER
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_item_header' ) ) {
	// start function
    function igthemes_item_header() { ?>

 	  <header class="entry-header">
		<?php
        
        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

		if ( 'post' === get_post_type() ) : ?>
        <div class="entry-meta"><?php igthemes_posted_on(); ?></div><!-- .entry-meta -->
		<?php
		endif; ?>
          
	   </header><!-- .entry-header -->
   <?php }
}
/*-----------------------------------------------------------------
 * POST IMAGE
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_item_image' ) ) {
	// start function
	function igthemes_item_image() {  ?>

		<div class="entry-image">
        <?php
            if ( get_theme_mod('main_featured_images', 1 ) == 1) {
                igthemes_post_thumbnail( 'full' );
            }
        ?>
		</div><!-- .entry-image -->

    <?php  } 
}
/*-----------------------------------------------------------------
 * POST CONTENT
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_item_content' ) ) {
	// start function
	function igthemes_item_content() {  ?>

		<div class="entry-content">
        <?php
            if (get_theme_mod('main_post_content', 0 ) == 0 && !is_singular())  { 
                the_excerpt();
            } else {
            the_content( sprintf(
                /* translators: %s: Name of current item. */
                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'onepage' ), array( 'span' => array( 'class' => array() ) ) ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'onepage' ),
                'after'  => '</div>',
            ) );
            }
        ?>
		</div><!-- .entry-content -->

    <?php  } 
}

/*-----------------------------------------------------------------
 * POST FOOTER
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_item_footer' ) ) {
	// start function
	function igthemes_item_footer() { ?>
	<footer class="entry-footer"><?php igthemes_entry_footer(); ?></footer><!-- .entry-footer -->
<?php }
}
<?php
/*-----------------------------------------------------------------
 * SINGLE POST
-----------------------------------------------------------------*/
add_action( 'igthemes_single_post', 'igthemes_post_image', 10 );
add_action( 'igthemes_single_post', 'igthemes_post_header', 20 );
add_action( 'igthemes_single_post', 'igthemes_post_content', 30 );
add_action( 'igthemes_single_post', 'igthemes_post_footer', 40 );

/*-----------------------------------------------------------------
 * POST HEADER
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_post_header' ) ) {
	// start function
    function igthemes_post_header() { ?>
    <header class="entry-header">
		<?php
        the_title( '<h1 class="entry-title">', '</h1>' );
		if ( 'post' === get_post_type() ) : ?>
		  <div class="entry-meta"><?php igthemes_posted_on(); ?></div><!-- .entry-meta -->
		<?php endif; ?>
    </header><!-- .entry-header -->
   <?php }
}
/*-----------------------------------------------------------------
 * POST IMAGE
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_post_image' ) ) {
	// start function
	function igthemes_post_image() {  ?>
		<div class="entry-image">
        <?php igthemes_post_thumbnail( 'full' ); ?>
		</div><!-- .entry-image -->
    <?php  } 
}
/*-----------------------------------------------------------------
 * POST CONTENT
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_post_content' ) ) {
	// start function
	function igthemes_post_content() {  ?>

		<div class="entry-content">
        <?php
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

    <?php  } 
}

/*-----------------------------------------------------------------
 * POST FOOTER
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_post_footer' ) ) {
	// start function
	function igthemes_post_footer() { ?>
	<footer class="entry-footer"><?php igthemes_entry_footer(); ?></footer><!-- .entry-footer -->
<?php }
}
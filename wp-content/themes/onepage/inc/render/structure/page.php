<?php
/*----------------------------------------------------------------
 * SINGLE PAGE
-----------------------------------------------------------------*/
add_action( 'igthemes_single_page', 'igthemes_page_header', 20 );
add_action( 'igthemes_single_page', 'igthemes_page_image', 10 );
add_action( 'igthemes_single_page', 'igthemes_page_content', 30 );
add_action( 'igthemes_single_page', 'igthemes_page_footer', 40 );

/*----------------------------------------------------------------
 * PAGE HEADER
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_page_header' ) ) {
	// start function
    function igthemes_page_header() { ?>

    <header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <div class="entry-meta">
            <?php igthemes_posted_on(); ?>
        </div><!-- .entry-meta -->
	</header><!-- .entry-header -->

   <?php }
}
/*----------------------------------------------------------------
 * PAGE IMAGE
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_page_image' ) ) {
	// start function
	function igthemes_page_image() { ?>
		<div class="entry-image">
            <?php igthemes_post_thumbnail( 'full' ); ?>
        </div>
    <?php }
}
/*----------------------------------------------------------------
 * PAGE CONTENT
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_page_content' ) ) {
	// start function
	function igthemes_page_content() { ?>
		<div class="entry-content">
        <?php
        
			the_content();

				wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'onepage' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span class="num">',
                'link_after'  => '</span>',
	       ) );
		?>
		</div><!-- .entry-content -->
<?php }
}

/*----------------------------------------------------------------
 * PAGE FOOTER
-----------------------------------------------------------------*/
if ( ! function_exists( 'igthemes_page_footer' ) ) {
	// start function
	function igthemes_page_footer() { ?>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'onepage' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
<?php }
}

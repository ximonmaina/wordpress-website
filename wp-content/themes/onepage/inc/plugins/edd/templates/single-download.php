<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Onepage
 */

get_header(); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main focus" role="main">

        <?php while ( have_posts() ) : the_post(); ?>
            
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php 
                do_action( 'igthemes_single_download' );
                the_post_navigation( array(
                    'next_text' => __( 'Next', 'onepage' ),
                    'prev_text' => __( 'Previous', 'onepage' ),
                ));
                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;
                endwhile; // End of the loop.
            ?>
            </article>
            
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar('shop');
get_footer();
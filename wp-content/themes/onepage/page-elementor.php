<?php 

/**
 * The template for displaying full width pages.
 *
 * Template Name: Elementor
 *
 * @package Onepage
 */

get_header(); ?>

    <div id="primary" class="elementor-content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

            echo '<div class="elementor-entry-content">';
            if ( is_plugin_active( 'elementor/elementor.php' ) ) {
			     the_content();
            } else {
                echo '<div style="text-align:center; padding:25px;">';
                    esc_html_e('Use the Elementor plugin for this page template','onepage');
                echo '</div>';
            }
            echo '</div>';

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();

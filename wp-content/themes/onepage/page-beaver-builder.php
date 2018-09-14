<?php 

/**
 * The template for displaying full width pages.
 *
 * Template Name: Beaver Builder
 *
 * @package Onepage
 */

get_header(); ?>

    <div id="primary" class="bb-content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

            echo '<div class="bb-entry-content">';
            if ( is_plugin_active( 'beaver-builder-lite-version/fl-builder.php' ) || is_plugin_active( 'bb-plugin/fl-builder.php' ) ) {
			     the_content();
            } else {
                echo '<div style="text-align:center; padding:25px;">';
                    esc_html_e('Use the Beaver Builder plugin for this page template','onepage');
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

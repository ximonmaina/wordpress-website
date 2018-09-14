<?php
/**
 * The template for displaying all woocommece pages.
 *
 * @package Onepage
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
                  woocommerce_content();
            ?>
        </main><!-- #main -->
    </div><!-- #primary -->
<?php
/**
 * @hooked igthemes_woocommerce_sidebar 10
 */
get_sidebar('shop');
get_footer();

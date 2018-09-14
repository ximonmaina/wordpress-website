<?php
/**
 * download archive template
 *
 * @package Onepage
 */
get_header(); ?>

    <header class="page-header">
        <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="taxonomy-description">', '</div>' );
        ?>
    </header><!-- .page-header -->

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="edd_downloads_list edd_download_columns_3">
            <?php if ( have_posts() ) :
            /* Start the Loop */
             while ( have_posts() ) : the_post(); ?>
                <div itemscope itemtype="http://schema.org/Product" class="edd_download" id="edd_download_<?php echo get_the_ID(); ?>">
                    <div class="edd_download_inner">
                        <?php
                            /**
                             * These are the same template files used by the [downloads] shortcode.
                             * So making adjustments to those template files will affect this archive
                             * as well as the [downloads] shortcode.
                             *
                             * To make adjustments specifically to archive template download output,
                             * grab the contents of the relevant template file and put it in place of the
                             * appropriate call below that way your changes are focused here and not the
                             * [downloads] shortcode... unless that's what you want.
                             */
                            edd_get_template_part( 'shortcode', 'content-image' );
                            edd_get_template_part( 'shortcode', 'content-title' );
                            edd_get_template_part( 'shortcode', 'content-excerpt' );
                            edd_get_template_part( 'shortcode', 'content-price' );
                            edd_get_template_part( 'shortcode', 'content-cart-button' );
                        ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>

        <?php
            igthemes_posts_navigation();

        else :

            get_template_part( 'template-parts/content', 'none' );

        endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar('shop');
get_footer();


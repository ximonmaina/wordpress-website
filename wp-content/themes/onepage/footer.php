<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Onepage
 */

?>
    <?php
    /**
     * Functions hooked in to igthemes_content_bottom
     *
     * @hooked
     */
    do_action( 'igthemes_content_bottom' ); ?>

    </div><!-- #content -->

    <?php
    /**
     * Functions hooked in to igthemes_after_content
     *
     * @hooked
     */
    do_action( 'igthemes_after_content' ); ?>

    <footer id="colophon" class="site-footer" role="contentinfo">
       <?php
       /**
       * Functions hooked in to igthemes_before_content
       */
       do_action( 'igthemes_footer' ); ?>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

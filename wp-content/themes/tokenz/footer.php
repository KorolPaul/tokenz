<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tokenz
 */

?>

    </div><!-- #content -->

    <footer id="colophon" class="footer">
        <div class="footer_content">
            <div class="footer_section">
                <p class="footer_title"><?php _e('Subscribe for newsletter', 'tokenz') ?>:</p>
                <?php es_subbox($namefield = "NO", $desc = "", $group = "Public"); ?>
                <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>
            <div class="footer_section">
                <p class="footer_title"><?php _e('Find us on', 'tokenz') ?>:</p>
                <?php get_template_part( 'template-parts/social', 'index' ) ?>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

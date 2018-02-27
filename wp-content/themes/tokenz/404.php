<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package tokenz
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <section class="error404_wrapper not-found fw-container">
                <header class="page-header error404_header">
                    <h1 class="error404_title"><?php esc_html_e( '404', 'tokenz' ); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content error404_content">
                    <p><?php esc_html_e( 'Oh, bummer...', 'tokenz' ); ?></p>
                    <p><?php esc_html_e( 'Seems we can\'t find the page you are looking for', 'tokenz' ); ?></p>
                </div><!-- .page-content -->
            </section><!-- .error404 -->

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();

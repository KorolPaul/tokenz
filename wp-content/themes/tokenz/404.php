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

            <section class="error-404 not-found fw-container">
                <header class="page-header error-404_header">
                    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'tokenz' ); ?></h1>
                </header><!-- .page-header -->

                <div class="page-content error-404_content">
                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'tokenz' ); ?></p>

                </div><!-- .page-content -->
            </section><!-- .error-404 -->

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();

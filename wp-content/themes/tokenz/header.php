<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tokenz
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
    $page_class = 'site';

    if ( get_option( 'use_alt_bg' ) == 1 ) {
        $page_class .= ' alt-bg';
    }

    if ( get_option( 'use_parallax' ) == 1 ) {
        $page_class .= ' parallax';
    }

    if ( get_option( 'use_animation' ) == 1 ) {
        $page_class .= ' animated-bg';
    }
?>

<div id="page" class="<?php echo esc_attr($page_class) ?>">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tokenz' ); ?></a>

    <header id="masthead" class="header">
        <div class="header_content">
            <?php if ( ! is_home() && is_front_page() ) : ?>
                <?php get_template_part( 'template-parts/social', 'index' ); ?>
            <?php else: ?>
                <a class="logo" href="/"><?php echo get_bloginfo( 'name' ); ?></a>
            <?php endif;?>

            <nav id="site-navigation" class="menu-container">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'tokenz' ); ?></button>
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'menu_class'     => 'menu',
                    ) );
                ?>
            </nav><!-- #site-navigation -->
            <div class="currencies">
                <img src="<?php echo esc_url(get_option('currencies_icon')); ?>" alt="" width="100" />
            </div>
            <div class="login">
                <?php if (is_user_logged_in()) : ?>
                    <a class="login_button" href="<?php echo wp_logout_url(get_permalink()); ?>"><?php _e('Logout', 'tokenz') ?></a>
                <?php else : ?>
                    <a class="login_button" href="<?php echo wp_login_url(get_permalink()); ?>"><?php _e('Login', 'tokenz') ?></a>
                <?php endif;?>
            </div>
        </div>
    </header><!-- #masthead -->
    <?php if ( ! is_home() && is_front_page() ) : ?>
        <div class="net"></div>
    <?php endif;?>
    <div id="content" class="site-content">

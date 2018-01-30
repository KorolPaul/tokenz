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

<div id="page" class="site <?php echo get_option('alt_bg') ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tokenz' ); ?></a>

	<header id="masthead" class="header">
		<div class="header_content">
			<?php 
				get_template_part( 'template-parts/content', 'social' );
			?>

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
				<img src="<?php echo get_option('currencies_icons'); ?>" alt="" />
			</div>
			<div class="login">
				<?php if (is_user_logged_in()) : ?>
					<a class="login_button" href="<?php echo wp_logout_url(get_permalink()); ?>">Logout</a>
				<?php else : ?>
					<a class="login_button" href="<?php echo wp_login_url(get_permalink()); ?>">Investor Login</a>
				<?php endif;?>
			</div>
		</div>
	</header><!-- #masthead -->
	<div class="net"></div>
	<div id="content" class="site-content">

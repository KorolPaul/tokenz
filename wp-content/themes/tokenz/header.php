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
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'tokenz' ); ?></a>

	<header id="masthead" class="header">
		<?php 
			get_template_part( 'template-parts/content', 'social' );
		?>
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

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
			<?php echo get_option('logo'); ?>
		</div>
		<div class="net">
			<img class="net_left" src="<?php echo get_site_url(). "/wp-content/themes/tokenz/src/img/net-left.svg" ?>" alt=""/>
			<img class="net_right" src="<?php echo get_site_url(). "/wp-content/themes/tokenz/src/img/net-right.svg" ?>" alt=""/>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

<?php if (!defined('FW')) die('Forbidden');

$manifest = array();

/**
 * An unique id to identify your theme
 * For e.g. this is used to store Theme Settings in wp_option 'fw_theme_settings_options:{theme_id}'
 */
$manifest['id'] = get_option( 'stylesheet' );

/**
 * Specify extensions that you customized, that will look good and work well with your theme.
 * After plugin activation, the user will be redirected to a page to install these extensions.
 */
$manifest['supported_extensions'] = array(
    'page-builder' => array(),
);

$manifest['requirements'] = array(
    'page-builder' => array(
        'extension_name' => array(
            'min_version' => '1.0.0',
        ),
    )
);

// These keys are automatically fetched from theme styles.css
//$manifest['name'] = __('Theme Title', '{domain}');
//$manifest['description'] = __('Another awesome wordpress theme', '{domain}');
//$manifest['uri'] = 'http://themefuse.com/wp-themes-shop/theme-name';
//$manifest['version'] = '1.0';
//$manifest['author'] = 'ThemeFuse';
//$manifest['author_uri'] = 'http://themefuse.com/';

<?php
/**
 * tokenz functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tokenz
 */

if ( ! function_exists( 'tokenz_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function tokenz_setup() {
        /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on tokenz, use a find and replace
        * to change 'tokenz' to the name of your theme in all the template files.
        */
        load_theme_textdomain( 'tokenz', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
        add_theme_support( 'title-tag' );

        /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'menu-1' => esc_html__( 'Primary', 'tokenz' ),
        ) );

        /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Set up the WordPress core custom background feature.
        add_theme_support( 'custom-background', apply_filters( 'tokenz_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        ) ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support( 'custom-logo', array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        ) );
    }
endif;
add_action( 'after_setup_theme', 'tokenz_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tokenz_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'tokenz_content_width', 640 );
}
add_action( 'after_setup_theme', 'tokenz_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tokenz_widgets_init() {
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'tokenz' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'tokenz' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer sidebar', 'tokenz' ),
        'id'            => 'sidebar-2',
        'description'   => esc_html__( 'Add widgets here.', 'tokenz' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'tokenz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tokenz_scripts() {
    wp_enqueue_style( 'tokenz-style', get_stylesheet_uri() );

    wp_enqueue_script( 'tokenz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    wp_enqueue_script( 'tokenz-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    wp_enqueue_script( 'tokenz-slick', get_template_directory_uri() . '/js/slick.js', array(), '20180115', true );

    wp_enqueue_script( 'tokenz-slider', get_template_directory_uri() . '/js/slider.js', array(), '20180115', true );


    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'tokenz_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * TGM plugin.
 */
require_once get_template_directory() . '/tgm/plugins.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

add_filter( 'get_the_archive_title', 'tokenz_remove_name_cat' );
function tokenz_remove_name_cat( $title ){
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	}
	return $title;
}

add_filter('comment_form_fields', 'tokenz_reorder_comment_fields' );
function tokenz_reorder_comment_fields( $fields ){
	$new_fields = array();

	$myorder = array('author','email','comment','url');

	foreach( $myorder as $key ){
		$new_fields[ $key ] = $fields[ $key ];
		unset( $fields[ $key ] );
	}

	if( $fields )
		foreach( $fields as $key => $val )
			$new_fields[ $key ] = $val;

	return $new_fields;
}

/**
 * Create custom theme fields
 */
function tokenz_add_theme_menu_item()
{
    add_theme_page("Tokenz Settings", "Tokenz Settings", "manage_options", "tokenz-panel", "tokenz_theme_settings_page", null, 60);
}

add_action("admin_menu", "tokenz_add_theme_menu_item");

function tokenz_theme_settings_page()
{
    ?>
        <div class="wrap">
            <h1><?php _e('Tokenz Settings', 'tokenz') ?></h1>
            <form method="post" action="options.php" enctype="multipart/form-data">
                <?php
                    settings_fields("social");
                    settings_fields("layout");
                    do_settings_sections("layout-options");
                    do_settings_sections("social-options");
                    submit_button();
                ?>
            </form>
        </div>
    <?php
}

function tokenz_display_bg_element()
{
    ?>
        <input name="use_alt_bg" id="use_alt_bg" type="checkbox" class="code" value="1" <?php checked( "1", get_option( 'use_alt_bg' ) ) ?> />
    <?php
}

function tokenz_display_animation_element()
{
    ?>
        <input name="use_animation" id="use_animation" type="checkbox" class="code" value="1" <?php checked( "1", get_option( 'use_animation' ) ) ?> />
    <?php
}

function tokenz_display_parallax_elementt()
{
    ?>
        <input name="use_parallax" id="use_parallax" type="checkbox" class="code" value="1" <?php checked( "1", get_option( 'use_parallax' ) ) ?> />
    <?php
}

function tokenz_display_instagram_element()
{
    ?>
        <input type="text" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url'); ?>" />
    <?php
}

function tokenz_display_twitter_element()
{
    ?>
        <input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function tokenz_display_facebook_element()
{
    ?>
        <input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function tokenz_display_skype_element()
{
    ?>
        <input type="text" name="skype_url" id="skype_url" value="<?php echo get_option('skype_url'); ?>" />
    <?php
}

function tokenz_display_slack_element()
{
    ?>
        <input type="text" name="slack_url" id="slack_url" value="<?php echo get_option('slack_url'); ?>" />
    <?php
}

function tokenz_display_linkedin_element()
{
    ?>
        <input type="text" name="linkedin_url" id="linkedin_url" value="<?php echo get_option('linkedin_url'); ?>" />
    <?php
}

function tokenz_display_medium_element()
{
    ?>
        <input type="text" name="medium_url" id="medium_url" value="<?php echo get_option('medium_url'); ?>" />
    <?php
}

function tokenz_display_snapchat_element()
{
    ?>
        <input type="text" name="snapchat_url" id="snapchat_url" value="<?php echo get_option('snapchat_url'); ?>" />
    <?php
}

function tokenz_display_youtube_element()
{
    ?>
        <input type="text" name="youtube_url" id="youtube_url" value="<?php echo get_option('youtube_url'); ?>" />
    <?php
}

function currencies_display()
{
    ?>
        <input type="file" name="currencies_icon" />
        <img alt="" src="<?php echo get_option('currencies_icon') ?>" style="max-width: 100px; display: block"/>
<?php
}

function handle_icons_upload()
{
    if (!empty($_FILES["currencies_icon"]["tmp_name"]))
    {
        $urls = wp_handle_upload($_FILES["currencies_icon"], array('test_form' => FALSE));
        $temp = $urls["url"];
        return $temp;
    }
}

function tokenz_display_theme_panel_fields()
{
    add_settings_section("layout", "Layout options", null, "layout-options");
    add_settings_field("use_alt_bg", "Alternate background", "tokenz_display_bg_element", "layout-options", "layout");
    add_settings_field("use_animation", "Enable background animation", "tokenz_display_animation_element", "layout-options", "layout");
    add_settings_field("use_parallax", "Enable parallax effect", "tokenz_display_parallax_elementt", "layout-options", "layout");
    add_settings_field("currencies_icon", "Currencies icon", "currencies_display", "layout-options", "layout");
    register_setting("layout", "use_alt_bg");
    register_setting("layout", "use_animation");
    register_setting("layout", "use_parallax");
    register_setting("layout", "currencies_icon", "handle_icons_upload");

    add_settings_section("social", "Social accounts", null, "social-options");
    add_settings_field("instagram_url", "Instagram Profile Url", "tokenz_display_instagram_element", "social-options", "social");
    add_settings_field("twitter_url", "Twitter Profile Url", "tokenz_display_twitter_element", "social-options", "social");
    add_settings_field("facebook_url", "Facebook Profile Url", "tokenz_display_facebook_element", "social-options", "social");
    add_settings_field("skype_url", "Skype Profile Url", "tokenz_display_skype_element", "social-options", "social");
    add_settings_field("slack_url", "Slack Profile Url", "tokenz_display_slack_element", "social-options", "social");
    add_settings_field("linkedin_url", "Linkedin Profile Url", "tokenz_display_linkedin_element", "social-options", "social");
    add_settings_field("medium_url", "Medium Profile Url", "tokenz_display_medium_element", "social-options", "social");
    add_settings_field("snapchat_url", "Snapchat Profile Url", "tokenz_display_snapchat_element", "social-options", "social");
    add_settings_field("youtube_url", "Youtube Profile Url", "tokenz_display_youtube_element", "social-options", "social");
    register_setting("social", "instagram_url");
    register_setting("social", "facebook_url");
    register_setting("social", "twitter_url");
    register_setting("social", "skype_url");
    register_setting("social", "slack_url");
    register_setting("social", "linkedin_url");
    register_setting("social", "medium_url");
    register_setting("social", "snapchat_url");
    register_setting("social", "youtube_url");

}


add_action("admin_init", "tokenz_display_theme_panel_fields");

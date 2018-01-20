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
}
add_action( 'widgets_init', 'tokenz_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tokenz_scripts() {
	wp_enqueue_style( 'tokenz-style', get_stylesheet_uri() );

	wp_enqueue_script( 'tokenz-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'tokenz-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

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
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Create custom theme fields
 */
function add_theme_menu_item()
{
	add_menu_page("Tokenz Panel", "Tokenz Panel", "manage_options", "tokenz-panel", "theme_settings_page", null, 99);
}

add_action("admin_menu", "add_theme_menu_item");

function theme_settings_page()
{
    ?>
	    <div class="wrap">
			<h1>Tokenz Panel</h1>
			<form method="post" action="options.php">
				<?php
					settings_fields("section");
					do_settings_sections("theme-options");      
					submit_button(); 
				?>
			</form>
		</div>
	<?php
}

function display_instagram_element()
{
	?>
    	<input type="text" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url'); ?>" />
    <?php
}

function display_twitter_element()
{
	?>
    	<input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" />
    <?php
}

function display_facebook_element()
{
	?>
    	<input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" />
    <?php
}

function display_skype_element()
{
	?>
    	<input type="text" name="skype_url" id="skype_url" value="<?php echo get_option('skype_url'); ?>" />
    <?php
}

function display_slack_element()
{
	?>
    	<input type="text" name="slack_url" id="slack_url" value="<?php echo get_option('slack_url'); ?>" />
    <?php
}

function display_linkedin_element()
{
	?>
    	<input type="text" name="linkedin_url" id="linkedin_url" value="<?php echo get_option('linkedin_url'); ?>" />
    <?php
}

function display_medium_element()
{
	?>
    	<input type="text" name="medium_url" id="medium_url" value="<?php echo get_option('medium_url'); ?>" />
    <?php
}

function display_snapchat_element()
{
	?>
    	<input type="text" name="snapchat_url" id="snapchat_url" value="<?php echo get_option('snapchat_url'); ?>" />
    <?php
}

function display_youtube_element()
{
	?>
    	<input type="text" name="youtube_url" id="youtube_url" value="<?php echo get_option('youtube_url'); ?>" />
    <?php
}

function logo_display()
{
	?>
        <input type="file" name="logo" /> 
        <?php echo get_option('logo'); ?>
   <?php
}

function display_copyright()
{
	?>
    	<input type="text" name="copyright" id="copyright" value="<?php echo get_option('copyright'); ?>" />
    <?php
}

function handle_logo_upload()
{
	if(empty($_FILES["demo-file"]["tmp_name"]))
	{
		$urls = wp_handle_upload($_FILES["logo"], array('test_form' => FALSE));
	    $temp = $urls["url"];
	    return $temp;   
	}
	  
	return $option;
}

function display_theme_panel_fields()
{
	add_settings_section("section", "All Settings", null, "theme-options");
	
    add_settings_field("instagram_url", "Instagram Profile Url", "display_instagram_element", "theme-options", "section");
	add_settings_field("twitter_url", "Twitter Profile Url", "display_twitter_element", "theme-options", "section");
    add_settings_field("facebook_url", "Facebook Profile Url", "display_facebook_element", "theme-options", "section");
    add_settings_field("skype_url", "Skype Profile Url", "display_skype_element", "theme-options", "section");
    add_settings_field("slack_url", "Slack Profile Url", "display_slack_element", "theme-options", "section");
    add_settings_field("linkedin_url", "Linkedin Profile Url", "display_linkedin_element", "theme-options", "section");
    add_settings_field("medium_url", "Medium Profile Url", "display_medium_element", "theme-options", "section");
    add_settings_field("snapchat_url", "Snapchat Profile Url", "display_snapchat_element", "theme-options", "section");
	add_settings_field("youtube_url", "Youtube Profile Url", "display_youtube_element", "theme-options", "section");
	add_settings_field("copyright", "Copyright in footer", "display_copyright", "theme-options", "section");
	
	add_settings_field("logo", "Logo", "logo_display", "theme-options", "section");  

    register_setting("section", "logo", "handle_logo_upload");

    register_setting("section", "instagram_url");
    register_setting("section", "facebook_url");
    register_setting("section", "twitter_url");
    register_setting("section", "skype_url");
    register_setting("section", "slack_url");
    register_setting("section", "linkedin_url");
    register_setting("section", "medium_url");
    register_setting("section", "snapchat_url");
	register_setting("section", "youtube_url");
	register_setting("section", "copyright");
}


add_action("admin_init", "display_theme_panel_fields");
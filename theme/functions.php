<?php
/**
 * atw functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package atw
 */

if ( ! defined( 'ATW_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ATW_VERSION', '0.1.0' );
}

if ( ! function_exists( 'atw_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function atw_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on atw, use a find and replace
		 * to change 'atw' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'atw', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __( 'Primary', 'atw' ),
				'menu-2' => __( 'Footer Menu', 'atw' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove support for block templates.
		remove_theme_support( 'block-templates' );
	}
endif;
add_action( 'after_setup_theme', 'atw_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function atw_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'atw' ),
			'id'            => 'footer',
			'description'   => __( 'Add widgets here to appear in your footer.', 'atw' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'atw_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function atw_scripts() {
	wp_enqueue_style( 'atw-style', get_stylesheet_uri(), array(), ATW_VERSION );
	wp_enqueue_script( 'atw-script', get_template_directory_uri() . '/js/script.min.js', array(), ATW_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'atw_scripts' );

/**
 * Add the block editor class to TinyMCE.
 *
 * This allows TinyMCE to use Tailwind Typography styles.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function atw_tinymce_add_class( $settings ) {
	$settings['body_class'] = 'block-editor-block-list__layout';
	return $settings;
}
add_filter( 'tiny_mce_before_init', 'atw_tinymce_add_class' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/*function atw_search_overlay() { ?>
<div id="search-overlay" class="fixed w-full h-screen top-0 left-0 z-50 bg-black/75 duration-150 ease-in-out hidden">
	<div class="flex w-full h-screen items-center text-center">
		<form action="/" method="get" class="flex w-full text-center justify-center items-center mx-12 md:w-2/4 md:mx-auto relative">
			<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" placeholder="<?php _e('Type something...', 'atw') ?>" class="bg-transparent border-b w-full focus:outline-none p-4 text-lg text-white focus:border-b focus:border-primary font-serif" />
			<span class="inline-block ml-2 absolute right-0">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-white">
					<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
				</svg>
			</span>
			<small id="search-close" class="absolute w-full py-4 top-full text-center text-white/50 hover:text-white/75 cursor-pointer tracking-widest text-xs"><?php _e('Close'); ?></small>
		</form>
	</div>
</div>
<?php } 
add_action('wp_body_open', 'atw_search_overlay');*/
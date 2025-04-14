<?php
/**
 * uabwp-tw functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package uabwp-tw
 */
// Bootstrap Carbon Fields
add_action('after_setup_theme', function () {
	if (file_exists(get_template_directory() . '/vendor/autoload.php')) {
		require_once get_template_directory() . '/vendor/autoload.php';
		\Carbon_Fields\Carbon_Fields::boot();
	}
});
// Register Staff CPT and Staff Category taxonomy
add_action('init', function () {
	// Register Staff Category taxonomy
	register_taxonomy('staff_category', 'staff', array(
		'label' => __('Staff Categories', 'uabwp-tw'),
		'hierarchical' => true,
		'public' => true,
		'show_admin_column' => true,
		'rewrite' => array('slug' => 'staff-category'),
	));

	// Register Staff custom post type
	register_post_type('staff', array(
		'labels' => array(
			'name' => __('Staff', 'uabwp-tw'),
			'singular_name' => __('Staff Member', 'uabwp-tw'),
			'add_new' => __('Add New', 'uabwp-tw'),
			'add_new_item' => __('Add New Staff Member', 'uabwp-tw'),
			'edit_item' => __('Edit Staff Member', 'uabwp-tw'),
			'new_item' => __('New Staff Member', 'uabwp-tw'),
			'view_item' => __('View Staff Member', 'uabwp-tw'),
			'search_items' => __('Search Staff', 'uabwp-tw'),
			'not_found' => __('No staff found', 'uabwp-tw'),
			'not_found_in_trash' => __('No staff found in Trash', 'uabwp-tw'),
		),
		'public' => true,
		'has_archive' => false,
		'rewrite' => array('slug' => 'staff'),
		'supports' => array('title', 'thumbnail'),
		'show_in_rest' => true,
		'menu_icon' => 'dashicons-businessperson',
	));
});

// Register Carbon Fields for Staff
use Carbon_Fields\Container;
use Carbon_Fields\Field;
add_action('carbon_fields_register_fields', function () {
	Container::make('post_meta', __('Staff Details', 'uabwp-tw'))
		->where('post_type', '=', 'staff')
		->add_fields(array(
			Field::make('text', 'staff_position', __('Position')),
			Field::make('text', 'staff_office', __('Office')),
			Field::make('text', 'staff_phone', __('Phone')),
			Field::make('image', 'staff_photo', __('Photo')),
			Field::make('rich_text', 'staff_description', __('Description')),
		));
});

if (!defined('UABWP_TW_VERSION')) {
	/*
	 * Set the theme's version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define('UABWP_TW_VERSION', '0.1.0');
}

if (!defined('UABWP_TW_TYPOGRAPHY_CLASSES')) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `uabwp_tw_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they're removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE's body class when it
	 * initializes.
	 */
	define(
		'UABWP_TW_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if (!function_exists('uabwp_tw_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function uabwp_tw_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on uabwp-tw, use a find and replace
		 * to change 'uabwp-tw' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('uabwp-tw', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __('Primary', 'uabwp-tw'),
				'sidebar' => __('Sidebar Menu', 'uabwp-tw'),
				// 'menu-2'            => __('Footer Menu', 'uabwp-tw'), // Keep or remove if unused
				'footer-unit-links' => __('Footer - Unit Resources', 'uabwp-tw'),
				'footer-uab-links' => __('Footer - UAB Resources', 'uabwp-tw'),
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
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');
		add_editor_style('style-editor-extra.css');

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Add support for wide alignment.
		add_theme_support('align-wide');

		// Remove support for block templates.
		remove_theme_support('block-templates');
	}
endif;
add_action('after_setup_theme', 'uabwp_tw_setup');

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function uabwp_tw_widgets_init()
{
	register_sidebar(
		array(
			'name' => __('Footer', 'uabwp-tw'),
			'id' => 'sidebar-1',
			'description' => __('Add widgets here to appear in your footer.', 'uabwp-tw'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget' => '</section>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>',
		)
	);
}
add_action('widgets_init', 'uabwp_tw_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function uabwp_tw_scripts()
{
	wp_enqueue_style('uabwp-tw-style', get_stylesheet_uri(), array(), UABWP_TW_VERSION);

	// Enqueue Font Awesome 6 Free All Styles
	wp_enqueue_style('font-awesome-free', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css', array(), '6.5.2');

	// Enqueue Accordion JS
	wp_enqueue_script('uabwp-tw-accordion', get_template_directory_uri() . '/js/accordion.js', array(), UABWP_TW_VERSION, true);

	// Enqueue Sidebar Menu JS
	wp_enqueue_script('uabwp-tw-sidebar-menu', get_template_directory_uri() . '/js/sidebar-menu.js', array(), UABWP_TW_VERSION, true);

	wp_enqueue_script('uabwp-tw-script', get_template_directory_uri() . '/js/script.min.js', array(), UABWP_TW_VERSION, true);

	// Staff filter script
	wp_enqueue_script('uabwp-tw-staff-filter', get_template_directory_uri() . '/js/staff-filter.js', array(), UABWP_TW_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'uabwp_tw_scripts');

/**
 * Enqueue the block editor script.
 */
function uabwp_tw_enqueue_block_editor_script()
{
	if (is_admin()) {
		wp_enqueue_script(
			'uabwp-tw-editor',
			get_template_directory_uri() . '/js/block-editor.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			UABWP_TW_VERSION,
			true
		);
		wp_add_inline_script('uabwp-tw-editor', "tailwindTypographyClasses = '" . esc_attr(UABWP_TW_TYPOGRAPHY_CLASSES) . "'.split(' ');", 'before');
	}
}
add_action('enqueue_block_assets', 'uabwp_tw_enqueue_block_editor_script');

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function uabwp_tw_tinymce_add_class($settings)
{
	$settings['body_class'] = UABWP_TW_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter('tiny_mce_before_init', 'uabwp_tw_tinymce_add_class');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Load block patterns registration file.
 */
require get_template_directory() . '/inc/patterns.php';

/**
 * Load custom walkers.
 */
require_once get_template_directory() . '/inc/walkers/class-sidebar-nav-walker.php';

/**
 * Remove empty paragraphs created by wpautop()
 * @author Ryan Hamilton
 * @link https://gist.github.com/Fantikerz/5557617
 */
function remove_empty_p($content)
{
	$content = force_balance_tags($content);
	$content = preg_replace('#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content);
	$content = preg_replace('~\s?<p>(\s|&nbsp;)+</p>\s?~', '', $content);
	return $content;
}
add_filter('the_content', 'remove_empty_p', 20, 1);

/**
 * Set default permalink structure, category base, and default category upon theme activation.
 *
 * Sets permalink structure to /news/%postname%/.
 * Sets category base to /news/.
 * Ensures 'News' category exists and sets it as the default post category.
 * Note: It's still recommended to visit Settings > Permalinks and click "Save Changes"
 * once after theme activation to ensure rewrite rules (like .htaccess) are fully updated.
 */
function uabwp_tw_setup_defaults_on_activation()
{
	global $wp_rewrite;

	// --- Permalink Settings ---
	update_option('permalink_structure', '/news/%postname%/');
	update_option('category_base', 'news');

	// --- Default Category Settings ---
	$default_category_name = 'News';
	$default_category_slug = 'news';

	// Check if category exists
	$news_category = get_term_by('slug', $default_category_slug, 'category');

	// If not, create it
	if (!$news_category || is_wp_error($news_category)) {
		$term_data = wp_insert_term($default_category_name, 'category', ['slug' => $default_category_slug]);
		if (!is_wp_error($term_data)) {
			$news_category_id = $term_data['term_id'];
		} else {
			// Log error if category creation fails
			error_log('Failed to create default News category for uabwp-tw theme: ' . $term_data->get_error_message());
			$news_category_id = null;
		}
	} else {
		$news_category_id = $news_category->term_id;
	}

	// Set as default category if we have a valid ID
	if ($news_category_id) {
		update_option('default_category', $news_category_id);
	}

	// --- Flush Rewrite Rules ---
	// Flush rules after all relevant option changes
	if (is_object($wp_rewrite)) {
		$wp_rewrite->flush_rules(false);
	}
}
add_action('after_switch_theme', 'uabwp_tw_setup_defaults_on_activation');

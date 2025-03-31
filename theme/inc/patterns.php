<?php
/**
 * Block Patterns Registration
 *
 * @package uabwp-tw
 */

/**
 * Get pattern content from a file.
 *
 * @param string $pattern_file The filename of the pattern within the /patterns/ directory.
 * @return string The pattern content.
 */
function uabwp_tw_get_pattern_content($pattern_file)
{
    $pattern_path = get_theme_file_path('/patterns/' . $pattern_file . '.php');

    if (!file_exists($pattern_path)) {
        return '';
    }

    ob_start();
    include $pattern_path;
    return ob_get_clean();
}

/**
 * Register Block Patterns
 */
function uabwp_tw_register_block_patterns()
{
    // Example Pattern Registration: Image Banner with Intro
    register_block_pattern(
        'uabwp-tw/image-banner-intro', // Unique slug (theme-namespaced)
        array(
            'title' => esc_html__('Image Banner with Site Intro', 'uabwp-tw'),
            'description' => esc_html__('A full-width banner image with a centered, overlapping card containing a title, description, and action links.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('image-banner-intro'),
            'categories' => array('featured', 'banner', 'text', 'uab'), // Add a custom category 'uab' if desired
            'keywords' => array('banner', 'image', 'introduction', 'hero', 'card'),
            'blockTypes' => array('core/group', 'core/image', 'core/heading', 'core/paragraph'),
            'viewportWidth' => 1340,
        )
    );

    // Add more register_block_pattern() calls here for other patterns...

}
add_action('init', 'uabwp_tw_register_block_patterns');


/**
 * Register Block Pattern Category (Optional)
 */
function uabwp_tw_register_block_pattern_categories()
{
    register_block_pattern_category(
        'uab', // Category slug
        array('label' => esc_html__('UAB', 'uabwp-tw')) // Category label
    );
}
add_action('init', 'uabwp_tw_register_block_pattern_categories');
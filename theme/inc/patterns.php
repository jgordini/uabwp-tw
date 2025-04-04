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

    // Register Three Column Grid with Buttons Pattern
    register_block_pattern(
        'uabwp-tw/3col-grid-w-buttons',
        array(
            'title' => esc_html__('Three Column Grid with Buttons', 'uabwp-tw'),
            'description' => esc_html__('A responsive three-column grid layout with headings, descriptive text, and call-to-action buttons.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('3col-grid-w-buttons'),
            'categories' => array('featured', 'grid', 'text', 'uab'),
            'keywords' => array('grid', 'columns', 'buttons', 'text', 'content'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph', 'core/buttons'),
            'viewportWidth' => 1340,
        )
    );

    // Register Grid Stack Left Pattern
    register_block_pattern(
        'uabwp-tw/grid-stack-left',
        array(
            'title' => esc_html__('Grid Stack Left', 'uabwp-tw'),
            'description' => esc_html__('A responsive two-column layout with an image on the left and text content on the right, stacking vertically on smaller screens.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('grid-stack-left'),
            'categories' => array('featured', 'grid', 'text', 'image', 'uab'),
            'keywords' => array('grid', 'columns', 'image', 'text', 'content', 'stack', 'left'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph', 'core/image', 'core/buttons'),
            'viewportWidth' => 1340,
        )
    );

    // Register Grid Stack Right Pattern
    register_block_pattern(
        'uabwp-tw/grid-stack-right',
        array(
            'title' => esc_html__('Grid Stack Right', 'uabwp-tw'),
            'description' => esc_html__('A responsive two-column layout with text content (pre-header, description, button) on the left and an image on the right, stacking vertically on smaller screens.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('grid-stack-right'),
            'categories' => array('featured', 'grid', 'text', 'image', 'uab'),
            'keywords' => array('grid', 'columns', 'image', 'text', 'content', 'stack', 'right', 'feature'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph', 'core/image', 'core/buttons'),
            'viewportWidth' => 1340,
        )
    );

    // Register Grid Stack Right with Links Pattern
    register_block_pattern(
        'uabwp-tw/grid-stack-right-links',
        array(
            'title' => esc_html__('Grid Stack Right with Links', 'uabwp-tw'),
            'description' => esc_html__('A responsive two-column layout with text content (pre-header, description, link list, button) on the left and an image on the right, stacking vertically on smaller screens.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('grid-stack-right-links'),
            'categories' => array('featured', 'grid', 'text', 'image', 'uab'),
            'keywords' => array('grid', 'columns', 'image', 'text', 'content', 'stack', 'right', 'feature', 'links'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph', 'core/image', 'core/buttons', 'core/list'),
            'viewportWidth' => 1340,
        )
    );

    // Register Grid Stack Left with Links Pattern
    register_block_pattern(
        'uabwp-tw/grid-stack-left-links',
        array(
            'title' => esc_html__('Grid Stack Left with Links', 'uabwp-tw'),
            'description' => esc_html__('A responsive two-column layout with an image on the left and text content (pre-header, description, link list, button) on the right, stacking vertically on smaller screens.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('grid-stack-left-links'),
            'categories' => array('featured', 'grid', 'text', 'image', 'uab'),
            'keywords' => array('grid', 'columns', 'image', 'text', 'content', 'stack', 'left', 'feature', 'links'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph', 'core/image', 'core/buttons', 'core/list'),
            'viewportWidth' => 1340,
        )
    );

    // Register Three Column Grid with Background Pattern
    register_block_pattern(
        'uabwp-tw/3col-grid-w-bk',
        array(
            'title' => esc_html__('Three Column Grid with Background', 'uabwp-tw'),
            'description' => esc_html__('A responsive three-column grid layout with headings and descriptive text on a light green background.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('3col-grid-w-bk'),
            'categories' => array('featured', 'grid', 'text', 'uab'),
            'keywords' => array('grid', 'columns', 'text', 'content', 'background'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph'),
            'viewportWidth' => 1340,
        )
    );

    // Register Three Column Image Cards Pattern
    register_block_pattern(
        'uabwp-tw/3col-image-cards',
        array(
            'title' => esc_html__('Three Column Image Cards', 'uabwp-tw'),
            'description' => esc_html__('A responsive three-column grid layout displaying cards, each with an image, heading, description, and button.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('3col-image-cards'),
            'categories' => array('featured', 'grid', 'text', 'image', 'uab'),
            'keywords' => array('grid', 'columns', 'image', 'text', 'content', 'cards'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph', 'core/image', 'core/buttons'),
            'viewportWidth' => 1340,
        )
    );

    // Register Two Column with Background Pattern
    register_block_pattern(
        'uabwp-tw/2col-w-bk',
        array(
            'title' => esc_html__('Two Column with Background', 'uabwp-tw'),
            'description' => esc_html__('A responsive two-column layout with text in the left column, and text plus a button in the right column, all on a light green background.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('2col-w-bk'),
            'categories' => array('featured', 'columns', 'text', 'uab'),
            'keywords' => array('columns', 'text', 'content', 'background', 'button'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph', 'core/buttons'),
            'viewportWidth' => 1340,
        )
    );

    // Register Two Column Pattern
    register_block_pattern(
        'uabwp-tw/2col',
        array(
            'title' => esc_html__('Two Column', 'uabwp-tw'),
            'description' => esc_html__('A responsive two-column layout with text in the left column, and text plus buttons in the right column.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('2col'),
            'categories' => array('featured', 'columns', 'text', 'uab'),
            'keywords' => array('columns', 'text', 'content', 'button'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph', 'core/buttons'),
            'viewportWidth' => 1340,
        )
    );

    // Register Two Column (1/3 + 2/3) Pattern
    register_block_pattern(
        'uabwp-tw/2col-one-third',
        array(
            'title' => esc_html__('Two Column (1/3 + 2/3)', 'uabwp-tw'),
            'description' => esc_html__('A responsive two-column layout (1/3 + 2/3) with text in the left column, and text plus buttons in the right column.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('2col-one-third'),
            'categories' => array('featured', 'columns', 'text', 'uab'),
            'keywords' => array('columns', 'text', 'content', 'button', 'thirds'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph', 'core/buttons'),
            'viewportWidth' => 1340,
        )
    );

    // Register Two Column (2/3 + 1/3) Pattern
    register_block_pattern(
        'uabwp-tw/2col-two-third',
        array(
            'title' => esc_html__('Two Column (2/3 + 1/3)', 'uabwp-tw'),
            'description' => esc_html__('A responsive two-column layout (2/3 + 1/3) with text in the left column, and text plus buttons in the right column.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('2col-two-third'),
            'categories' => array('featured', 'columns', 'text', 'uab'),
            'keywords' => array('columns', 'text', 'content', 'button', 'thirds'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph', 'core/buttons'),
            'viewportWidth' => 1340,
        )
    );

    // Register Two Column (1/3 + 2/3) with Background Pattern
    register_block_pattern(
        'uabwp-tw/2col-one-third-w-bk',
        array(
            'title' => esc_html__('Two Column (1/3 + 2/3) with Background', 'uabwp-tw'),
            'description' => esc_html__('A responsive two-column layout (1/3 + 2/3) with text in the left column, and text plus buttons in the right column, on a light green background.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('2col-one-third-w-bk'),
            'categories' => array('featured', 'columns', 'text', 'uab'),
            'keywords' => array('columns', 'text', 'content', 'button', 'thirds', 'background'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph', 'core/buttons'),
            'viewportWidth' => 1340,
        )
    );

    // Register Two Column (2/3 + 1/3) with Background Pattern
    register_block_pattern(
        'uabwp-tw/2col-two-third-w-bk',
        array(
            'title' => esc_html__('Two Column (2/3 + 1/3) with Background', 'uabwp-tw'),
            'description' => esc_html__('A responsive two-column layout (2/3 + 1/3) with text in the left column, and text plus buttons in the right column, on a light green background.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('2col-two-third-w-bk'),
            'categories' => array('featured', 'columns', 'text', 'uab'),
            'keywords' => array('columns', 'text', 'content', 'button', 'thirds', 'background'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph', 'core/buttons'),
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
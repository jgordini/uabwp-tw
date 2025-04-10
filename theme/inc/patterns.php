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

    // Register Three Column Grid with Links Pattern
    register_block_pattern(
        'uabwp-tw/3col-grid-w-links',
        array(
            'title' => esc_html__('Three Column Grid with Links', 'uabwp-tw'),
            'description' => esc_html__('A responsive three-column grid layout with headings, descriptive text, and call-to-action links.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('3col-grid-w-links'),
            'categories' => array('featured', 'grid', 'text', 'uab'),
            'keywords' => array('grid', 'columns', 'links', 'text', 'content'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph'),
            'viewportWidth' => 1340,
        )
    );

    // Register Accordion Item Pattern
    register_block_pattern(
        'uabwp-tw/accordion-item', // Matches the slug in patterns/accordion.php
        array(
            'title' => esc_html__('Accordion Item', 'uabwp-tw'),
            'description' => esc_html__('A single accordion item including a toggle button and content area. Requires JavaScript.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('accordion'), // Reads patterns/accordion.php
            'categories' => array('uab', 'text'), // Match categories from pattern file or adjust as needed
            'keywords' => array('accordion', 'toggle', 'collapse', 'faq', 'item'),
            // 'blockTypes' => array('core/html'), // Optional: Specify block types if useful
            'viewportWidth' => 800, // Optional: Adjust viewport preview width
        )
    );

    // Register Accordion List Pattern
    register_block_pattern(
        'uabwp-tw/accordion-list', // Matches the slug in patterns/accordion-list.php
        array(
            'title' => esc_html__('Accordion List', 'uabwp-tw'),
            'description' => esc_html__('A list of accordion items with toggle buttons and content areas.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('accordion-list'), // Reads patterns/accordion-list.php
            'categories' => array('uab', 'text'), // Match categories from pattern file or adjust as needed
            'keywords' => array('accordion', 'list', 'toggle', 'collapse', 'faq'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph'),
            'viewportWidth' => 1340,
        )
    );

    // Register Staff Pictures with Dropdown Filter Pattern
    register_block_pattern(
        'uabwp-tw/staff-pics',
        array(
            'title' => esc_html__('Staff Pictures With Dropdown Filter', 'uabwp-tw'),
            'description' => esc_html__('A grid of staff members with their information and a dropdown filter.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('staff-pics'),
            'categories' => array('uab', 'text'),
            'keywords' => array('staff', 'directory', 'people', 'filter', 'profiles', 'headshots'),
            'blockTypes' => array('core/group', 'core/heading', 'core/paragraph', 'core/image'),
            'viewportWidth' => 1340,
        )
    );

    // Register News Feed - 1 Column List Pattern
    register_block_pattern(
        'uabwp-tw/news-feed-1-col',
        array(
            'title' => esc_html__('News Feed - 1 Column List', 'uabwp-tw'),
            'description' => esc_html__('Displays the latest posts in a single-column list with images, titles, dates, and excerpts.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('news-feed-1-col'),
            'categories' => array('uab', 'news'), // Add 'uab' as well
            'keywords' => array('news', 'posts', 'feed', 'list', 'query loop', 'blog'),
            'viewportWidth' => 1340,
        )
    );

    // Register News Feed - 2 Column Cards Pattern
    register_block_pattern(
        'uabwp-tw/news-feed-2-col',
        array(
            'title' => esc_html__('News Feed - 2 Column Cards', 'uabwp-tw'),
            'description' => esc_html__('Displays the latest posts as cards in a 2-column grid.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('news-feed-2-col'),
            'categories' => array('uab', 'news'),
            'keywords' => array('news', 'posts', 'feed', 'grid', 'cards', 'query loop'),
            'viewportWidth' => 1340,
        )
    );

    // Register News Feed - 3 Column Cards Pattern
    register_block_pattern(
        'uabwp-tw/news-feed-3-col',
        array(
            'title' => esc_html__('News Feed - 3 Column Cards', 'uabwp-tw'),
            'description' => esc_html__('Displays the latest posts as cards in a 3-column grid.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('news-feed-3-col'),
            'categories' => array('uab', 'news'),
            'keywords' => array('news', 'posts', 'feed', 'grid', 'cards', 'query loop'),
            'viewportWidth' => 1340,
        )
    );

    // Register News Feed - Image Left Pattern
    register_block_pattern(
        'uabwp-tw/news-feed-left',
        array(
            'title' => esc_html__('News Feed - Image Left', 'uabwp-tw'),
            'description' => esc_html__('Displays the latest posts in a list with image on the left and text on the right.', 'uabwp-tw'),
            'content' => uabwp_tw_get_pattern_content('news-feed-left'),
            'categories' => array('uab', 'news'),
            'keywords' => array('news', 'posts', 'feed', 'list', 'side by side', 'query loop'),
            'viewportWidth' => 1340,
        )
    );

}
add_action('init', 'uabwp_tw_register_block_patterns');


/**
 * Register Block Pattern Category (Optional)
 */
function uabwp_tw_register_block_pattern_categories()
{
    // Register the 'uab' category
    register_block_pattern_category(
        'uab',
        array(
            'label' => esc_html__('UAB Patterns', 'uabwp-tw'),
        )
    );

    // Register the 'news' category
    register_block_pattern_category(
        'news',
        array(
            'label' => esc_html__('News Feeds', 'uabwp-tw'),
        )
    );
}
add_action('init', 'uabwp_tw_register_block_pattern_categories');
<?php
/**
 * Template Name: Staff Member Layout
 * Template Post Type: page
 *
 * This template displays a page with a sidebar, featuring the page's featured image
 * on the left, the title on the right, and the main content below.
 *
 * @package uabwp-tw
 */

get_header();
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:flex lg:gap-8">
    <?php // Flex container for content + sidebar ?>

    <?php get_sidebar(); // Include the sidebar template ?>

    <div id="primary" class="content-area lg:flex-1"> <?php // Main content area takes remaining space ?>
        <main id="main" class="site-main">
            <?php
            if (have_posts()) {
                while (have_posts()):
                    the_post();
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                            <div class="md:col-span-1">
                                <?php if (has_post_thumbnail()): ?>
                                    <figure class="w-full aspect-portrait object-cover overflow-hidden rounded shadow-md">
                                        <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); // Use 'large' size ?>
                                    </figure>
                                <?php else: ?>
                                    <?php // Optional: Placeholder if no featured image is set ?>
                                    <div
                                        class="w-full aspect-portrait bg-gray-200 rounded shadow-md flex items-center justify-center">
                                        <span class="text-gray-500 text-sm"><?php esc_html_e('No Image Set', 'uabwp-tw'); ?></span>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="md:col-span-2 pt-2 flex items-center">
                                <?php // Removed staff details, just showing title centered vertically ?>
                                <?php the_title('<h1 class="text-black font-bold text-3xl font-kulturista">', '</h1>'); ?>
                            </div>
                        </div>

                        <div class="page-content-area <?php echo esc_attr(UABWP_TW_TYPOGRAPHY_CLASSES); ?> mt-8">
                            <?php the_content(); // Display the main page content ?>
                            <?php
                            wp_link_pages(
                                array(
                                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'uabwp-tw'),
                                    'after' => '</div>',
                                )
                            );
                            ?>
                        </div>
                    </article>
                    <?php
                endwhile;
            } else {
                get_template_part('template-parts/content/content-none');
            }
            ?>
        </main><!-- #main -->
    </div><!-- #primary -->

</div> <?php // End flex container ?>

<?php
get_footer();
<?php
/**
 * Template Name: Page with Sidebar
 * Template Post Type: page
 *
 * This is the template that displays pages with a sidebar.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package uabwp-tw
 */

get_header();
?>

<?php
// Display featured image if set
if (has_post_thumbnail()):
    ?>
    <figure class="page-featured-image w-full mb-8 h-64 lg:h-96 overflow-hidden">
        <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover')); ?>
    </figure>
    <?php
endif;
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:flex lg:gap-8">
    <?php // Flex container for content + sidebar ?>

    <?php get_sidebar(); // Include the sidebar template - now placed first for left positioning ?>

    <div id="primary" class="content-area lg:flex-1"> <?php // Main content area takes remaining space ?>
        <main id="main" class="site-main">

            <?php
            while (have_posts()):
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header mb-4">
                        <?php the_title('<h1 class="entry-title text-3xl font-bold">', '</h1>'); ?>
                    </header>

                    <div class="entry-content">
                        <div
                            class="<?php echo esc_attr(UABWP_TW_TYPOGRAPHY_CLASSES); ?> pl-0 prose-p:pl-0 prose-headings:pl-0 prose-hr:pl-0">
                            <?php
                            the_content();

                            wp_link_pages(
                                array(
                                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'uabwp-tw'),
                                    'after' => '</div>',
                                )
                            );
                            ?>
                        </div>
                    </div>
                </article>
                <?php
                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()):
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

</div> <?php // End flex container ?>

<?php
get_footer();
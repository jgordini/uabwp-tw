<?php
/**
 * Template Name: No Title
 * Template Post Type: page
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/
 *
 * @package uabwp-tw
 */

get_header();
?>

<section id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php
        /* Start the Loop */
        while (have_posts()):
            the_post();

            // Directly output the content without the template part that includes the title.
            the_content();

            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()):
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

    </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
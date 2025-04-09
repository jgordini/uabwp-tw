<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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

<section id="primary">
	<main id="main" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

		<?php
		/* Start the Loop */
		while (have_posts()):
			the_post();

			get_template_part('template-parts/content/content', 'page');

			// If comments are open, or we have at least one comment, load
			// the comment template.
			if (comments_open() || get_comments_number()) {
				comments_template();
			}

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();

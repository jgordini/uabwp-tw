<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

			<?php if (have_posts()): ?>

				<header class="page-header mb-6 border-b border-gray-200 pb-4">
					<?php
					printf(
						/* translators: 1: search result title. 2: search term. */
						'<h1 class="page-title text-3xl font-bold">%1$s <span class="text-uab-green">%2$s</span></h1>',
						esc_html__('Search results for:', 'uabwp-tw'),
						get_search_query()
					);
					?>
				</header><!-- .page-header -->

				<ul class="divide-y divide-gray-200 mt-6">
					<?php
					// Start the Loop.
					while (have_posts()):
						the_post();
						?>
						<li class="py-4">
							<a href="<?php echo esc_url(get_permalink()); ?>"
								class="text-lg font-semibold text-uab-green hover:text-dragons-lair-green hover:underline">
								<?php the_title(); ?>
							</a>
							<p class="mt-1 text-sm text-gray-600">
								<?php echo wp_trim_words(get_the_excerpt(), 30, '...'); // Display a trimmed excerpt ?>
							</p>
							<?php // Optional: Add date or other meta below excerpt if desired ?>
							<?php /* 
																 <p class="mt-1 text-xs text-gray-500"><?php echo get_the_date(); ?></p>
																 */ ?>
						</li>
						<?php
						// End the loop.
					endwhile;
					?>
				</ul>

				<?php
				// Previous/next page navigation.
				uabwp_tw_the_posts_navigation();
				?>

			<?php else: ?>

				<?php
				// If no content is found, get the `content-none` template part.
				get_template_part('template-parts/content/content', 'none');
				?>

			<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

</div> <?php // End flex container ?>

<?php
get_footer();

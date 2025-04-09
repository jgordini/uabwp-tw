<?php
/**
 * Title: News Feed - 4 Across Cards
 * Slug: uabwp-tw/news-feed-4-across
 * Categories: uabwp-tw, news
 * Description: Displays the latest 4 posts as cards with images, titles, dates, and excerpts in a 4-column grid.
 * Keywords: news, posts, feed, grid, cards
 */

// Query latest 4 posts
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'ignore_sticky_posts' => 1,
);
$the_query = new WP_Query($args);
?>

<section class="news-feed-4-across container mx-auto px-12 mt-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
        <?php if ($the_query->have_posts()): ?>
            <?php while ($the_query->have_posts()):
                $the_query->the_post(); ?>
                <div>
                    <div class="h-60 bg-gray-light mb-2">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                        <?php else: ?>
                            <div class="w-full h-full flex items-center justify-center bg-gray-light text-gray-500">
                                <?php esc_html_e('No Image', 'uabwp-tw'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="p-6 shadow-md">
                        <h3 class="text-2xl font-bold mb-4 font-kulturista capitalize">
                            <?php the_title(); ?>
                        </h3>
                        <div class="text-sm font-bold mb-4 font-aktiv-grotesk">
                            <?php echo get_the_date(); ?>
                        </div>
                        <p class="text-lg leading-7">
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); // Restore original Post Data ?>
        <?php else: ?>
            <p class="lg:col-span-4 text-center"><?php esc_html_e('Sorry, no posts were found.', 'uabwp-tw'); ?></p>
        <?php endif; ?>
    </div>
</section>
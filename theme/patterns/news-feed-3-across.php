<?php
/**
 * Title: News Feed - 3 Across Cards
 * Slug: uabwp-tw/news-feed-3-across
 * Categories: uabwp-tw, news
 * Description: Displays the latest 3 posts as cards with images, titles, and excerpts in a 3-column grid.
 * Keywords: news, posts, feed, grid, cards
 */

// Query latest 3 posts
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'ignore_sticky_posts' => 1,
);
$the_query = new WP_Query($args);
?>

<section class="news-feed-3-across container mx-auto px-6 mt-16">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
        <?php if ($the_query->have_posts()): ?>
            <?php while ($the_query->have_posts()):
                $the_query->the_post(); ?>
                <div class="flex flex-col">
                    <div class="h-80 bg-gray-light">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                        <?php else: // Optional: Placeholder if no featured image ?>
                            <div class="w-full h-full flex items-center justify-center bg-gray-light text-gray-500">
                                <?php esc_html_e('No Image', 'uabwp-tw'); ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="p-6 shadow-md flex-1">
                        <h3 class="text-2xl font-bold mb-4 font-kulturista capitalize">
                            <?php the_title(); // Title is not linked here, per example ?>
                        </h3>
                        <p class="text-lg leading-7">
                            <?php the_excerpt(); ?>
                        </p>
                        <?php // Optional: Add a read more link if needed
                                /*
                                <a href="<?php echo esc_url(get_permalink()); ?>" class="text-uab-green font-bold mt-4 inline-block">
                                    <?php esc_html_e('Read More', 'uabwp-tw'); ?>
                                </a>
                                */
                                ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); // Restore original Post Data ?>
        <?php else: ?>
            <p class="md:col-span-3 text-center"><?php esc_html_e('Sorry, no posts were found.', 'uabwp-tw'); ?></p>
        <?php endif; ?>
    </div>
</section>
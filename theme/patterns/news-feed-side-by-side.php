<?php
/**
 * Title: News Feed - Side-by-Side List
 * Slug: uabwp-tw/news-feed-side-by-side
 * Categories: uabwp-tw, news
 * Description: Displays the latest 3 posts in a list format with image on the left and text on the right.
 * Keywords: news, posts, feed, list, side by side
 */

// Query latest 3 posts
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'ignore_sticky_posts' => 1,
);
$the_query = new WP_Query($args);
?>

<section class="news-feed-side-by-side container mx-auto px-12 mt-16">
    <div class="space-y-10">
        <?php if ($the_query->have_posts()): ?>
            <?php while ($the_query->have_posts()):
                $the_query->the_post(); ?>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="md:col-span-1">
                        <div class="h-80 bg-gray-light">
                            <?php if (has_post_thumbnail()): ?>
                                <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover')); ?>
                            <?php else: ?>
                                <div class="w-full h-full flex items-center justify-center bg-gray-light text-gray-500">
                                    <?php esc_html_e('No Image', 'uabwp-tw'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="md:col-span-2 p-6">
                        <h3 class="text-2xl font-bold mb-2 font-kulturista capitalize">
                            <a href="<?php echo esc_url(get_permalink()); ?>" class="hover:text-uab-green transition-colors">
                                <?php the_title(); ?>
                            </a>
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
            <p class="text-center"><?php esc_html_e('Sorry, no posts were found.', 'uabwp-tw'); ?></p>
        <?php endif; ?>
    </div>
</section>
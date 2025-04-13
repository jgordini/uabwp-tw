<?php
/**
 * Template for displaying a single Staff member.
 * Uses the layout and fields from the staff-pics pattern.
 */

get_header();

// Ensure Carbon Fields is loaded
if (!function_exists('carbon_get_post_meta')) {
    get_template_part('template-parts/content/content-none');
    get_footer();
    return;
}

if (have_posts()):
    while (have_posts()):
        the_post();
        $staff_id = get_the_ID();
        $categories = get_the_terms($staff_id, 'staff_category');
        // Collect all category slugs, space-separated
        $category_slugs = [];
        if ($categories && !is_wp_error($categories)) {
            $category_slugs = array_map(function ($cat) {
                return esc_attr($cat->slug);
            }, $categories);
        }
        $category_slug_attr = implode(' ', $category_slugs);
        $photo_id = carbon_get_post_meta($staff_id, 'staff_photo');
        $photo_url = $photo_id ? wp_get_attachment_image_url($photo_id, 'medium') : '';
        $position = carbon_get_post_meta($staff_id, 'staff_position');
        $office = carbon_get_post_meta($staff_id, 'staff_office');
        $phone = carbon_get_post_meta($staff_id, 'staff_phone');
        ?>
        <div class="container mx-auto px-12 py-6 mb-16">
            <div class="flex flex-row gap-4 staff-card" data-category="<?php echo $category_slug_attr; ?>">
                <figure class="w-1/3 aspect-portrait object-cover">
                    <?php if ($photo_url): ?>
                        <img src="<?php echo esc_url($photo_url); ?>"
                            alt="<?php echo esc_attr(get_the_title() . ' headshot'); ?>" />
                    <?php endif; ?>
                </figure>
                <div class="w-2/3 pt-2 flex flex-col justify-center not-prose">
                    <h1 class="text-black font-bold text-2xl mb-2"><?php the_title(); ?></h1>
                    <?php if ($position): ?>
                        <p class="text-black text-lg m-0"><?php echo esc_html($position); ?></p>
                    <?php endif; ?>
                    <?php if ($office): ?>
                        <p class="text-black text-lg m-0"><?php echo esc_html($office); ?></p>
                    <?php endif; ?>
                    <?php if ($phone): ?>
                        <p class="text-black text-lg m-0"><?php echo esc_html($phone); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php
    endwhile;
else:
    get_template_part('template-parts/content/content-none');
endif;

get_footer();
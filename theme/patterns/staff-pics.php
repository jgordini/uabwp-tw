<?php
/**
 * Title: Staff Pictures With Dropdown Filter
 * Slug: uabwp-tw/staff-pics
 * Categories: uabwp-tw
 * Description: A grid of staff members with their information and a dropdown filter.
 */

// Ensure Carbon Fields is loaded
if (!function_exists('carbon_get_post_meta')) {
    return;
}
?>

<div class="container mx-auto px-12 py-6 mb-16">

    <div class="mb-6 staff-filter">
        <select class="border border-gray-200 rounded px-4 py-2 bg-white">
            <option value=""><?php esc_html_e('All Staff', 'uabwp-tw'); ?></option>
            <?php
            $categories = get_terms([
                'taxonomy' => 'staff_category',
                'hide_empty' => false,
            ]);
            foreach ($categories as $cat) {
                // Skip any category with empty slug or name "All Staff"
                if ($cat->slug === '' || strtolower(trim($cat->name)) === 'all staff') {
                    continue;
                }
                printf(
                    '<option value="%s">%s</option>',
                    esc_attr($cat->slug),
                    esc_html($cat->name)
                );
            }
            ?>
        </select>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <?php
        $staff_query = new WP_Query([
            'post_type' => 'staff',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
        ]);
        if ($staff_query->have_posts()):
            while ($staff_query->have_posts()):
                $staff_query->the_post();
                $staff_id = get_the_ID();
                $categories = get_the_terms($staff_id, 'staff_category');
                if (!$categories || is_wp_error($categories)) {
                    // Skip staff with no category
                    continue;
                }
                // Collect all category slugs, space-separated
                $category_slugs = array_map(function ($cat) {
                    return esc_attr($cat->slug);
                }, $categories);
                if (!in_array('all-staff', $category_slugs, true)) {
                    $category_slugs[] = 'all-staff';
                }
                $category_slug_attr = implode(' ', $category_slugs);
                $photo_id = carbon_get_post_meta($staff_id, 'staff_photo');
                $photo_url = $photo_id ? wp_get_attachment_image_url($photo_id, 'medium') : '';
                $position = carbon_get_post_meta($staff_id, 'staff_position');
                $office = carbon_get_post_meta($staff_id, 'staff_office');
                $phone = carbon_get_post_meta($staff_id, 'staff_phone');
                ?>
                <div class="flex flex-row gap-4 staff-card" data-category="<?php echo $category_slug_attr; ?>">
                    <figure class="w-1/3 aspect-portrait object-cover">
                        <?php if ($photo_url): ?>
                            <img src="<?php echo esc_url($photo_url); ?>"
                                alt="<?php echo esc_attr(get_the_title() . ' headshot'); ?>" />
                        <?php endif; ?>
                    </figure>
                    <div class="w-2/3 pt-2 flex flex-col justify-center not-prose">
                        <h3 class="text-black font-bold text-xl mb-2"><?php the_title(); ?></h3>
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
                <?php
            endwhile;
            wp_reset_postdata();
        else:
            ?>
            <p><?php esc_html_e('No staff found.', 'uabwp-tw'); ?></p>
        <?php endif; ?>
    </div> <!-- Close grid container div -->

    <!-- Script removed - enqueued via functions.php -->
</div> <!-- Close main container div -->
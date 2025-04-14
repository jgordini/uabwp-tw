<?php
/**
 * Template for displaying a single Staff member.
 * Uses a sidebar layout with image left, details right, and content below.
 */

get_header();
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:flex lg:gap-8">
    <?php // Flex container for content + sidebar ?>

    <?php get_sidebar(); // Include the sidebar template ?>

    <div id="primary" class="content-area lg:flex-1"> <?php // Main content area takes remaining space ?>
        <main id="main" class="site-main">
            <?php
            // Ensure Carbon Fields is loaded
            if (!function_exists('carbon_get_post_meta')) {
                get_template_part('template-parts/content/content-none');
            } elseif (have_posts()) {
                while (have_posts()):
                    the_post();
                    $staff_id = get_the_ID();
                    $photo_id = carbon_get_post_meta($staff_id, 'staff_photo');
                    $photo_url = $photo_id ? wp_get_attachment_image_url($photo_id, 'large') : ''; // Use large size
                    $position = carbon_get_post_meta($staff_id, 'staff_position');
                    $office = carbon_get_post_meta($staff_id, 'staff_office');
                    $phone = carbon_get_post_meta($staff_id, 'staff_phone');
                    $staff_description = carbon_get_post_meta($staff_id, 'staff_description'); // Get the description
                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                            <div class="md:col-span-1">
                                <?php if ($photo_url): ?>
                                    <figure class="w-full aspect-portrait object-cover overflow-hidden rounded shadow-md">
                                        <img src="<?php echo esc_url($photo_url); ?>"
                                            alt="<?php echo esc_attr(get_the_title() . ' headshot'); ?>"
                                            class="w-full h-full object-cover" />
                                    </figure>
                                <?php endif; ?>
                            </div>
                            <div class="md:col-span-2 pt-2 not-prose">
                                <h1 class="text-black font-bold text-3xl mb-4 font-kulturista"><?php the_title(); ?></h1>
                                <?php if ($position): ?>
                                    <p class="text-black text-xl m-0 font-semibold"><?php echo esc_html($position); ?></p>
                                <?php endif; ?>
                                <?php if ($office): ?>
                                    <p class="text-black text-lg m-0 mt-1"><?php echo esc_html($office); ?></p>
                                <?php endif; ?>
                                <?php if ($phone): ?>
                                    <p class="text-black text-lg m-0 mt-1"><?php echo esc_html($phone); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php // Only display the content area if the description is not empty ?>
                        <?php if (!empty($staff_description)): ?>
                            <div class="staff-content-area <?php echo esc_attr(UABWP_TW_TYPOGRAPHY_CLASSES); ?> mt-8">
                                <?php echo wpautop(wp_kses_post($staff_description)); // Output the description with auto paragraphs and security check ?>
                            </div>
                        <?php endif; ?>
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
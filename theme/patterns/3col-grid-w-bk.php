<?php
/**
 * Title: Three Column Grid with Background
 * Slug: uabwp-tw/3col-grid-w-bk
 * Categories: featured, grid, text, uab
 * Keywords: grid, columns, text, content, background
 * Block Types: core/group, core/heading, core/paragraph
 * Description: A responsive three-column grid layout with headings and descriptive text on a light green background.
 * Viewport Width: 1340
 */
?>
<div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <div class="relative bg-campus-green-5 p-6">
            <div>
                <h3 class="text-3xl font-bold mb-4 font-kulturista text-black">
                    <?php echo esc_html__('Item 1', 'uabwp-tw'); ?>
                </h3>
                <span class="bg-uab-green block h-1 mb-5 w-12"></span>
                <p class="text-lg mb-6 font-aktiv-grotesk text-black">
                    <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius nunc mollis, laoreet orci id, feugiat ex. Quisque varius, sem at finibus accumsan, enim purus aliquam eros, nec cursus eros metus ut quam.', 'uabwp-tw'); ?>
                </p>
            </div>
        </div>

        <div class="relative bg-campus-green-5 p-6">
            <div>
                <h3 class="text-3xl font-bold mb-4 font-kulturista text-black">
                    <?php echo esc_html__('Item 2', 'uabwp-tw'); ?>
                </h3>
                <span class="bg-uab-green block h-1 mb-5 w-12"></span>
                <p class="text-lg mb-6 font-aktiv-grotesk text-black">
                    <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius nunc mollis, laoreet orci id, feugiat ex. Quisque varius, sem at finibus accumsan, enim purus aliquam eros, nec cursus eros metus ut quam.', 'uabwp-tw'); ?>
                </p>
            </div>
        </div>

        <div class="relative bg-campus-green-5 p-6">
            <div>
                <h3 class="text-3xl font-bold mb-4 font-kulturista text-black">
                    <?php echo esc_html__('Item 3', 'uabwp-tw'); ?>
                </h3>
                <span class="bg-uab-green block h-1 mb-5 w-12"></span>
                <p class="text-lg mb-6 font-aktiv-grotesk text-black">
                    <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius nunc mollis, laoreet orci id, feugiat ex. Quisque varius, sem at finibus accumsan, enim purus aliquam eros, nec cursus eros metus ut quam.', 'uabwp-tw'); ?>
                </p>
            </div>
        </div>
    </div>
</div>
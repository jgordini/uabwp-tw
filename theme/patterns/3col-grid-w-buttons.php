<?php
/**
 * Title: Three Column Grid with Buttons
 * Slug: uabwp-tw/3col-grid-w-buttons
 * Categories: featured, grid, text, uab
 * Keywords: grid, columns, buttons, text, content
 * Block Types: core/group, core/heading, core/paragraph, core/buttons
 * Description: A responsive three-column grid layout with headings, descriptive text, and call-to-action buttons.
 * Viewport Width: 1340
 */
?>
<div class="max-w-7xl mx-auto px-6">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <div class="relative">
            <div>
                <h3 class="text-3xl font-bold mb-4 font-kulturista text-black">
                    <?php echo esc_html__('Item 1', 'uabwp-tw'); ?>
                </h3>
                <span class="bg-uab-green block h-1 mb-5 w-12"></span>
                <p class="text-lg mb-6 font-aktiv-grotesk text-black">
                    <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius nunc mollis, laoreet orci id, feugiat ex. Quisque varius, sem at finibus accumsan, enim purus aliquam eros, nec cursus eros metus ut quam.', 'uabwp-tw'); ?>
                </p>
                <a href="#"
                    class="inline-block bg-uab-green hover:bg-dragons-lair-green text-white px-6 py-2 rounded-md font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap"><?php echo esc_html__('Read more', 'uabwp-tw'); ?></a>
            </div>
        </div>

        <div class="relative">
            <div>
                <h3 class="text-3xl font-bold mb-4 font-kulturista text-black">
                    <?php echo esc_html__('Item 2', 'uabwp-tw'); ?>
                </h3>
                <span class="bg-uab-green block h-1 mb-5 w-12"></span>
                <p class="text-lg mb-6 font-aktiv-grotesk text-black">
                    <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius nunc mollis, laoreet orci id, feugiat ex. Quisque varius, sem at finibus accumsan, enim purus aliquam eros, nec cursus eros metus ut quam.', 'uabwp-tw'); ?>
                </p>
                <a href="#"
                    class="inline-block bg-uab-green hover:bg-dragons-lair-green text-white px-6 py-2 rounded-md font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap"><?php echo esc_html__('Read more', 'uabwp-tw'); ?></a>
            </div>
        </div>

        <div class="relative">
            <div>
                <h3 class="text-3xl font-bold mb-4 font-kulturista text-black">
                    <?php echo esc_html__('Item 3', 'uabwp-tw'); ?>
                </h3>
                <span class="bg-uab-green block h-1 mb-5 w-12"></span>
                <p class="text-lg mb-6 font-aktiv-grotesk text-black">
                    <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius nunc mollis, laoreet orci id, feugiat ex. Quisque varius, sem at finibus accumsan, enim purus aliquam eros, nec cursus eros metus ut quam.', 'uabwp-tw'); ?>
                </p>
                <a href="#"
                    class="inline-block bg-uab-green hover:bg-dragons-lair-green text-white px-6 py-2 rounded-md font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap"><?php echo esc_html__('Read more', 'uabwp-tw'); ?></a>
            </div>
        </div>
    </div>
</div>
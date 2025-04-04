<?php
/**
 * Title: Two Column
 * Slug: uabwp-tw/2col
 * Categories: featured, columns, text, uab
 * Keywords: columns, text, content, button
 * Block Types: core/group, core/heading, core/paragraph, core/buttons
 * Description: A responsive two-column layout with text in the left column, and text plus buttons in the right column.
 * Viewport Width: 1340
 */
?>
<div class="max-w-7xl mx-auto px-6 py-10"> <?php // Removed alignfull wrapper and background ?>
    <div class="flex flex-col lg:flex-row gap-10">

        <!-- Left Column -->
        <div class="lg:w-1/2">
            <h3 class="text-3xl font-bold mb-4 font-kulturista text-black">
                <?php echo esc_html__('Left Column Heading', 'uabwp-tw'); ?>
            </h3>
            <p class="text-lg mb-6 font-aktiv-grotesk text-black">
                <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius nunc mollis, laoreet orci id, feugiat ex. Quisque varius, sem at finibus accumsan.', 'uabwp-tw'); ?>
            </p>
            <p class="text-lg font-aktiv-grotesk text-black">
                <?php echo esc_html__('Enim purus aliquam eros, nec cursus eros metus ut quam. Aliquam aliquam, elit vitae molestie facilisis, nisi elit sodales felis.', 'uabwp-tw'); ?>
            </p>
        </div>

        <!-- Right Column -->
        <div class="lg:w-1/2">
            <h3 class="text-3xl font-bold mb-4 font-kulturista text-black">
                <?php echo esc_html__('Right Column Heading', 'uabwp-tw'); ?>
            </h3>
            <p class="text-lg mb-6 font-aktiv-grotesk text-black">
                <?php echo esc_html__('Eget facilisis mauris erat sed ante. Pellentesque pellentesque odio tortor, a aliquet lectus eleifend at. Phasellus vel vehicula dolor.', 'uabwp-tw'); ?>
            </p>
            <div class="mt-6 flex gap-4">
                <a href="#"
                    class="inline-block bg-uab-green hover:bg-dragons-lair-green text-white px-6 py-2 rounded-md font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap"><?php echo esc_html__('Learn More', 'uabwp-tw'); ?></a>
                <a href="#"
                    class="inline-block border border-uab-green text-uab-green px-6 py-2 rounded-md hover:bg-uab-green hover:text-white transition-colors font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap"><?php echo esc_html__('View Details', 'uabwp-tw'); ?></a>
            </div>
        </div>

    </div>
</div>
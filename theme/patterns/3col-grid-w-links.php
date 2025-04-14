<?php
/**
 * Title: Three Column Grid with Links
 * Slug: uabwp-tw/3col-grid-w-links
 * Categories: featured, grid, text, uab
 * Keywords: grid, columns, links, text, content
 * Block Types: core/group, core/heading, core/paragraph, core/buttons
 * Description: A responsive three-column grid layout with headings, descriptive text, and call-to-action links.
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
                    class="inline-flex items-center text-uab-green font-bold font-aktiv-grotesk text-base not-prose"><span
                        class="hover:underline"><?php echo esc_html__('Learn More', 'uabwp-tw'); ?></span><i
                        class="fa-solid fa-arrow-right ml-1.5" aria-hidden="true"></i></a>
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
                    class="inline-flex items-center text-uab-green font-bold font-aktiv-grotesk text-base not-prose"><span
                        class="hover:underline"><?php echo esc_html__('Learn More', 'uabwp-tw'); ?></span><i
                        class="fa-solid fa-arrow-right ml-1.5" aria-hidden="true"></i></a>
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
                    class="inline-flex items-center text-uab-green font-bold font-aktiv-grotesk text-base not-prose"><span
                        class="hover:underline"><?php echo esc_html__('Learn More', 'uabwp-tw'); ?></span><i
                        class="fa-solid fa-arrow-right ml-1.5" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
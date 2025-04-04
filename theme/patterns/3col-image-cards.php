<?php
/**
 * Title: Three Column Image Cards
 * Slug: uabwp-tw/3col-image-cards
 * Categories: featured, grid, text, image, uab
 * Keywords: grid, columns, image, text, content, cards
 * Block Types: core/group, core/heading, core/paragraph, core/image, core/buttons
 * Description: A responsive three-column grid layout displaying cards, each with an image, heading, description, and button.
 * Viewport Width: 1340
 */
?>
<div class="max-w-7xl mx-auto px-6">
    <div class="flex flex-col md:flex-row gap-8 mb-12">

        <!-- Card 1 -->
        <div class="bg-white  shadow-lg overflow-hidden flex flex-col md:w-1/3">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/amber.webp'); ?>"
                alt="<?php esc_attr_e('Amber', 'uabwp-tw'); // Descriptive alt text needed ?>"
                class="w-full h-64 object-cover"> <?php // Increased height ?>
            <div class="p-6 flex flex-col flex-grow">
                <p class="text-base mb-6 font-aktiv-grotesk text-black flex-grow">
                    <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin varius nunc mollis, laoreet orci id, feugiat ex.', 'uabwp-tw'); ?>
                </p>
                <div class="mt-auto">
                    <a href="#"
                        class="inline-block bg-uab-green hover:bg-dragons-lair-green text-white px-6 py-2 rounded-md font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap"><?php echo esc_html__('Learn More', 'uabwp-tw'); ?><i
                            class="fa-solid fa-up-right-from-square ml-1.5" aria-hidden="true"></i><span
                            class="sr-only"> <?php esc_html_e('Learn more', 'uabwp-tw'); ?></span></a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white  shadow-lg overflow-hidden flex flex-col md:w-1/3">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/doc.webp'); ?>"
                alt="<?php esc_attr_e('Doc', 'uabwp-tw'); // Descriptive alt text needed ?>"
                class="w-full h-64 object-cover">
            <div class="p-6 flex flex-col flex-grow">
                <p class="text-base mb-6 font-aktiv-grotesk text-black flex-grow">
                    <?php echo esc_html__('Quisque varius, sem at finibus accumsan, enim purus aliquam eros, nec cursus eros metus ut quam.', 'uabwp-tw'); ?>
                </p>
                <div class="mt-auto">
                    <a href="#"
                        class="inline-block bg-uab-green hover:bg-dragons-lair-green text-white px-6 py-2 rounded-md font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap"><?php echo esc_html__('Learn More', 'uabwp-tw'); ?><span
                            class="sr-only"> <?php esc_html_e('Learn more', 'uabwp-tw'); ?></span></a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white  shadow-lg overflow-hidden flex flex-col md:w-1/3">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/darcy.webp'); ?>"
                alt="<?php esc_attr_e('Darcy', 'uabwp-tw'); // Descriptive alt text needed ?>"
                class="w-full h-64 object-cover">
            <div class="p-6 flex flex-col flex-grow">
                <p class="text-base mb-6 font-aktiv-grotesk text-black flex-grow">
                    <?php echo esc_html__('Aliquam aliquam, elit vitae molestie facilisis, nisi elit sodales felis, eget facilisis mauris erat sed ante.', 'uabwp-tw'); ?>
                </p>
                <div class="mt-auto">
                    <a href="#"
                        class="inline-block bg-uab-green hover:bg-dragons-lair-green text-white px-6 py-2 rounded-md font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap"><?php echo esc_html__('Learn More', 'uabwp-tw'); ?><i
                            class="fa-solid fa-arrow-right ml-1.5" aria-hidden="true"></i><span class="sr-only">
                            <?php esc_html_e('Learn more', 'uabwp-tw'); ?></span></a>
                </div>
            </div>
        </div>

    </div>
</div>
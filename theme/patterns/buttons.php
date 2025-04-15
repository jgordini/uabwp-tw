<?php
/**
 * Title: Buttons
 * Slug: uabwp-tw/buttons
 * Categories: featured, text, uab
 * Keywords: button, link, cta, call to action
 * Block Types: core/buttons
 * Description: A set of styled buttons including primary, secondary, and text link variations.
 * Viewport Width: 600
 */
?>
<div class="max-w-7xl mx-auto px-6 py-6">
    <div class="space-y-7">
        <!-- Primary Button -->
        <div>
            <h3 class="text-lg font-bold mb-2 font-kulturista text-black">
                <?php echo esc_html__('Primary Button', 'uabwp-tw'); ?>
            </h3>
            <a href="#"
                class="not-prose inline-block bg-uab-green hover:bg-dragons-lair-green text-white px-6 py-2 rounded-md font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap"><?php echo esc_html__('Primary Button', 'uabwp-tw'); ?></a>
        </div>

        <!-- Secondary Button (Outlined) -->
        <div>
            <h3 class="text-lg font-bold mb-2 font-kulturista text-black">
                <?php echo esc_html__('Secondary Button', 'uabwp-tw'); ?>
            </h3>
            <a href="#"
                class="not-prose inline-block border border-uab-green text-uab-green px-6 py-2 rounded-md hover:bg-uab-green hover:text-white transition-colors font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap"><?php echo esc_html__('Secondary Button', 'uabwp-tw'); ?></a>
        </div>

        <!-- Text Link with Icon -->
        <div>
            <h3 class="text-lg font-bold mb-2 font-kulturista text-black">
                <?php echo esc_html__('Text Link with Icon', 'uabwp-tw'); ?>
            </h3>
            <a href="#"
                class="not-prose inline-flex items-center text-uab-green font-bold font-aktiv-grotesk text-base"><span
                    class="hover:underline"><?php echo esc_html__('Text Link', 'uabwp-tw'); ?></span><i
                    class="fa-solid fa-arrow-right ml-1.5" aria-hidden="true"></i></a>
        </div>

        <!-- Button Group (Multiple Buttons) -->
        <div>
            <h3 class="text-lg font-bold mb-2 font-kulturista text-black">
                <?php echo esc_html__('Button Group', 'uabwp-tw'); ?>
            </h3>
            <div class="flex flex-wrap gap-4">
                <a href="#"
                    class="not-prose inline-block bg-uab-green hover:bg-dragons-lair-green text-white px-6 py-2 rounded-md font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap"><?php echo esc_html__('Primary Button', 'uabwp-tw'); ?></a>
                <a href="#"
                    class="not-prose inline-block border border-uab-green text-uab-green px-6 py-2 rounded-md hover:bg-uab-green hover:text-white transition-colors font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap"><?php echo esc_html__('Secondary Button', 'uabwp-tw'); ?></a>
            </div>
        </div>
    </div>
</div>
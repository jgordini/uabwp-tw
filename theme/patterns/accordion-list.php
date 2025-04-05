<?php
/**
 * Title: Accordion List
 * Slug: uabwp-tw/accordion-list
 * Categories: uab, text, list
 * Keywords: accordion, toggle, collapse, faq, list
 * Description: A list of accordion items with a surrounding border and borders between items. Requires JavaScript for interaction.
 * Block Types: core/pattern
 */
?>

<div class="accordion-list bg-white border border-gray-200 rounded"> <?php // Added rounded for aesthetics ?>

    <?php // Accordion Item 1 - With bottom border ?>
    <div class="accordion-item border-b border-gray-200"><button
            class="accordion-list-toggle accordion-toggle w-full bg-white text-black flex justify-between items-center px-4 py-3"><span
                class="text-xl text-black"><?php echo esc_html__('Accordion Title 1', 'uabwp-tw'); ?></span><i
                class="fa-solid accordion-icon fa-plus"></i></button>
        <div class="accordion-content px-5 py-4">
            <p class="text-lg leading-5">
                <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'uabwp-tw'); ?>
            </p>
        </div>
    </div>

    <?php // Accordion Item 2 - With bottom border ?>
    <div class="accordion-item border-b border-gray-200"><button
            class="accordion-list-toggle accordion-toggle w-full bg-white text-black flex justify-between items-center px-4 py-3"><span
                class="text-xl text-black"><?php echo esc_html__('Accordion Title 2', 'uabwp-tw'); ?></span><i
                class="fa-solid accordion-icon fa-plus"></i></button>
        <div class="accordion-content px-5 py-4">
            <p class="text-lg leading-5">
                <?php echo esc_html__('Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'uabwp-tw'); ?>
            </p>
        </div>
    </div>

    <?php // Accordion Item 3 - No bottom border (last item) ?>
    <div class="accordion-item"><button
            class="accordion-list-toggle accordion-toggle w-full bg-white text-black flex justify-between items-center px-4 py-3"><span
                class="text-xl text-black"><?php echo esc_html__('Accordion Title 3', 'uabwp-tw'); ?></span><i
                class="fa-solid accordion-icon fa-plus"></i></button>
        <div class="accordion-content px-5 py-4">
            <p class="text-lg leading-5">
                <?php echo esc_html__('Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'uabwp-tw'); ?>
            </p>
        </div>
    </div>

</div>
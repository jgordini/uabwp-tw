<?php
/**
 * Title: Accordion Single
 * Slug: uabwp-tw/accordion-single
 * Categories: uab, text, list
 * Keywords: accordion, toggle, collapse, faq, single, item, list
 * Description: A single accordion item with a surrounding border. Requires JavaScript for interaction.
 * Block Types: core/pattern
 */
?>

<div class="accordion-list bg-white border border-gray-200 rounded"> <?php // Added rounded for aesthetics ?>

    <?php // Accordion Item ?>
    <div class="accordion-item"><button
            class="accordion-list-toggle accordion-toggle w-full bg-white text-black flex justify-between items-center px-4 py-3"><span
                class="text-xl text-black"><?php echo esc_html__('Accordion Title', 'uabwp-tw'); ?></span><i
                class="fa-solid accordion-icon fa-plus"></i></button>
        <div class="accordion-content px-5 py-4">
            <p class="text-lg leading-7">
                <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'uabwp-tw'); ?>
            </p>
        </div>
    </div>

</div>
<?php
/**
 * Title: Accordion Item
 * Slug: uabwp-tw/accordion-item
 * Categories: uab, text, list
 * Keywords: accordion, toggle, collapse, faq, item, list
 * Description: A single accordion item styled with a white background toggle and basic content structure. Intended for use within a container block where list-level styles (like borders) can be applied. Requires JavaScript for interaction.
 * Block Types: core/pattern
 */
?>

<div class="accordion-item"><?php // Accordion Toggle Button - Styled like the example ?><button
        class="accordion-list-toggle accordion-toggle w-full bg-uab-green text-white flex justify-between items-center px-4 py-3"><span
            class="text-xl text-white"><?php echo esc_html__('Accordion Title Here', 'uabwp-tw'); ?></span><?php // Icon state handled by JS, default to closed ?><i
            class="fa-solid accordion-icon fa-plus"></i></button><?php // Accordion Content Panel - Visibility handled by JavaScript, default hidden ?>
    <div class="accordion-content px-5">
        <p class="text-lg leading-5">
            <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'uabwp-tw'); ?>
        </p>
    </div>
</div>
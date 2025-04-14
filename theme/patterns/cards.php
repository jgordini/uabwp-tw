<?php
/**
 * Title: Single Image Card (Divided)
 * Slug: uabwp-tw/card-single-divided
 * Categories: uab, text, image
 * Keywords: card, image, content, link, button, divided
 * Block Types: core/group, core/image, core/paragraph, core/buttons, core/button
 * Description: A single card with an editable image, description, and button, separated by a divider.
 * Viewport Width: 600
 * Inserter: true
 */
?>
<!-- wp:group {"className":"divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow","layout":{"type":"default"}} -->
<div class="wp-block-group divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow">
    <!-- wp:group {"className":"px-4 py-5 sm:p-6","layout":{"type":"default"}} -->
    <div class="wp-block-group px-4 py-5 sm:p-6">
        <!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"w-full object-cover mb-0 aspect-[4/3]"} -->
        <figure class="wp-block-image size-large w-full object-cover mb-0 aspect-[4/3]"><img
                src="<?php echo esc_url(get_template_directory_uri() . '/images/placeholder.webp'); ?>"
                alt="Placeholder image" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"px-4 py-4 sm:px-6","layout":{"type":"default"}} -->
    <div class="wp-block-group px-4 py-4 sm:px-6">
        <!-- wp:paragraph {"className":"text-base mb-6 font-aktiv-grotesk text-black","placeholder":"Enter card description..."} -->
        <p class="text-base mb-6 font-aktiv-grotesk text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Proin varius nunc mollis, laoreet orci id, feugiat ex.</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"className":"mt-auto"} -->
        <div class="wp-block-buttons mt-auto">
            <!-- wp:button {"backgroundColor":"uab-green","textColor":"white","className":"is-style-fill font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap","style":{"border":{"radius":"0.375rem"}}} -->
            <div
                class="wp-block-button is-style-fill font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap">
                <a class="wp-block-button__link has-white-color has-uab-green-background-color has-text-color has-background wp-element-button"
                    href="#" style="border-radius:0.375rem">Learn More</a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->
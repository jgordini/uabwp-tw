<?php
/**
 * Title: Grid Stack Right with Links
 * Slug: uabwp-tw/grid-stack-right-links
 * Categories: featured, grid, text, image, uab
 * Keywords: grid, columns, image, text, content, stack, right, feature, links
 * Block Types: core/group, core/heading, core/paragraph, core/image, core/buttons, core/list
 * Description: A responsive two-column layout with text content (pre-header, description, link list, button) on the left and an image on the right, stacking vertically on smaller screens.
 * Viewport Width: 1340
 */
?>
<div class="flex flex-col-reverse lg:flex-row lg:items-center gap-10 mb-10 max-w-7xl mx-auto px-6 sm:px-0">
    <!-- Content Column -->
    <div class="lg:w-1/2 md:px-4 lg:p-6">
        <!-- Pre-header -->
        <?php // Adapting badge style with Tailwind ?>
        <p class="mb-2">
            <span
                class="inline-block bg-campus-green-10 text-uab-green text-xs font-semibold tracking-widest uppercase px-2 py-1"><?php echo esc_html__('Lorem Ipsum Dolor Sit', 'uabwp-tw'); ?></span>
        </p>

        <!-- Title -->
        <h3 class="text-3xl font-bold mb-3 font-kulturista text-black">
            <?php echo esc_html__('Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit', 'uabwp-tw'); ?>
        </h3>
        <span class="bg-uab-green block h-1 mb-5 w-12"></span>

        <!-- Description -->
        <p class="mb-6 text-lg leading-relaxed font-aktiv-grotesk text-black">
            <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nec libero nec risus varius consequat. Sed dapibus justo ac lectus ullamcorper, at lacinia libero venenatis.', 'uabwp-tw'); ?>
        </p>
        <!-- List Group -->
        <ul class="mb-6 divide-y divide-gray-200 border-t border-b border-gray-200">
            <li>
                <a href="#"
                    class="block py-2 hover:pl-2.5 hover:bg-gray-100 transition-all duration-150 ease-in-out text-gray-700 font-aktiv-grotesk text-base no-underline hover:no-underline "><?php echo esc_html__('Dolor Sit Amet', 'uabwp-tw'); ?><i
                        class="fa-solid fa-arrow-right ml-1.5 float-right" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="#"
                    class="block py-2 hover:pl-2.5 hover:bg-gray-100 transition-all duration-150 ease-in-out text-gray-700 font-aktiv-grotesk text-base no-underline hover:no-underline "><?php echo esc_html__('Consectetur Adipiscing', 'uabwp-tw'); ?><i
                        class="fa-solid fa-up-right-from-square ml-1.5 float-right" aria-hidden="true"></i><span
                        class="sr-only"> <?php esc_html_e('Opens an external link.', 'uabwp-tw'); ?></span></a>
            </li>
            <li>
                <a href="#"
                    class="block py-2 hover:pl-2.5 hover:bg-gray-100 transition-all duration-150 ease-in-out text-gray-700 font-aktiv-grotesk text-base no-underline hover:no-underline "><?php echo esc_html__('Vestibulum Malesuada', 'uabwp-tw'); ?><i
                        class="fa-solid fa-arrow-right ml-1.5 float-right" aria-hidden="true"></i></a>
            </li>
            <li>
                <a href="#"
                    class="block py-2 hover:pl-2.5 hover:bg-gray-100 transition-all duration-150 ease-in-out text-gray-700 font-aktiv-grotesk text-base no-underline hover:no-underline "><?php echo esc_html__('Labore et Dolore', 'uabwp-tw'); ?><i
                        class="fa-solid fa-arrow-right ml-1.5 float-right" aria-hidden="true"></i></a>
            </li>
        </ul>

        <!-- Button -->
        <?php // Using theme's solid button style ?>
        <a href="#"
            class="inline-block bg-uab-green hover:bg-dragons-lair-green text-white px-6 py-2 rounded-md font-aktiv-grotesk text-base no-underline hover:no-underline whitespace-nowrap not-prose"><?php echo esc_html__('Lorem Ipsum', 'uabwp-tw'); ?><i
                class="fa-solid fa-up-right-from-square ml-1.5" aria-hidden="true"></i><span class="sr-only">
                <?php esc_html_e('Learn more', 'uabwp-tw'); ?></span></a>
    </div>

    <!-- Image Column -->
    <div class="lg:w-1/2">
        <?php // TODO: Replace with dynamic image source or block binding ?>
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/anthro-class.webp'); ?>" <?php // Use specified placeholder ?> alt="<?php esc_attr_e('Placeholder image', 'uabwp-tw'); ?>"
            class="w-full h-auto object-cover"> <?php // Adjusted object-fit and height ?>
    </div>
</div>
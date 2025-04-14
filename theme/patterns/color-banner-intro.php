<?php
/**
 * Title: Color Banner with Site Intro
 * Slug: uabwp-tw/color-banner-intro
 * Categories: featured, banner, text, uab
 * Keywords: banner, color, introduction, hero, green
 * Block Types: core/group, core/heading, core/paragraph
 * Description: A full-width dragon green banner with a centered, overlapping card containing a title, description, and action links.
 * Viewport Width: 1340
 */
?>
<section class="alignfull mb-0">
    <?php // Changed H2 to be screen-reader only for accessibility as it describes the pattern itself ?>

    <div class="relative w-full md:pb-48">
        <!-- Banner Background -->
        <div class="w-full h-96 bg-dragons-lair-green md:mb-0">
            <?php // Intentionally empty: This div provides the solid color background ?>
        </div>

        <!-- Floating Card - 75% width of banner -->
        <div class="w-full md:absolute md:left-1/2 md:transform md:-translate-x-1/2 md:top-48 md:w-3/4 md:mt-0">
            <div class="shadow-lg bg-white w-full py-20 px-16">
                <div class="max-w-3xl mx-auto">
                    <!-- Card Title -->
                    <h3 class="text-center text-4xl font-kulturista text-black">
                        <?php echo esc_html__('Lorem ipsum dolor', 'uabwp-tw'); ?>
                    </h3>

                    <!-- Card Description -->
                    <p class="text-left md:text-center text-lg leading-7 mt-3 font-aktiv-grotesk text-black">
                        <?php echo esc_html__('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero', 'uabwp-tw'); ?>
                    </p>

                    <!-- Action Links -->
                    <?php // TODO: Consider making links dynamic ?>
                    <div class="mt-8 gap-6 grid grid-cols-2 md:flex md:flex-wrap md:justify-center">
                        <div class="md:w-auto md:flex md:justify-center">
                            <a href="#"
                                class="btn-link-arrow flex items-center items-baseline text-uab-green font-bold not-prose">
                                <span><?php echo esc_html__('Lorem ipsum', 'uabwp-tw'); ?></span>
                                <i class="fa-solid fa-arrow-right ml-1.5 arrow-icon"></i>
                            </a>
                        </div>
                        <div class="md:w-auto md:flex md:justify-center">
                            <a href="#"
                                class="btn-link-arrow flex items-center items-baseline text-uab-green font-bold not-prose">
                                <span><?php echo esc_html__('Lorem ipsum', 'uabwp-tw'); ?></span>
                                <i class="fa-solid fa-arrow-right ml-1.5 arrow-icon"></i>
                            </a>
                        </div>
                        <div class="md:w-auto md:flex md:justify-center">
                            <a href="#"
                                class="btn-link-arrow flex items-center items-baseline text-uab-green font-bold not-prose">
                                <span><?php echo esc_html__('Lorem ipsum', 'uabwp-tw'); ?></span>
                                <i class="fa-solid fa-arrow-right ml-1.5 arrow-icon"></i>
                            </a>
                        </div>
                        <div class="md:w-auto md:flex md:justify-center">
                            <a href="#"
                                class="btn-link-arrow flex items-center items-baseline text-uab-green font-bold not-prose">
                                <span><?php echo esc_html__('Lorem ipsum', 'uabwp-tw'); ?></span>
                                <i class="fa-solid fa-arrow-right ml-1.5 arrow-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
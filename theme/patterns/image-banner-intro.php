<?php
/**
 * Title: Image Banner with Site Intro
 * Slug: uabwp-tw/image-banner-intro
 * Categories: featured, banner, text, uab
 * Keywords: banner, image, introduction, hero
 * Block Types: core/group, core/heading, core/paragraph, core/image
 * Description: A full-width banner image with a centered, overlapping card containing a title, description, and action links.
 * Viewport Width: 1340
 */
?>
<section class="alignfull mb-32">
    <?php // Changed H2 to be screen-reader only for accessibility as it describes the pattern itself ?>

    <div class="relative w-full">
        <!-- Banner Image -->
        <div class="w-full h-96 overflow-hidden mb-64">
            <?php // TODO: Consider replacing placeholder image with a dynamic option or clearer placeholder ?>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/ban-2.webp'); ?>"
                alt="<?php esc_attr_e('Site Banner', 'uabwp-tw'); ?>" class="w-full h-full object-cover">
        </div>

        <!-- Floating Card - 75% width of banner -->
        <div class="absolute left-1/2 transform -translate-x-1/2 top-64 w-3/4">
            <div class="card-shadow bg-white w-full py-20 px-16 rounded-lg">
                <div class="max-w-3xl mx-auto">
                    <!-- Card Title -->
                    <h3 class="text-center text-4xl font-kulturista text-black">
                        <?php echo esc_html__('Lorem ipsum dolor', 'uabwp-tw'); ?>
                    </h3>

                    <!-- Card Description -->
                    <p class="text-center text-lg leading-7 mt-3 font-aktiv-grotesk text-black">
                        <?php echo esc_html__('Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero', 'uabwp-tw'); ?>
                    </p>

                    <!-- Action Links -->
                    <?php // TODO: Consider making links dynamic ?>
                    <div class="flex flex-wrap justify-center md:justify-center mt-8 gap-6">
                        <div class="w-full flex justify-start md:w-auto md:justify-center">
                            <a href="#" class="btn-link-arrow flex items-center text-uab-green font-bold">
                                <span><?php echo esc_html__('Lorem ipsum', 'uabwp-tw'); ?></span>
                                <i class="fa-solid fa-arrow-right ml-1.5 arrow-icon"></i>
                            </a>
                        </div>
                        <div class="w-full flex justify-start md:w-auto md:justify-center">
                            <a href="#" class="btn-link-arrow flex items-center text-uab-green font-bold">
                                <span><?php echo esc_html__('Lorem ipsum', 'uabwp-tw'); ?></span>
                                <i class="fa-solid fa-arrow-right ml-1.5 arrow-icon"></i>
                            </a>
                        </div>
                        <div class="w-full flex justify-start md:w-auto md:justify-center">
                            <a href="#" class="btn-link-arrow flex items-center text-uab-green font-bold">
                                <span><?php echo esc_html__('Lorem ipsum', 'uabwp-tw'); ?></span>
                                <i class="fa-solid fa-arrow-right ml-1.5 arrow-icon"></i>
                            </a>
                        </div>
                        <div class="w-full flex justify-start md:w-auto md:justify-center">
                            <a href="#" class="btn-link-arrow flex items-center text-uab-green font-bold">
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
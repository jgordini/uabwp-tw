<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uabwp-tw
 */

// Don't display anything if a menu isn't assigned to the 'sidebar' location.
if (!has_nav_menu('sidebar')) {
    return;
}

// Ensure the walker class is loaded.
require_once get_template_directory() . '/inc/walkers/class-sidebar-nav-walker.php';

?>
<?php // Match the outer container style from the HTML example ?>
<aside id="secondary" class="widget-area w-full lg:w-1/4 border border-gray-200">
    <div class="border-t-2 border-uab-green">
        <?php // Optional: Add a menu header like the example if desired (can be a widget or hardcoded) ?>
        <?php /*
   <div class="bg-white border-b border-gray-200">
       <div class="px-4 py-5">
           <h4 class="text-xl font-bold text-uab-green">
               <?php // Replace with dynamic title if needed, e.g., from a widget or customizer setting ?>
               <?php echo esc_html__( 'Sidebar Menu', 'uabwp-tw' ); ?>
           </h4>
       </div>
   </div>
   */ ?>

        <nav id="sidebar-navigation" class="sidebar-navigation bg-white"
            aria-label="<?php esc_attr_e('Sidebar Menu', 'uabwp-tw'); ?>">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'sidebar',
                    'menu_id' => 'sidebar-menu',
                    'container' => false, // Let the nav tag wrap it
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Remove default ul classes, walker handles li styling
                    'fallback_cb' => false,
                    'depth' => 0, // Walker handles depth styling, set to 0 to allow all levels
                    'walker' => new UABWP_TW_Sidebar_Nav_Walker(), // Use the custom walker
                )
            );
            ?>
        </nav><!-- #sidebar-navigation -->
    </div>
</aside><!-- #secondary -->
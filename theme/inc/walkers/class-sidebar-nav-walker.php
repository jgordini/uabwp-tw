<?php
/**
 * Custom Walker class for styling the sidebar navigation menu with Tailwind CSS.
 *
 * Adapts the output of wp_nav_menu to match the UAB sidebar example.
 *
 * @package uabwp-tw
 */

declare(strict_types=1);

if (!class_exists('UABWP_TW_Sidebar_Nav_Walker')) {
    /**
     * Class UABWP_TW_Sidebar_Nav_Walker.
     */
    class UABWP_TW_Sidebar_Nav_Walker extends Walker_Nav_Menu
    {
        /**
         * Starts the element output.
         *
         * @param string   $output            Used to append additional content (passed by reference).
         * @param WP_Post  $data_object       Menu item data object.
         * @param int      $depth             Depth of menu item. Used for padding.
         * @param stdClass $args              An object of wp_nav_menu() arguments.
         * @param int      $current_object_id Optional. ID of the current menu item. Default 0.
         */
        public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0): void
        {
            // Restores the more descriptive, less generic item name.
            $menu_item = $data_object;

            // Get classes and attributes.
            $classes = empty($menu_item->classes) ? array() : (array) $menu_item->classes;
            $classes[] = 'menu-item-' . $menu_item->ID;

            // Args setup.
            $args = apply_filters('nav_menu_item_args', $args, $menu_item, $depth);

            // --- Custom Styling Logic --- 
            $li_classes = ['bg-white', 'border-b', 'border-gray-200', 'relative'];
            $a_classes = ['block', 'transition-colors', 'duration-200', 'text-uab-green', 'text-lg', 'no-underline'];
            $padding = 'px-6 py-5'; // Default padding for depth 0

            if ($depth === 0) {
                // Top level items
                $a_classes[] = 'font-bold';
                // Check if item description is set to 'heading' to make it non-linked uppercase heading
                if (isset($menu_item->description) && strtolower($menu_item->description) === 'heading') {
                    $a_classes[] = 'uppercase';
                    $link_content = esc_html($menu_item->title);
                    // Remove link attributes for headings
                    $atts = array(
                        'class' => implode(' ', $a_classes) . ' ' . $padding,
                    );
                    $item_output = sprintf(
                        '<span %s>%s</span>',
                        $this->build_atts($atts),
                        $link_content
                    );
                } else {
                    // Standard linkable top-level item
                    $a_classes[] = 'hover:bg-uab-green';
                    $a_classes[] = 'hover:text-white';
                    $is_current_or_ancestor = in_array('current-menu-item', $classes, true) || in_array('current-menu-ancestor', $classes, true);
                    if ($is_current_or_ancestor) {
                        $li_classes = array_diff($li_classes, ['bg-white']); // Remove bg-white
                        $li_classes[] = 'bg-uab-green';
                        $a_classes = array_diff($a_classes, ['text-uab-green']); // Remove text-uab-green
                        $a_classes[] = 'text-white';
                    }
                }
            } elseif ($depth === 1) {
                // Second level items
                $padding = 'pl-9 pr-6 py-5'; // Indented padding
                $a_classes[] = 'hover:bg-uab-green';
                $a_classes[] = 'hover:text-white';
                $is_current = in_array('current-menu-item', $classes, true);
                if ($is_current) {
                    $li_classes = array_diff($li_classes, ['bg-white']);
                    $li_classes[] = 'bg-uab-green';
                    $a_classes = array_diff($a_classes, ['text-uab-green']);
                    $a_classes[] = 'text-white';
                }
            } else {
                // Deeper levels - use same padding as level 1 for now, adjust if needed
                $padding = 'pl-10 pr-6 py-5'; // Further indent
                $a_classes[] = 'hover:bg-uab-green';
                $a_classes[] = 'hover:text-white';
                $is_current = in_array('current-menu-item', $classes, true);
                if ($is_current) {
                    $li_classes = array_diff($li_classes, ['bg-white']);
                    $li_classes[] = 'bg-uab-green';
                    $a_classes = array_diff($a_classes, ['text-uab-green']);
                    $a_classes[] = 'text-white';
                }
            }

            // Build the <li> class string
            $class_names = implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $menu_item, $args, $depth));
            $class_names = $class_names ? ' class="' . esc_attr($class_names) . ' ' . esc_attr(implode(' ', $li_classes)) . '"' : ' class="' . esc_attr(implode(' ', $li_classes)) . '"';

            // Build the <li> ID string.
            $id = apply_filters('nav_menu_item_id', 'menu-item-' . $menu_item->ID, $menu_item, $args, $depth);
            $id = $id ? ' id="' . esc_attr($id) . '"' : '';

            // Start the <li> output.
            $output .= '<li' . $id . $class_names . '>';

            // Build the <a> attributes.
            if (!isset($item_output)) { // Only build link if it wasn't overridden for a heading
                $atts = array();
                $atts['title'] = !empty($menu_item->attr_title) ? $menu_item->attr_title : '';
                $atts['target'] = !empty($menu_item->target) ? $menu_item->target : '';
                if ('_blank' === $menu_item->target && empty($menu_item->xfn)) {
                    $atts['rel'] = 'noopener noreferrer';
                } else {
                    $atts['rel'] = $menu_item->xfn;
                }
                $atts['href'] = !empty($menu_item->url) ? $menu_item->url : '';
                $atts['aria-current'] = $menu_item->current ? 'page' : '';
                $atts['class'] = implode(' ', $a_classes) . ' ' . $padding; // Combine base classes and padding

                $atts = apply_filters('nav_menu_link_attributes', $atts, $menu_item, $args, $depth);

                // Build the <a> element.
                $title = apply_filters('the_title', $menu_item->title, $menu_item->ID);
                $title = apply_filters('nav_menu_item_title', $title, $menu_item, $args, $depth);

                $item_output = $args->before;
                $item_output .= '<a' . $this->build_atts($atts) . '>';
                $item_output .= $args->link_before . $title . $args->link_after;
                $item_output .= '</a>';
                $item_output .= $args->after;
            }

            // Append the item output to the main output.
            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $menu_item, $depth, $args);
        }

        /**
         * Ends the element output, if needed.
         */
        public function end_el(&$output, $data_object, $depth = 0, $args = null): void
        {
            $output .= "</li>\n"; // Ensure closing </li> tag
        }

        /**
         * Starts the list before the elements are added.
         */
        public function start_lvl(&$output, $depth = 0, $args = null): void
        {
            if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
                $t = '';
                $n = '';
            } else {
                $t = "\t";
                $n = "\n";
            }
            $indent = str_repeat($t, $depth);

            // Default classes for the submenu <ul>
            $classes = array('sub-menu', 'bg-white'); // Add desired classes here
            $class_names = implode(' ', apply_filters('nav_menu_submenu_css_class', $classes, $args, $depth));

            // Build attributes for the <ul> element
            $atts = array();
            $atts['class'] = !empty($class_names) ? $class_names : '';

            // Apply the filter introduced in WP 6.3
            $atts = apply_filters('nav_menu_submenu_attributes', $atts, $args, $depth);

            // Build the attributes string using the helper
            $attributes = $this->build_atts($atts);

            $output .= "{$n}{$indent}<ul{$attributes}>{$n}"; // Use the generated attributes string
        }

        /**
         * Ends the list of after the elements are added.
         */
        public function end_lvl(&$output, $depth = 0, $args = null): void
        {
            if (isset($args->item_spacing) && 'discard' === $args->item_spacing) {
                $t = '';
                $n = '';
            } else {
                $t = "\t";
                $n = "\n";
            }
            $indent = str_repeat($t, $depth);
            $output .= "$indent</ul>{$n}";
        }
    }
}
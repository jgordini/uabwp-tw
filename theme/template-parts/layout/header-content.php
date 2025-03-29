<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uabwp-tw
 */

?>

<?php // IMPORTANT: Ensure Tailwind CSS, Font Awesome, and Typekit fonts are enqueued in functions.php ?>

<header id="masthead" class="w-full relative shadow-md mb-12 site-header">
	<?php // Added site-header class for potential global styling ?>

	<?php // Top Bar ?>
	<div class="bg-uab-green w-full h-12 flex items-center px-4">
		<div class="text-white flex items-center">
			<?php // Consider making this dynamic via theme options if needed ?>
			<span class="mr-3 uppercase text-sm tracking-wide">The University of Alabama at Birmingham</span>
		</div>
		<div class="ml-auto flex items-center">
			<?php // This could link to the main UAB site or be a menu location ?>
			<a href="#" class="text-white text-sm hover:underline">Explore UAB</a>
			<i class="fa-solid fa-globe text-white ml-2 text-xs"></i>
		</div>
	</div>

	<?php // Main Header Content Area (Site Title, Description, Search) ?>
	<div class="bg-white p-10">
		<div class="flex justify-between items-center">
			<div class="site-branding"> <?php // Added wrapper for branding ?>
				<?php
				if (is_front_page() && is_home()): // Check if it's the blog posts index or static front page
					?>
					<h1 class="text-3xl text-gray-700 font-bold font-kulturista"><a
							href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
					</h1>
					<?php
				else:
					?>
					<p class="text-3xl text-gray-700 font-bold font-kulturista"><a
							href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
					<?php
				endif;

				$uabwp_tw_description = get_bloginfo('description', 'display');
				if ($uabwp_tw_description || is_customize_preview()):
					?>
					<p class="site-description text-lg text-gray-700 uppercase mt-4">
						<?php echo $uabwp_tw_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
					</p>
				<?php endif; ?>
			</div><?php // Search Icon/Trigger - Functionality needs implementation ?>
			<div class="search-toggle-wrap">
				<button aria-label="<?php esc_attr_e('Open Search', 'uabwp-tw'); ?>"
					class="search-toggle bg-gray-200 w-10 h-10 rounded-full flex items-center justify-center text-black hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-uab-gold">
					<i class="fa-solid fa-magnifying-glass"></i>
				</button>
				<?php // You might want to add get_search_form() here, styled and hidden initially ?>
			</div>
		</div>
	</div>

	<?php // Main Navigation Area ?>
	<nav id="site-navigation" class="main-navigation bg-white pl-10 pb-10 flex justify-start items-center"
		aria-label="<?php esc_attr_e('Main Navigation', 'uabwp-tw'); ?>">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'menu-1', // Corresponds to the location registered in functions.php
				'menu_id' => 'primary-menu',
				'container' => false, // Don't wrap the ul in a div
				'items_wrap' => '<ul id="%1$s" class="%2$s flex flex-wrap justify-start items-center gap-x-4 gap-y-2">%3$s</ul>', // Added Tailwind flex classes
				'fallback_cb' => false, // Don't show a fallback menu if 'menu-1' isn't set
				// 'walker'      => new Your_Tailwind_Nav_Walker(), // IMPORTANT: Uncomment and use a custom Walker class for full styling (dropdown icons, etc.)
			)
		);
		?>
		<?php // Add a mobile menu button here if needed, linking its controls to the #primary-menu ?>
		<button class="menu-toggle ml-auto mr-4 lg:hidden" aria-controls="primary-menu" aria-expanded="false">
			<?php // Example Mobile Button - Needs styling and JS ?>
			<span class="sr-only"><?php esc_html_e('Primary Menu', 'uabwp-tw'); ?></span>
			<i class="fa-solid fa-bars"></i> <?php // Example Icon ?>
		</button>
	</nav>
</header>
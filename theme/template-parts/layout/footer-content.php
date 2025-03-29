<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package uabwp-tw
 */

?>

<div class="bg-dragons-lair-green text-white p-8 mb-16">
	<div class="container mx-auto">
		<div class="grid grid-cols-1 md:grid-cols-4 gap-8">
			<!-- Unit Info -->
			<div class="md:col-span-2">
				<?php // TODO: Make Unit Title dynamic (Theme Option?) ?>
				<h3 class="text-3xl font-bold mb-4 text-white"><?php echo esc_html__('Lorem Ipsum', 'uabwp-tw'); ?></h3>
				<?php // TODO: Make address dynamic (Theme Option?) ?>
				<p class="mb-6">
					Lorem Ipsum Building (LIB)<br>1665 University Boulevard<br>Birmingham,
					Alabama 35233
				</p>
				<div class="flex flex-col md:flex-row md:items-center mb-6">
					<?php // TODO: Make phone dynamic (Theme Option?) ?>
					<a href="tel:2059344993" class="text-white mb-2 md:mb-0 md:mr-8">(205) 934-4993</a>
					<?php // TODO: Make email dynamic (Theme Option?) ?>
					<a href="mailto:lorem@uab.edu" class="text-white">lorem@uab.edu</a>
				</div>
				<div class="mb-6 flex flex-wrap items-center gap-4">
					<?php // TODO: Make Contact Us link dynamic (Theme Option?) ?>
					<a href="#contact-us-link" role="button"
						class="bg-evergreen text-white px-6 py-2 rounded-md hover:bg-uab-green transition-colors duration-150 ease-in-out">
						<?php esc_html_e('Contact Us', 'uabwp-tw'); ?>
					</a>
					<?php // TODO: Make social links dynamic (Theme Options?) ?>
					<div class="flex space-x-4">
						<a href="#facebook" class="text-white hover:text-opacity-80"
							aria-label="<?php esc_attr_e('Facebook', 'uabwp-tw'); ?>">
							<i class="fa-brands fa-facebook text-2xl"></i>
						</a>
						<a href="#instagram" class="text-white hover:text-opacity-80"
							aria-label="<?php esc_attr_e('Instagram', 'uabwp-tw'); ?>">
							<i class="fa-brands fa-instagram text-2xl"></i>
						</a>
						<a href="#twitter" class="text-white hover:text-opacity-80"
							aria-label="<?php esc_attr_e('Twitter', 'uabwp-tw'); ?>">
							<i class="fa-brands fa-twitter text-2xl"></i>
						</a>
						<a href="#youtube" class="text-white hover:text-opacity-80"
							aria-label="<?php esc_attr_e('YouTube', 'uabwp-tw'); ?>">
							<i class="fa-brands fa-youtube text-2xl"></i>
						</a>
					</div>
				</div>
				<?php // TODO: Replace with dynamic logos (Theme Options?); ensure alt text is descriptive ?>
				<div class="bg-gray-200 h-20 w-32 flex items-center justify-center mb-2">
					<?php /* <img src="<?php echo esc_url( get_template_directory_uri() . '/images/your-unit-logo.png' ); ?>" alt="Unit Logo Description" class="max-h-full max-w-full"> */ ?>
					<span class="text-3xl text-gray-500 font-bold">Logo</span> <?php // Placeholder ?>
				</div>
				<div class="mt-2 text-md text-gray-500">
					<?php esc_html_e('Accreditation Logo', 'uabwp-tw'); // Placeholder text ?>
					<?php /* <img src="<?php echo esc_url( get_template_directory_uri() . '/images/accreditation-logo.png' ); ?>" alt="Accreditation Info" class="max-h-full max-w-full"> */ ?>
				</div>
			</div>

			<!-- Unit Resources -->
			<div>
				<h3 class="font-bold mb-4 tracking-wider uppercase text-lg text-white">
					<?php esc_html_e('Unit Resources', 'uabwp-tw'); ?>
				</h3>
				<?php
				if (has_nav_menu('footer-unit-links')) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer-unit-links',
							'container' => false,
							'items_wrap' => '<ul class="divide-y divide-uab-green">%3$s</ul>',
							'menu_class' => '',
							'link_before' => '<span class="block text-white py-2 hover:bg-uab-green hover:pl-2.5 transition-all duration-150 ease-in-out">',
							'link_after' => '</span>',
							'depth' => 1,
						)
					);
				} else {
					// Optional: Display a message or default links if menu not set
					echo '<p>' . esc_html__('Please assign a menu to the Footer - Unit Resources location.', 'uabwp-tw') . '</p>';
				}
				?>
			</div>

			<!-- UAB Resources -->
			<div>
				<h3 class="font-bold mb-4 tracking-wider uppercase text-lg text-white">
					<?php esc_html_e('UAB Resources', 'uabwp-tw'); ?>
				</h3>
				<?php
				if (has_nav_menu('footer-uab-links')) {
					wp_nav_menu(
						array(
							'theme_location' => 'footer-uab-links',
							'container' => false,
							'items_wrap' => '<ul class="divide-y divide-uab-green">%3$s</ul>',
							'menu_class' => '',
							'link_before' => '<span class="block text-white py-2 hover:bg-uab-green hover:pl-2.5 transition-all duration-150 ease-in-out">',
							'link_after' => '</span>',
							'depth' => 1,
						)
					);
				} else {
					// Optional: Display a message or default links if menu not set
					echo '<p>' . esc_html__('Please assign a menu to the Footer - UAB Resources location.', 'uabwp-tw') . '</p>';
				}
				?>
			</div>
		</div>
	</div>
</div>
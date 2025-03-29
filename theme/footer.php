<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uabwp-tw
 */

?>

</div><!-- #content -->

<div class="divide-y divide-uab-green">
	<?php get_template_part('template-parts/layout/footer', 'content'); ?>

	<div class="bg-dragons-lair-green text-white">
		<!-- First row with logos on opposite sides -->
		<div class="container mx-auto p-8">
			<div class="flex justify-between items-center">
				<div>
					<?php // TODO: Replace with actual UAB logo URL & alt text ?>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/uab-standard.webp'); ?>"
						alt="<?php esc_attr_e('UAB Logo', 'uabwp-tw'); ?>" class="h-8">
				</div>
				<div>
					<?php // TODO: Replace with actual UA System logo URL & alt text ?>
					<img src="<?php echo esc_url(get_template_directory_uri() . '/images/ua-system.webp'); ?>"
						alt="<?php esc_attr_e('UA System Logo', 'uabwp-tw'); ?>" class="h-14">
				</div>
			</div>
		</div>

		<!-- Second row with nondiscrimination button on left and links + copyright on right -->
		<div class="container mx-auto px-8 pb-8">
			<div class="flex flex-wrap justify-between items-center gap-4">
				<div>
					<?php // TODO: Link Nondiscrimination Statement button properly ?>
					<a href="#nondiscrimination-link"
						class="bg-dragons-lair-green text-white px-4 py-1.5 rounded-md border border-white text-xs hover:bg-white hover:text-dragons-lair-green transition-colors">
						<?php esc_html_e('Nondiscrimination Statement', 'uabwp-tw'); ?>
					</a>
				</div>

				<div class="flex flex-wrap gap-x-6 gap-y-2 text-xs items-center">
					<?php // TODO: Link these footer items dynamically or via Theme Options ?>
					<a href="#cookie-settings"
						class="text-white hover:text-opacity-80"><?php esc_html_e('Cookie Settings', 'uabwp-tw'); ?></a>
					<a href="#contact-uab"
						class="text-white hover:text-opacity-80"><?php esc_html_e('Contact UAB', 'uabwp-tw'); ?></a>
					<a href="#privacy"
						class="text-white hover:text-opacity-80"><?php esc_html_e('Privacy', 'uabwp-tw'); ?></a>
					<a href="#terms-of-use"
						class="text-white hover:text-opacity-80"><?php esc_html_e('Terms of Use', 'uabwp-tw'); ?></a>
					<a href="<?php echo esc_url(wp_login_url()); ?>"
						class="text-white hover:text-opacity-80"><?php esc_html_e('Site Login', 'uabwp-tw'); ?></a>
					<?php // TODO: Make copyright year dynamic ?>
					<p class="text-xs text-white">
						&copy; <?php echo date('Y'); ?>
						<?php esc_html_e('The University of Alabama at Birmingham', 'uabwp-tw'); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
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

<header id="masthead" class="w-full site-header">

	<?php // Top Bar - Moved Outside Container ?>
	<div class="bg-uab-green w-full">
		<div class="max-w-7xl mx-auto h-12 flex px-4 sm:px-6 lg:px-8">
			<div class="text-white flex items-center">
				<?php // Display different logos based on screen size ?>

				<?php // Main Logo (Desktop: lg and up) ?>
				<img src="<?php echo esc_url(get_template_directory_uri() . '/images/uab-logo.webp'); ?>"
					alt="<?php esc_attr_e('The University of Alabama at Birmingham Logo', 'uabwp-tw'); ?>"
					class="h-5 w-auto mr-3 hidden lg:block"> <?php // Hidden by default, shown on large screens ?>

				<?php // Monogram Logo (Mobile: up to lg) ?>
				<img src="<?php echo esc_url(get_template_directory_uri() . '/images/uab-monogram.webp'); ?>"
					alt="<?php esc_attr_e('UAB Monogram', 'uabwp-tw'); ?>" class="h-5 w-auto mr-3 block lg:hidden">
				<?php // Shown by default, hidden on large screens ?>
			</div>
			<div class="ml-auto flex items-center">
				<?php // Styled the link as a button containing text and icon ?>
				<a href="#"
					class="flex items-center text-white text-sm px-3 py-1 rounded hover:bg-dragons-lair-green transition-colors duration-150 ease-in-out">
					<span>Explore UAB</span>
					<i class="fa-solid fa-compass text-white ml-2 text-xs"></i>
				</a>
			</div>
		</div>
	</div>

	<?php // Container for remaining header content ?>
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
		<?php // Main Header Content Area (Site Title, Description, Search) ?>
		<div class="bg-white w-full">
			<div class="max-w-[1340px] mx-auto px-4 py-10">
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
									href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
							</p>
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
						<!-- Search Modal, hidden by default -->
						<div id="header-search-modal" class="modal-overlay fixed inset-0 z-50 hidden"
							style="background: rgba(0,0,0,0.3);">
							<div class="flex items-center justify-center min-h-screen p-4">
								<div class="modal-popup bg-white rounded-lg shadow-lg w-full max-w-lg relative">
									<!-- Modal Header -->
									<div class="p-4 border-b border-gray-200 flex items-center">
										<h3 class="font-kulturista text-2xl text-gray-800 flex-1">Search</h3>
										<button id="close-search-modal" aria-label="Close Search"
											class="text-gray-400 hover:text-gray-700 text-2xl focus:outline-none ml-2">
											&times;
										</button>
									</div>
									<!-- Modal Body -->
									<div class="p-4">
										<form role="search" method="get" class="w-full flex items-center gap-2"
											action="<?php echo esc_url(home_url('/')); ?>">
											<input type="search" name="s" placeholder="Type to search..."
												class="flex-1 border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-uab-green"
												autocomplete="off" />
											<button type="submit"
												class="ml-0 -ml-px md:ml-2 rounded-full bg-uab-green w-10 h-10 flex items-center justify-center text-white hover:bg-opacity-90 transition-all focus:outline-none focus:ring-2 focus:ring-uab-gold">
												<i class="fa-solid fa-magnifying-glass"></i>
											</button>
										</form>
									</div>
									<!-- Modal Footer -->
									<div class="p-4 border-t border-gray-200 flex justify-end">
										<button id="footer-close-search-modal" type="button"
											class="bg-uab-green text-white px-4 py-2 rounded hover:bg-opacity-90 transition-all">
											Close
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php // Main Navigation Area ?>
		<nav id="site-navigation" class="main-navigation bg-white w-full"
			aria-label="<?php esc_attr_e('Main Navigation', 'uabwp-tw'); ?>">
			<div class="max-w-[1340px] mx-auto px-4 pb-10 flex justify-start items-center">
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
			</div>
		</nav>
	</div> <?php // Closing container ?>
</header>
<script>
	document.addEventListener('DOMContentLoaded', function () {
		const searchToggle = document.querySelector('.search-toggle');
		const searchModal = document.getElementById('header-search-modal');
		const closeModalBtn = document.getElementById('close-search-modal');
		const footerCloseBtn = document.getElementById('footer-close-search-modal');
		let searchOpen = false;

		function openSearchModal() {
			searchModal.classList.remove('hidden');
			searchOpen = true;
			const input = searchModal.querySelector('input[type="search"], input[type="text"]');
			if (input) input.focus();
			document.body.classList.add('overflow-hidden');
		}

		function closeSearchModal() {
			searchModal.classList.add('hidden');
			searchOpen = false;
			document.body.classList.remove('overflow-hidden');
		}

		if (searchToggle && searchModal) {
			searchToggle.addEventListener('click', function (e) {
				e.preventDefault();
				openSearchModal();
			});
		}
		if (closeModalBtn) {
			closeModalBtn.addEventListener('click', function () {
				closeSearchModal();
			});
		}
		if (footerCloseBtn) {
			footerCloseBtn.addEventListener('click', function () {
				closeSearchModal();
			});
		}
		// Close on click outside modal content
		if (searchModal) {
			searchModal.addEventListener('click', function (e) {
				if (e.target === searchModal) {
					closeSearchModal();
				}
			});
		}
		// Close on Escape
		document.addEventListener('keydown', function (e) {
			if (searchOpen && e.key === 'Escape') {
				closeSearchModal();
			}
		});
	});
</script>
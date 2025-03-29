/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const primaryMenu = document.getElementById('primary-menu');

    if (menuToggle && primaryMenu) {
        menuToggle.addEventListener('click', function () {
            const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
            menuToggle.setAttribute('aria-expanded', !isExpanded);
            primaryMenu.classList.toggle('toggled'); // Matches the class in base.css

            // Optional: Change icon on toggle
            const icon = menuToggle.querySelector('i'); // Assuming direct child
            if (icon) {
                if (!isExpanded) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-xmark'); // Close icon
                } else {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars'); // Bars icon
                }
            }
        });
    }

    // Optional: Add keyboard navigation support for dropdowns
    const menuItems = document.querySelectorAll('.main-navigation ul li.menu-item-has-children');

    menuItems.forEach(item => {
        const link = item.querySelector(':scope > a');
        const subMenu = item.querySelector(':scope > .sub-menu');

        if (link && subMenu) {
            // Example: Prevent default link behavior on parent item click on touch/mobile?
            // You might want more sophisticated logic here for touch vs click

            // Basic accessibility: Toggle submenu display on Enter/Space for the parent link
            link.addEventListener('keydown', function(e) {
                if (e.key === 'Enter' || e.key === ' ') {
                    // Check if submenu is visible (you might need a class for this)
                    const isSubMenuVisible = window.getComputedStyle(subMenu).display !== 'none';
                    if (!isSubMenuVisible) {
                         // If implementing click-to-open, you'd toggle a class here
                         // For pure CSS hover, this might just ensure focus moves correctly
                        console.log('Enter/Space pressed on parent, consider submenu toggle or focus management.');
                    }
                }
            });

             // Close dropdown if clicking outside
            document.addEventListener('click', function(event) {
                if (!item.contains(event.target)) {
                    // Logic to close the dropdown if you implement click-to-open
                    // For hover-based menus, this isn't strictly needed unless managing focus state
                }
            });
        }
    });

});

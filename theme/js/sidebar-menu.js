/**
 * Sidebar Menu Toggle Functionality
 * 
 * Handles the collapse/expand behavior for the sidebar navigation menu.
 */
document.addEventListener('DOMContentLoaded', function() {
    const sidebarMenu = document.getElementById('sidebar-menu');
    
    if (!sidebarMenu) return;
    
    // Find all parent menu items (items with sub-menus)
    const parentItems = sidebarMenu.querySelectorAll('.menu-item-has-children');
    
    parentItems.forEach(item => {
        const link = item.querySelector(':scope > a');
        const subMenu = item.querySelector(':scope > .sub-menu');
        const toggleIcon = item.querySelector('.sidebar-toggle-icon');
        
        if (!link || !subMenu || !toggleIcon) return;
        
        // Initially hide all sub-menus
        subMenu.style.display = 'none';
        
        // Only handle toggle icon clicks to show/hide submenu
        toggleIcon.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Toggle sub-menu visibility
            const isVisible = subMenu.style.display === 'block';
            subMenu.style.display = isVisible ? 'none' : 'block';
            
            // Toggle plus/minus icon
            if (isVisible) {
                toggleIcon.classList.remove('fa-minus');
                toggleIcon.classList.add('fa-plus');
                item.classList.remove('menu-item-expanded');
            } else {
                toggleIcon.classList.remove('fa-plus');
                toggleIcon.classList.add('fa-minus');
                item.classList.add('menu-item-expanded');
            }
        });
        
        // Remove the click handler on the parent link to allow normal navigation
        // Let the parent link work as a normal link (navigate to the page)
        link.addEventListener('click', function(e) {
            // Don't prevent default here - let the link work normally
            // We only need this if we want to do something additional when the link is clicked
        });
    });
}); 
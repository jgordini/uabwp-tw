/**
 * Accordion Toggle Functionality
 *
 * Handles the expand/collapse behavior for accordion items
 * based on the uabwp-tw/accordion-item pattern.
 */
document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.accordion-item');
    const borderClasses = ['border-b', 'border-gray-200']; // Define border classes

    if (!accordionItems.length) {
        return; // No accordions found, exit
    }

    accordionItems.forEach(item => {
        const toggle = item.querySelector('.accordion-toggle');
        const content = item.querySelector('.accordion-content');
        const icon = toggle ? toggle.querySelector('.accordion-icon') : null;

        // Ensure all necessary elements exist
        if (!toggle || !content || !icon) {
            console.warn('Accordion item is missing required elements (toggle, content, or icon).', item);
            return;
        }

        // Set initial ARIA attributes based on the initial display state in the pattern
        let isInitiallyOpen = content.style.display === 'block'; // Use let
        toggle.setAttribute('aria-expanded', isInitiallyOpen ? 'true' : 'false');
        content.setAttribute('aria-hidden', isInitiallyOpen ? 'false' : 'true');
        
        // Add unique IDs for aria-controls if they don't exist
        if (!toggle.id) {
            toggle.id = 'accordion-toggle-' + Math.random().toString(36).substring(2, 9);
        }
        if (!content.id) {
            content.id = 'accordion-content-' + Math.random().toString(36).substring(2, 9);
        }
        toggle.setAttribute('aria-controls', content.id);
        content.setAttribute('aria-labelledby', toggle.id);
        

        // Set initial icon and border state
        if (isInitiallyOpen) {
            icon.classList.remove('fa-plus');
            icon.classList.add('fa-minus');
            toggle.classList.add(...borderClasses); // Add border if initially open
        } else {
            icon.classList.remove('fa-minus');
            icon.classList.add('fa-plus');
            content.style.display = 'none'; // Ensure it's hidden if not explicitly set to block
            // Ensure border is removed if initially closed
            toggle.classList.remove(...borderClasses);
        }

        // Add click event listener
        toggle.addEventListener('click', function () {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            const currentlyExpanded = !isExpanded; // The state it WILL be after the click

            // Toggle content visibility
            content.style.display = currentlyExpanded ? 'block' : 'none';
            content.setAttribute('aria-hidden', String(!currentlyExpanded));
            

            // Toggle icon
            icon.classList.toggle('fa-plus', !currentlyExpanded);
            icon.classList.toggle('fa-minus', currentlyExpanded);

            // Toggle border class on the button
            if (currentlyExpanded) {
                this.classList.add(...borderClasses);
            } else {
                this.classList.remove(...borderClasses);
            }

            // Update ARIA attribute
            this.setAttribute('aria-expanded', String(currentlyExpanded));
        });
    });
}); 
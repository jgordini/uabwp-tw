/**
 * Accordion Toggle Functionality
 *
 * Handles the expand/collapse behavior for accordion items
 * based on the uabwp-tw/accordion-item pattern.
 */
document.addEventListener('DOMContentLoaded', function () {
    const accordionItems = document.querySelectorAll('.accordion-item');

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
        const isInitiallyOpen = content.style.display === 'block';
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
        

        // Set initial icon state
        if (isInitiallyOpen) {
            icon.classList.remove('fa-plus');
            icon.classList.add('fa-minus');
        } else {
            icon.classList.remove('fa-minus');
            icon.classList.add('fa-plus');
            content.style.display = 'none'; // Ensure it's hidden if not explicitly set to block
        }

        // Add click event listener
        toggle.addEventListener('click', function () {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';

            // Toggle content visibility
            content.style.display = isExpanded ? 'none' : 'block';
            content.setAttribute('aria-hidden', String(isExpanded));
            

            // Toggle icon
            icon.classList.toggle('fa-plus', isExpanded);
            icon.classList.toggle('fa-minus', !isExpanded);

            // Update ARIA attribute
            this.setAttribute('aria-expanded', String(!isExpanded));
        });
    });
}); 
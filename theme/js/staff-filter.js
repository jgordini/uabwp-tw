/**
 * Staff Directory Filter Functionality
 * 
 * Implements filtering for the staff directory based on dropdown selection.
 */
document.addEventListener('DOMContentLoaded', function() {
    const staffFilter = document.querySelector('.staff-filter select');
    
    if (!staffFilter) return;
    
    staffFilter.addEventListener('change', function() {
        const filterValue = this.value;
        const staffCards = document.querySelectorAll('.staff-card');
        
        if (!filterValue) {
            // Show all staff if no filter is selected
            staffCards.forEach(card => {
                card.style.display = 'flex';
            });
            return;
        }
        
        // Filter staff based on data-category attribute
        staffCards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            // Support multiple categories (space-separated)
            if (cardCategory && cardCategory.split(' ').includes(filterValue)) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    });
}); 
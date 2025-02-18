// Open the corresponding dropdown menu when the button is clicked
document.querySelectorAll('.dropdown-btn').forEach(button => {
    button.addEventListener('click', function(event) {
        let dropdownContent = this.nextElementSibling;
        
        // Close all dropdowns
        document.querySelectorAll('.dropdown-content').forEach(dropdown => {
            if (dropdown !== dropdownContent) {
                dropdown.style.display = 'none'; // Close other dropdowns
                dropdown.previousElementSibling.style.backgroundColor ='var(--PI-sand)';
                dropdown.previousElementSibling.style.color =  'var(--PI-darkred)';
                document.documentElement.style.setProperty('--dropdown-bot', ``); 
                document.documentElement.style.setProperty('--dropdown-left', ``); 
            }
        });
        // Get dynamic coordinates of the dropdown button to place the dropdown menu, and of the menu to 
        // place the contect below it
        const rect = button.getBoundingClientRect();
        const subrect = dropdownContent.getBoundingClientRect();
        
        // Toggle visibility of the dropdown
        if (dropdownContent.style.display === 'block') {
            // If dropdown is open, close it and reset color and position
            dropdownContent.style.display = 'none';
            this.style.backgroundColor ='var(--PI-sand)'; 
            this.style.color =  'var(--PI-darkred)';
            document.documentElement.style.setProperty('--dropdown-bot', ``); 
            document.documentElement.style.setProperty('--dropdown-left', ``); 

        } else {
            dropdownContent.style.display = 'block';
            this.style.backgroundColor ='  #860000'; 
            this.style.color = 'white';
            document.documentElement.style.setProperty('--dropdown-bot', `${subrect.bottom}px`);
            document.documentElement.style.setProperty('--dropdown-left', `${rect.left}px`);  
            
        }
        event.stopPropagation();
    });
});

// Close open dropdown menus when the user clicks outside of them
document.addEventListener('click', function(event) {
    document.querySelectorAll('.dropdown-content').forEach(dropdown => {
        if (!dropdown.previousElementSibling.contains(event.target)) {
            dropdown.style.display = 'none';
            dropdown.previousElementSibling.style.backgroundColor ='var(--PI-sand)';
            dropdown.previousElementSibling.style.color =  'var(--PI-darkred)';
            document.documentElement.style.setProperty('--dropdown-bot', ``); 
            document.documentElement.style.setProperty('--dropdown-left', ``); 
        }
    });
});

// Change the coordinates dynamically when the window is resized
window.addEventListener('resize', function() {
    document.querySelectorAll('.dropdown-btn').forEach(button => {
        let dropdownContent = button.nextElementSibling;
        if (dropdownContent.style.display === 'block') { // Recalculate positions if the dropdown is open
            const rect = button.getBoundingClientRect();
            const subrect = dropdownContent.getBoundingClientRect();

            // const scrollOffset = window.scrollY || window.pageYOffset;  // Get current scroll position

           document.documentElement.style.setProperty('--dropdown-bot', `${subrect.bottom}px`);
           document.documentElement.style.setProperty('--dropdown-left', `${rect.left}px`); 
        }
    });
});
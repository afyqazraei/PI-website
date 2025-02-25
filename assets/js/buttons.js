// Open the corresponding dropdown menu when the button is clicked
document.querySelectorAll('.dropdown-btn').forEach(button => {
    button.addEventListener('click', function(event) {
        var dropdownContent = this.nextElementSibling;
        
        // Close other open dropdowns
        document.querySelectorAll('.dropdown-content').forEach(dropdown => {
            if (dropdown !== dropdownContent) {
                dropdown.style.display = 'none'; 
                // Reset colors and position variables
                dropdown.previousElementSibling.style.backgroundColor ='var(--PI-sand)';
                dropdown.previousElementSibling.style.color =  'var(--PI-darkred)';
                document.documentElement.style.setProperty('--dropdown-bot', ``); 
                document.documentElement.style.setProperty('--dropdown-left', ``); 
            }
        });

        
        // Toggle visibility of the clicked dropdown
        if (dropdownContent.style.display === 'block') {
            // If dropdown is already open, close it 
            dropdownContent.style.display = 'none';
            // Reset colors and position variables
            this.style.backgroundColor ='var(--PI-sand)'; 
            this.style.color =  'var(--PI-darkred)';
            document.documentElement.style.setProperty('--dropdown-bot', ``); 
            document.documentElement.style.setProperty('--dropdown-left', ``); 

        } else {
            dropdownContent.style.display = 'block';

            // Get the coordinates of the button and of the dropdown to adjust the 
            // positions on the page accordingly when the dropdown is opened
            const rect = button.getBoundingClientRect();
            const subrect = dropdownContent.getBoundingClientRect();
            // Change color of the button and text when opening the dropdown
            this.style.backgroundColor ='var(--PI-darkred)';  
            this.style.color = 'white';
            // Set variables for position the dropdown content and what's below it
            document.documentElement.style.setProperty('--dropdown-bot', `${subrect.height}px`);
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
            // Reset colors and position variables
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
        if (dropdownContent.style.display === 'block') { 
            // If there is an open dropdown, update its position and the one of the content below
            const rect = button.getBoundingClientRect();
            const subrect = dropdownContent.getBoundingClientRect();
           document.documentElement.style.setProperty('--dropdown-bot', `${subrect.height}px`);
           document.documentElement.style.setProperty('--dropdown-left', `${rect.left}px`); 
        }
    });
});

function updateCSSVariable() {
    let mediaWidth = window.innerWidth;
    document.documentElement.style.setProperty('--media-width', mediaWidth + 'px');
}

window.addEventListener('resize', updateCSSVariable);
updateCSSVariable(); // Run once on load
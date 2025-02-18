// Open the corresponding dropdown menu when the button is clicked
document.querySelectorAll('.dropdown-btn').forEach(button => {
    button.addEventListener('click', function(event) {
        let dropdownContent = this.nextElementSibling;
        
        // Close all dropdowns
        document.querySelectorAll('.dropdown-content').forEach(dropdown => {
            if (dropdown !== dropdownContent) {
                dropdown.style.display = 'none'; // Close other dropdowns
                document.documentElement.style.setProperty('--dropdown-bot', ``); 
                document.documentElement.style.setProperty('--dropdown-left', ``); 
            }
        });
        // Get dynamic coordinates of the dropdown button to place the dropdown menu
        const rect = button.getBoundingClientRect();
        
        // Toggle visibility of the dropdown
        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
            document.documentElement.style.setProperty('--dropdown-bot', ``); 
            document.documentElement.style.setProperty('--dropdown-left', ``); 

        } else {
            dropdownContent.style.display = 'block';
            document.documentElement.style.setProperty('--dropdown-bot', `${rect.bottom}px`);
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
            document.documentElement.style.setProperty('--dropdown-bot', ``); 
            document.documentElement.style.setProperty('--dropdown-left', ``); 
        }
    });
});

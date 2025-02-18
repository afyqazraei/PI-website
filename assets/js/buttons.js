// Open the corresponding dropdown menu when the button is clicked
document.querySelectorAll('.dropdown-btn').forEach(button => {
    button.addEventListener('click', function(event) {
        let dropdownContent = this.nextElementSibling;
        
        // Get dynamic coordinates of the dropdown button to place the dropdown menu
        const rect = button.getBoundingClientRect();
        document.documentElement.style.setProperty('--dropdown-left', `${rect.left}px`); 
        
        // Toggle visibility of the dropdown
        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
            document.documentElement.style.setProperty('--dropdown-bot', ``); 

        } else {
            dropdownContent.style.display = 'block';
            document.documentElement.style.setProperty('--dropdown-bot', `${rect.bottom}px`); 
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
        }
    });
});

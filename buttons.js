// Open the corresponding dropdown menu when the button is clicked
document.querySelectorAll('.dropbtn').forEach(button => {
    button.addEventListener('click', function() {
        let dropdownContent = this.nextElementSibling;
        dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
    });
});

// Close open dropdown menus when the user clicks outside of them
document.addEventListener('click', function(event) {
    document.querySelectorAll('.dropdown-content').forEach(dropdown => {
        if (!dropdown.previousElementSibling.contains(event.target)) {
            dropdown.style.display = 'none';
        }
    });
});
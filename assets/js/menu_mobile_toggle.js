function toggleMenu() {
    const menu = document.querySelector(".menu");
    menu.classList.toggle("active");
}

function toggleMenu_pub() {
    const menu_pub = document.querySelector(".menu-pub");
    menu_pub.classList.toggle("active");
}

// Mobile dropdown menu toggle
document.addEventListener("DOMContentLoaded", function () {
    const dropdowns = document.querySelectorAll(".dropdown > a");

    dropdowns.forEach((dropdown) => {
        dropdown.addEventListener("click", function (event) {
            event.preventDefault(); // Prevent default link behavior
            const parent = this.parentElement;

            // Close all other dropdowns before opening the clicked one
            document.querySelectorAll(".dropdown").forEach((item) => {
                if (item !== parent) {
                    item.classList.remove("active");
                    item.querySelector(".dropdown-menu").style.maxHeight = "0";
                }
            });
        

            // Toggle the clicked dropdown's visibility
            const dropdownMenu = parent.querySelector(".dropdown-menu");

            if (dropdownMenu) {
                dropdownMenu.style.maxHeight = dropdownMenu.style.maxHeight === "500px" ? "0" : "500px"; // Toggle max-height for animation
            }

            parent.classList.toggle("active");
        });
    });
});
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Header</title>
    <link rel="stylesheet" href="styles_header.css">
</head>
<body>

<header>
    <nav class="tab-bar">
        <div class="logo">
            <a href="https://www.physi.uni-heidelberg.de/">
                <img src="figures/logo-pi.png" alt="Logo">
            </a>
        </div>

        <!-- Hamburger Menu Button -->
        <button class="hamburger" onclick="toggleMenu()">☰</button>

        <ul class="menu">
            <li><a href="main_page.php">Home</a></li>
            <li><a href="research.php">Research</a>
            <li class="dropdown">
                <a href="#">Publications</a>
                <ul class="dropdown-menu">
                    <li><a href="publications/ATLAS_pub.php">ATLAS</a></li>
                    <li><a href="publications/mu3e_pub.php">Mu3e</a></li>
                    <li><a href="#">HV-MAPS</a></li>
                </ul>
            </li>
            <li><a href="teaching.php">Teaching</a></li>
            <li><a href="people.php">People</a></li>
            <li class="dropdown">
                <a href="#">Open Positions</a>
                <ul class="dropdown-menu">
                    <li><a href="https://www.physi.uni-heidelberg.de/Jobs/jobs.php">Bachelor & Master Theses</a></li>
                    <li><a href="https://www.physi.uni-heidelberg.de/Jobs/jobs.php">PhD & PostDoc Positions</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<script>
function toggleMenu() {
    const menu = document.querySelector(".menu");
    menu.classList.toggle("active");
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
            dropdownMenu.style.maxHeight = dropdownMenu.style.maxHeight === "500px" ? "0" : "500px"; // Toggle max-height for animation
            parent.classList.toggle("active");
        });
    });
});

</script>

</body>
</html>

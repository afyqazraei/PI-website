<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Header</title>
    <link rel="stylesheet" href="styles_header.css"> <!-- Link to external CSS -->
</head>
<body>

<header>
    <nav class="tab-bar" style="text-align: center;">
        <div class="logo">
            <a href="https://www.physi.uni-heidelberg.de/"> <!-- Add link here -->
                <img src="figures/logo-pi.png" alt="Logo">
            </a>
        </div>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Research</a></li>
            <li class="dropdown">
                <a href="http://www.physi.uni-heidelberg.de/Forschung/he/publications.php">Publications</a>
                <ul class="dropdown-menu">
                    <li><a href="#">Papers</a></li>
                    <li><a href="#">Talks</a></li>
                    <li><a href="#">Theses</a></li>
                </ul>
            </li>
            <li><a href="#">Teaching</a></li>
            <li><a href="#">People</a></li>
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

</body>
</html>
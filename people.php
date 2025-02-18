<?php
$subpath = $_SERVER['REQUEST_URI'];
$incpath = "assets/inc";
include($incpath . "/config.php");
include($headerInc);
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PI Main webpage</title>
	<!-- Include style file -->
    <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">
</head>

<body>
    <div class="sub-body">


<!-- ++++++++++++++++++++ Start Main Content of the page here! +++++++++++++++++++++ -->
        <h1 class="western">Group Members</h1> 
        <h2 class="western">Professor</h2> 
        <ul> 
            <li>Prof. Dr. André Schöning</li>
        </ul>
        <h2 class="western">PostDocs</h2> 
        <ul> 
            <li>Tamasi Kar</li>
            <li>Heiko Augustin</li>
            <li>Sebastian Dittmeier</li>
            <li>...</li>
        </ul>
        <h2 class="western">PhD Students</h2> 
        <ul> 
            <li>Joachim Zinßer</li>
            <li>David immig</li>
            <li>Giulia Fazzino</li>
            <li>Afiq (Joey) Azrei</li>
            <li>Abhirikshma Nandi</li>
            <li>...</li>
        </ul>
        <h2 class="western">Master Students</h2> 
        <ul> 
            <li>Kadir Tastepe</li>
            <li>David Fritz</li>
            <li>...</li>
        </ul>
        <h2 class="western">Bachelor Students</h2> 
        <ul> 
            <li>Jan-Willem Holtherm</li>
            <li>...</li>
        </ul>
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>
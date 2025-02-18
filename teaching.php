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
        <h1 class="western">Teaching</h1> 
        <h2 class="westers">Courses by Prof André Schöning</h2>
        <iframe src="https://www.physi.uni-heidelberg.de/~schoning/Vorlesungen/" width="1000" height="800"></iframe>
        
        <h2 class="western">Courses taught by other members of the group</h2>
        <h2 class="western">Winter Semester 2024 - 2025</h2> 
        <ul> 
            <li>We are building our fancy new website that would be better than every website of all other lousy groups.</li>
            <li>News 2</li>
        </ul>
        <h2 class="western">Summer Semester 2024</h2> 
        <ul> 
            <li>We are building our fancy new website that would be better than every website of all other lousy groups.</li>
            <li>News 2</li>
        </ul>
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>
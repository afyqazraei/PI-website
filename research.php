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
        <h1 class="western">Research</h1> 
        <h2 class="western">Mu3e</h2> 
        <ul> 
            <li>Text 1</li>
            <li>Text 2</li>
        </ul>
        <h2 class="western">ATLAS</h2> 
        <ul> 
            <li>Text 1</li>
            <li>Text 2</li>
        </ul>
        <h2 class="western">HV-Maps</h2> 
        <ul> 
            <li>Text 1</li>
            <li>Text 2</li>
        </ul>
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>
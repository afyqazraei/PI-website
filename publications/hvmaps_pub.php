<?php
$subpath = dirname($_SERVER['REQUEST_URI']);
$incpath = "../assets/inc";
include($incpath . "/config.php");
include($headerInc);
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HV-MAPS Publications</title>
	<!-- Include style file -->
    <link rel="stylesheet" type="text/css" href="<?php echo $designCss;?>">

</head>
<body lang="en-US" dir="ltr" style="text-align:left;">

<h1>Lists of Publications, Talks & Posters</h1>

<h2>Publications</h2>

<p>Here you can find a list of publications related to the HV-MAPS project.</p>

</body>
</html>

<?php
include($footerInc);
?>

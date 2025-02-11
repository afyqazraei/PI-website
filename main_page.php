<?php
include("header.php");
?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PI Main webpage</title>
	<!-- Include style file -->
    <link rel="stylesheet" type="text/css" href="design.css">

</head>

<body lang="en-US" dir="ltr">
<br/>
	<h1 class="western">Welcome to the High Energy  Group</h1> 
	<p style="margin-bottom:   0cm"> 

	<!-- Collage of our pictures (TODO: can we write a loop?)-->
	<div class="row" style="text-align: center;">
		<a href="https://en.wikipedia.org/wiki/Cat">
			<img src="./figures/test_images/cat.99.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="./figures/test_images/cat.997.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="./figures/test_images/cat.984.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="./figures/test_images/cat.985.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="./figures/test_images/cat.99.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="./figures/test_images/cat.997.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="./figures/test_images/cat.984.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="figures/test_images/cat.985.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="figures/test_images/cat.987.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="figures/test_images/cat.988.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="figures/test_images/cat.989.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="figures/test_images/cat.990.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="./figures/test_images/cat.99.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="./figures/test_images/cat.997.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="./figures/test_images/cat.984.jpg" width="100" height="100" style="object-fit: cover;">
			<img src="figures/test_images/cat.985.jpg" width="100" height="100" style="object-fit: cover;">
		</a>
	</div>
		
	<p style="margin-bottom: 0cm">
                Our group is involved in several research projects in the field of experimental particle physics,
                with a focus on the study of fundamental particles and their interactions.
                This includes the participation in the ATLAS experiment at the Large Hadron Collider (LHC) at CERN,
                the Mu3e experiment at PSI and the development of new high resolution Silicon detector technologies.
	
	
	<h2>Our Research Subgroups</h2>

	<div class ="dropdown-container">
	<div class="dropdown">
    <button class="dropdown-btn">Mu3e</button>
    	<div class="dropdown-content">
		<a href="#">Hi this is mu3e</a>
    	</div>
  	</div>
	<div class="dropdown">
    <button class="dropdown-btn">ATLAS</button>
    	<div class="dropdown-content">
		<a href="#">Hi I'm ATLAS</a>
    	</div>
  	</div>
	<div class="dropdown">
    <button class="dropdown-btn">HVMAPS</button>
    	<div class="dropdown-content">
		<a href="#">Hi I'm HVMAPS</a>
    	</div>
	</div>
	</div>
	</p>
	<p style="margin-bottom: 0cm"><a href="#top"></a></p>


</div>


<!-- JavaScripts -->
<script type="text/javascript" src="buttons.js"></script>

</body>

</html>

<?php
include("footer.php"); 
?>

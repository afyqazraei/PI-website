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

<body lang="en-US" dir="ltr">
<div class = "sub-body">
<br/>
	<h1 class="western">Welcome to the High Energy  Group</h1> 

	<!-- Collage of our pictures (TODO: can we write a loop?)-->
	<div class="row" style="text-align: center;" id="image-container"></div>

<script>
  // Fetch the list of images from the PHP script
  fetch('./assets/inc/read_images.php')	
	.then(response => response.json())
	.then(images => {
	  const container = document.getElementById('image-container');

	  images.forEach(image => {
		const imageElement = document.createElement('a');
		imageElement.href = "https://en.wikipedia.org/wiki/Cat";

		const img = document.createElement('img');
		img.src = `./figures/group_members/${image}`;
		img.alt = image;
		img.style.width = '80px';  // Set the desired width for the image
      	img.style.height = '100px'; // If you want to set the height too
     	 img.style.objectFit = 'cover';  // Ensure the image maintains aspect ratio


		imageElement.appendChild(img);
		container.appendChild(imageElement);
	  });
	})
	.catch(err => console.error('Error loading images:', err));
	</script>


	<p style="margin-bottom: 0cm">
	Our group is involved in several research projects in the field of experimental particle physics,
                with a focus on the study of fundamental particles and their interactions.
                This includes the participation in the ATLAS experiment at the Large Hadron Collider (LHC) at CERN,
                the Mu3e experiment at PSI and the development of new high resolution Silicon detector technologies.
	
	
	<h2 style="text-align: center;">Our Research Subgroups</h2>
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
    <button class="dropdown-btn">HV-MAPS</button>
    	<div class="dropdown-content">
		<a href="#">Hi I'm HV-MAPS</a>
    	</div>
	</div>
	</div>
                
	</p>
	
	<div class="content">
	<h2> News</h2>

	<ul> 
		<li> We are building a new website for our group!!</li>
		<video width="400" height="200" controls>
    		<source src="./figures/hackaton.MOV" type="video/quicktime">
    		Your browser does not support the video tag.
		</video>


	</ul>

</div>



<br/><br/><br/>

<!-- JavaScripts -->
<script type="text/javascript" src="<?php echo $buttonsJs;?>"></script>
</div>
</body>

</html>

<?php
include($footerInc); 
?>

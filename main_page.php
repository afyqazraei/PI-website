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
	<h1 class="western" style="text-align: center;">Welcome to Prof. Schoening's High Energy  Group</h1> 

	<!-- Collage of our pictures (TODO: can we write a loop?)-->
	<div class="row" style="text-align: center;" id="image-container"></div>

<script>
  // Fetch the list of images from the PHP script
  fetch("<?php echo dirname($subpath);?>/assets/inc/read_images.php")	
	.then(response => response.json())
	.then(images => {
	  const container = document.getElementById('image-container');
	  container.style.marginLeft = '20%';
	  container.style.marginRight = '20%';

	  images.forEach(image => {
		const imageElement = document.createElement('a');
		imageElement.href = "<?php echo dirname($subpath);?>/people.php";
		imageElement.style.marginLeft = '2px'; // Add space on the left of each image
		imageElement.style.marginRight = '2px'; // Add space on the right of each image


		const img = document.createElement('img');
		img.src = `<?php echo dirname($subpath);?>/figures/group_members/${image}`;
		img.alt = image;
		img.style.width = '120px';  // Set the desired width for the image
      	img.style.height = '160px'; // If you want to set the height too
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
	<div class ="dropdown-container", style="text-align: center;">
	<div class="dropdown">
    <button class="dropdown-btn">Mu3e</button>
    	<div class="dropdown-content">
		<a href="https://www.physi.uni-heidelberg.de/Forschung/he/mu3e/">
			<div style="display: flex; justify-content: space-between;">
				<img src="<?php echo dirname($subpath);?>/figures/mu3e.jpg" alt="mu3e-exp" style="width:40%">
				<p style="text-align: right; width: 55%;">
					Mu3e is an experiment under construction at the Paul Scherrer Institute (PSI), in Villigen, Switzerland.
					The goal is to search for the anti-muon decay into two positrons and one electron. 
					This decay channel would violate the conservation of the Charge Lepton Flavour, which is foreseen in the Standard Model only
					at very low branching ratios. While the current limit for the branching ratio is about, Mu3e aims to exclude it, or observe it, at a sensitivity of.
				</p>
			</div>
		</a>
    	</div>
  	</div>
	<div class="dropdown">
    <button class="dropdown-btn">ATLAS</button>
    	<div class="dropdown-content">
		<a href="https://www.physi.uni-heidelberg.de/Forschung/he/ATLAS/">
			<div style="display: flex; justify-content: space-between;">
				<img src="<?php echo dirname($subpath);?>/figures/mu3e.jpg" alt="mu3e-exp" style="width:40%">
				<p style="text-align: right; width: 55%;">
					Mu3e is an experiment under construction at the Paul Scherrer Institute (PSI), in Villigen, Switzerland.
					The goal is to search for the anti-muon decay into two positrons and one electron. 
					This decay channel would violate the conservation of the Charge Lepton Flavour, which is foreseen in the Standard Model only
					at very low branching ratios. While the current limit for the branching ratio is about, Mu3e aims to exclude it, or observe it, at a sensitivity of.
				</p>
			</div>
		</a>
    	</div>
  	</div>
	<div class="dropdown">
    <button class="dropdown-btn">HV-MAPS</button>
    	<div class="dropdown-content">
		<a href="https://www.physi.uni-heidelberg.de/Forschung/he/HVMAPS/">
			<div style="display: flex; justify-content: space-between;">
				<img src="<?php echo dirname($subpath);?>/figures/mu3e.jpg" alt="mu3e-exp" style="width:40%">
				<p style="text-align: right; width: 55%;">
					Mu3e is an experiment under construction at the Paul Scherrer Institute (PSI), in Villigen, Switzerland.
					The goal is to search for the anti-muon decay into two positrons and one electron. 
					This decay channel would violate the conservation of the Charge Lepton Flavour, which is foreseen in the Standard Model only
					at very low branching ratios. While the current limit for the branching ratio is about, Mu3e aims to exclude it, or observe it, at a sensitivity of.
				</p>
			</div>
		</a>
    	</div>
	</div>
	</div>
                
	</p>
	
	<div class="content">
	<h2 style="text-align: center;"> News</h2>

	<ul> 
		<li> Our group members had two hackaton days to create this new website!</li>
		<video width="300" height=auto controls autoplay muted loop>
    		<source src="<?php echo dirname($subpath);?>/figures/hackaton.MOV">
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

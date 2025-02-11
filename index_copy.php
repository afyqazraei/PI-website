<?php

?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Button</title>
    <style>
        /* Basic styling for the dropdown */
        .dropdown {
            position: relative;
            /*display: inline-block;*/
            display: inline-flex;
            /* align-items: center; */
            width: 30%;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color:rgb(250, 197, 147);
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 100px 120px;
            text-decoration: none;
            display: block;
        }

		.dropdown-content a:hover {
			background-color: #ddd;
		}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-btn {
            padding: 25px 100px;
            font-size: 100%;
            flex: 1;
            cursor: pointer;
            background-color:rgba(218, 73, 16, 0.86);
            color: white;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>

<body lang="en-US" dir="ltr">
<br/>
	<h1 class="western">Welcome to the High Energy Group</h1> 
	<p style="margin-bottom:   0cm"> <img src="https://www.physi.uni-heidelberg.de/~schoning/HE/Gruppenbild_HE_neutrallight.png"
  name="Bild6" align="left" width="448" height="333"> <br clear="left"/></img>

	<ul>
		
	<p style="margin-bottom: 0cm">
		<h3>Welcome to our webpage! </h3>
                Our group is involved in several research projects in the field of experimental particle physics,
                with a focus on the study of fundamental particles and their interactions.
                This includes the participation in the ATLAS experiment at the Large Hadron Collider (LHC) at CERN,
                the Mu3e experiment at PSI and the development of new high resolution Silicon detector technologies.
	
	
	<h2>Our Research Subgroups</h2>

	<div class ="dropdown-container">
	<div class="dropdown">
    <button class="dropdown-btn">Mu3e</button>
    	<div class="dropdown-content">
		<a href="#">Hi I'm mu3e</a>
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
	</ul>
	</div>
	<p style="margin-bottom: 0cm"><a href="#top">
<br/>
<br/>

</div>
<div id="lightboxOverlay" dir="ltr" style="background: #000000"><p><br/>
<br/>

</p>
</div>
<p><span id="lightbox" dir="ltr" style="position: absolute; left: 0cm; width: 100%; border: none; padding: 0cm; background: #ffffff"><p>
	<br/>
<br/>

	</p>
</span><br/>
<br/>

</p>


<!-- Optional JavaScript to toggle dropdowns on click -->
<script>
    document.querySelectorAll('.dropdown-btn').forEach(button => {
        button.addEventListener('click', function() {
            let dropdownContent = this.nextElementSibling;
            dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
        });
    });

	document.addEventListener('click', function(event) {
		document.querySelectorAll('.dropdown-content').forEach(dropdown => {
			if (!dropdown.previousElementSibling.contains(event.target)) {
				dropdown.style.display = 'none';
			}
		});
	});


	
</script>


</body>
</html>

<?php
include("footer.php.inc"); 
?>

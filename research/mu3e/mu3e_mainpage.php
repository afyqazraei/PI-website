<?php
$subpath = dirname(dirname($_SERVER['REQUEST_URI']));
$incpath = "../../assets/inc";
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
        
        <img src='<?php echo $figures;?>/mu3e/vertex-cad.png' width='100%' alt='mu3e_header' />

        <h1 class="western">Mu3e @ HD-PI</h1> 

        <h2 class="western">The Mu3e Experiment</h2> 
        <ul> 
            The Mu3e Experiment aims to search for the decays of muons into an electron and a pair of positrons, <mjx-container class="MathJax CtxtMenu_Attached_0" jax="CHTML" tabindex="0" ctxtmenu_counter="0" style="font-size: 101.1%; position: relative;"><mjx-math class="MJX-TEX" aria-hidden="true"><mjx-msup><mjx-mi class="mjx-i"><mjx-c class="mjx-c1D707 TEX-I"></mjx-c></mjx-mi><mjx-script style="vertical-align: 0.363em;"><mjx-mo class="mjx-n" size="s"><mjx-c class="mjx-c2B"></mjx-c></mjx-mo></mjx-script></mjx-msup><mjx-mo class="mjx-n" space="4"><mjx-c class="mjx-c2192"></mjx-c></mjx-mo><mjx-msup space="4"><mjx-mi class="mjx-i"><mjx-c class="mjx-c1D452 TEX-I"></mjx-c></mjx-mi><mjx-script style="vertical-align: 0.363em;"><mjx-mo class="mjx-n" size="s"><mjx-c class="mjx-c2B"></mjx-c></mjx-mo></mjx-script></mjx-msup><mjx-msup><mjx-mi class="mjx-i"><mjx-c class="mjx-c1D452 TEX-I"></mjx-c></mjx-mi><mjx-script style="vertical-align: 0.363em;"><mjx-mo class="mjx-n" size="s"><mjx-c class="mjx-c2B"></mjx-c></mjx-mo></mjx-script></mjx-msup><mjx-msup><mjx-mi class="mjx-i"><mjx-c class="mjx-c1D452 TEX-I"></mjx-c></mjx-mi><mjx-script style="vertical-align: 0.363em;"><mjx-mo class="mjx-n" size="s"><mjx-c class="mjx-c2212"></mjx-c></mjx-mo></mjx-script></mjx-msup></mjx-math><mjx-assistive-mml unselectable="on" display="inline"><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mi>μ</mi><mo>+</mo></msup><mo accent="false" stretchy="false">→</mo><msup><mi>e</mi><mo>+</mo></msup><msup><mi>e</mi><mo>+</mo></msup><msup><mi>e</mi><mo>−</mo></msup></math></mjx-assistive-mml></mjx-container>, which is only foreseen in the Standard Model at a very low branching rate (<mjx-container class="MathJax CtxtMenu_Attached_0" jax="CHTML" tabindex="0" ctxtmenu_counter="1" style="font-size: 101.1%; position: relative;"><mjx-math class="MJX-TEX" aria-hidden="true"><mjx-mo class="mjx-n"><mjx-c class="mjx-c223C"></mjx-c></mjx-mo><mjx-msup space="4"><mjx-mn class="mjx-n"><mjx-c class="mjx-c31"></mjx-c><mjx-c class="mjx-c30"></mjx-c></mjx-mn><mjx-script style="vertical-align: 0.393em;"><mjx-texatom size="s" texclass="ORD"><mjx-mo class="mjx-n"><mjx-c class="mjx-c2212"></mjx-c></mjx-mo><mjx-mn class="mjx-n"><mjx-c class="mjx-c35"></mjx-c><mjx-c class="mjx-c34"></mjx-c></mjx-mn></mjx-texatom></mjx-script></mjx-msup></mjx-math><mjx-assistive-mml unselectable="on" display="inline"><math xmlns="http://www.w3.org/1998/Math/MathML"><mo>∼</mo><msup><mn>10</mn><mrow data-mjx-texclass="ORD"><mo>−</mo><mn>54</mn></mrow></msup></math></mjx-assistive-mml></mjx-container>). 
            Any observations in this decay channel above the branching ratio will be a clear indicator of the violation of lepton flavour conservation. 
            The experiment is under commissioning at the Paul Scherrer Institute (PSI), in Villigen, Switzerland. 
        </ul>
        <ul style="text-indent:30px;"> 
            While the current experimental limit for this branching ratio is around
            <mjx-container class="MathJax CtxtMenu_Attached_0" jax="CHTML" tabindex="0" ctxtmenu_counter="2" style="font-size: 101.1%; position: relative;"><mjx-math class="MJX-TEX" aria-hidden="true"><mjx-msup><mjx-mn class="mjx-n"><mjx-c class="mjx-c31"></mjx-c><mjx-c class="mjx-c30"></mjx-c></mjx-mn><mjx-script style="vertical-align: 0.393em;"><mjx-texatom size="s" texclass="ORD"><mjx-mo class="mjx-n"><mjx-c class="mjx-c2212"></mjx-c></mjx-mo><mjx-mn class="mjx-n"><mjx-c class="mjx-c31"></mjx-c><mjx-c class="mjx-c32"></mjx-c></mjx-mn></mjx-texatom></mjx-script></mjx-msup></mjx-math><mjx-assistive-mml unselectable="on" display="inline"><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>10</mn><mrow data-mjx-texclass="ORD"><mo>−</mo><mn>12</mn></mrow></msup></math></mjx-assistive-mml></mjx-container>,
            the Mu3e Experiment aims to further exclude, or observe, it at a sensitivity of 
            <mjx-container class="MathJax CtxtMenu_Attached_0" jax="CHTML" tabindex="0" ctxtmenu_counter="3" style="font-size: 101.1%; position: relative;"><mjx-math class="MJX-TEX" aria-hidden="true"><mjx-msup><mjx-mn class="mjx-n"><mjx-c class="mjx-c31"></mjx-c><mjx-c class="mjx-c30"></mjx-c></mjx-mn><mjx-script style="vertical-align: 0.393em;"><mjx-texatom size="s" texclass="ORD"><mjx-mo class="mjx-n"><mjx-c class="mjx-c2212"></mjx-c></mjx-mo><mjx-mn class="mjx-n"><mjx-c class="mjx-c31"></mjx-c><mjx-c class="mjx-c36"></mjx-c></mjx-mn></mjx-texatom></mjx-script></mjx-msup></mjx-math><mjx-assistive-mml unselectable="on" display="inline"><math xmlns="http://www.w3.org/1998/Math/MathML"><msup><mn>10</mn><mrow data-mjx-texclass="ORD"><mo>−</mo><mn>16</mn></mrow></msup></math></mjx-assistive-mml></mjx-container>.
            To accomplish this goal, new solutions must be developed, which implement the latest technologies available in the field of High Energy Physics. 
            In particular, the tracking system is made of ultra-thin pixel silicon sensors, which can reconstruct the tracks of the decayed electrons with the minimal interference. 
            The Heidelberg PI group has a leading role in the development of the experimental concept, of the technical solutions and the detector design. 
            The group is responsible for the vertex detector, the innermost component of the experiment, and for many of the external services necessary for the operation of the whole system.
        </ul>
        <ul style="text-indent:30px;"> 
            At the moment, the Phase 1 of the experiment is under construction. 
            After the construction and commissioning, physics data will be taken for 2 years. 
            Afterwards, the beamline will be upgraded to the High Intensity Muon Beamilne (HIMB), which will deliver muon rates up to 10 GHz. 
            This will require a general upgrade of the Mu3e experiment, the Phase 2.
        </ul>
        <h2 class="western">Group Activites</h2> 
        <ul> 
            <h3 class="western">MuPix Design & Testing</h3>
            <ul style="background-color:var(--PI-lightred);border-block:3px solid var(--PI-darkred);padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px;">
                The MuPix is the silicon pixel sensor developed specifically for Mu3e, based on the <b> High Voltage Monolithic Active Pixel Sensors (HV-MAPS) </b> technology. 
                This is one of the most promising technologies for High Energy Physics experiments as it combines high performance with low cost and high flexibility. 
                The MuPix, in particular, implements a minimal number of connections for powering and readout, a strategy that requires novel design features for the communication with the chip itself.
                The Heidelberg group contributed significantly to the design of the chip and to the characterization of the several prototypes produced in the years. 
                <br>
                </br>
                <button onclick="location.href='<?php echo dirname($subpath);?>/research/HV-Maps/HV-Maps_mainpage.php';"  style="background-color:var(--PI-darkred);border:0;color:var(--PI-sand);padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;">
                    To HV-MAPS Group >>
                </button>
                <br>
                </br>
                <div style="text-align: center;">
                    <img src="<?php echo $figures;?>/mu3e/mupix10.jpg" alt="mu3e-mupix" style="width:30%;min-width:200px;height:auto;">
                </div>
            </ul>

            <h3 class="western">Vertex Detector</h3>
            <ul style="background-color:var(--PI-lightred);border-block:3px solid var(--PI-darkred);padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px;">
                The HD-PI Mu3e group is responsible for the <b> construction and commissioning of the vertex detector </b>. 
                In close cooperation with the workshop, various engineering solutions are explored for the assembly of detector components, the installation, and the connection to cooling and powering systems. 
                A mockup of the experiment is also available nearby the workshop, where solutions can be physically verified.
                <br>
                </br>
                <div style="text-align: center;">
                    <img src="<?php echo $figures;?>/mu3e/vertex.jpg" alt="mu3e-vertex" style="width:30%;min-width:200px;height:auto;">
                </div>
            </ul>

            <h3 class="western">Simulation Studies</h3>
            <ul style="background-color:var(--PI-lightred);border-block:3px solid var(--PI-darkred);padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px;">            
                Alongside intensive hardware development, comprehensive simulation studies also complement the groups activies by helping understanding the effects of the detector's configuration on signal sensitivity.
                The group is also actively participating in improving track reconstruction under the <b> General Triplet Track Fit framework </b>.
                <br>
                </br>
                <div style="text-align: center;">
                    <img src="<?php echo $figures;?>/mu3e/tracks.png" alt="mu3e-tracks" style="width:30%;min-width:200px;height:auto;">
                </div>
            </ul>

            <h3 class="western">Future-Related Research Activites</h3>
            <ul style="background-color:var(--PI-lightred);border-block:3px solid var(--PI-darkred);padding-top:30px;padding-bottom:30px;padding-left:20px;padding-right:20px;">            
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget tristique neque. Aliquam erat volutpat. Aenean laoreet neque in efficitur ornare. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse eleifend dui diam, vel eleifend tortor accumsan in. Donec sed lorem purus. Cras malesuada magna at nisl ultrices viverra. Morbi orci justo, tincidunt ac condimentum ac, pellentesque et libero. Aliquam rutrum rutrum mauris a cursus. Nam facilisis orci lectus. Curabitur id enim eu elit tempor porttitor. Nulla facilisi. Nulla facilisi. Maecenas finibus iaculis mi, ut tempor sapien efficitur vestibulum.
                <br></br>
                <button onclick="location.href='./mu3e_phase2.php';"  style="background-color:var(--PI-darkred);border:0;color:var(--PI-sand);padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;">
                    More Details >>
                </button>
            </ul>
        </ul>
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>
<?php
$subpath = $_SERVER['REQUEST_URI'];
$incpath = "assets/inc";
include($incpath . "/config.php");
include($headerInc);
include("header.php.inc")
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
        <!-- Use function from PI to get the list from the database -TODO: find out how to make it resizable-->
        <?php physi_maliste("gruppe2='ATLAS' OR gruppe2='ATLAS,H1' OR gruppe3='ATLAS' 
                                                                    OR gruppe3='ATLAS,H1' OR gruppe2='H1' OR gruppe2='mu3e'
                                                                    OR gruppe2='mu3e,H1'");
        ?>
        <br/>
        <h2 class="western">Former Group Members</h2>   

        <div style="width:95%; margin:auto;">
            <h3>PhD Students</h3>

            Dr. Christof Sauer (ATLAS SM, 2023)<br>
            Dr. Marta Czurylo (ATLAS DiHiggs, 2023)<br>
            Dr. Tamasi Kar (Triplet Track Trigger, 2020)<br>
            Dr. Arthur Bolz (H1, 2019)<br>
            Dr. Mathis Kolb (ATLAS Top, 2018)<br>
            Dr. Maddalena Guilini (ATLAS Top, 2017) <br>
            Dr. David Sosa (ATLAS Top, 2016) <br>
            Dr. Rohin Narayan (ATLAS SM, 2014)<br>
            Dr. Sebastian Schmitt (ATLAS SM, 2013)<br>
            Dr. Gregor Kasieczka (ATLAS Top, 2013)<br>
            Dr. Hayk Pirumov (H1, 2013)<br>
            Dr. Florian Huber (H1, 2012)<br>
        
            <h3>Master</h3>
            Tobias Linker (ATLAS GNN Graph Segmentation on FPGA, 2024)<br>
            Poppy Hicks (ATLAS Tracking with GNNs, 2024)<br>
            Sachin Gupta (ATLAS Tracking with CA, 2024)<br>
            Christof Sauer (ATLAS QCD, 2019)<br>
            Arthur Bolz (H1, 2015)<br>
            Mathis Kolb (ATLAS Top, 2014)<br>
            Sebastian Dittmeier (ATLAS 60 GHz, 2013)<br>
            David Sosa (ATLAS Top, 2012)<br>

            <h3>Bachelor</h3>
            David Karres (Mu3e Cosmic Trigger with GNNs, 2024) <br>
            Aleem Sheikh (Triplet Track Trigger, 2022) <br>
            Konstantin Neureither (Mu3e Cosmic Trigger, 2020)<br>
            Michele Blago (Triplet Track Trigger, 2015)<br>
            Jens Petersen (ATLAS 60 GHz, 2013)<br>
            Thomas Hugle (ATLAS 60 GHz, 2013)<br>
            Sven Pirner (ATLAS L1TT, 2010)<br>
            Daniel Glodeck (ATLAS L1TT, 2010)<br>

            <h3>Diploma</h3>
            Robert Weidel (ATLAS L1TT, 2011)<br>
            Patricia Sauer (ATLAS Elektron-ID, 2011)<br>
            Sascha Lischer (ATLAS 60 GHz, 2011)<br>
            Arno John (ATLAS L1TT, 2011)<br>
        </div>

<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->
    </div>
</body>
</html>

<?php
include($footerInc); 
?>
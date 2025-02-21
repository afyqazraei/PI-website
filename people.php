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
        <div class="member">
            <img src="prof_schoning.jpg" alt="Prof. Dr. André Schöning">
            <div class="member-info">
                <h3>Prof. Dr. André Schöning</h3>
                <p>Email: <a href="mailto:schoning@physi.uni-heidelberg.de">schoning@physi.uni-heidelberg.de</a></p>
                <p>Room: 101</p>
                <p>Phone: +49 123 456 789</p>
            </div>
        </div>

        <h2 class="western">PostDocs</h2> 
        <div class="member">
            <img src="tamasi_kar.jpg" alt="Dr. Tamasi Kar">
            <div class="member-info">
                <h3>Tamasi Kar</h3>
                <p>Email: <a href="mailto:kar@physi.uni-heidelberg.de">kar@physi.uni-heidelberg.de</a></p>
                <p>Room: 102</p>
                <p>Phone: +49 123 456 790</p>
            </div>
        </div>

        <div class="member">
            <img src="heiko_augustin.jpg" alt="Dr. Heiko Augustin">
            <div class="member-info">
                <h3>Heiko Augustin</h3>
                <p>Email: <a href="mailto:augustin@physi.uni-heidelberg.de">augustin@physi.uni-heidelberg.de</a></p>
                <p>Room: 103</p>
                <p>Phone: +49 123 456 791</p>
            </div>
        </div>

        <h2 class="western">PhD Students</h2> 
        <div class="member">
            <img src="joachim_zinsser.jpg" alt="Joachim Zinßer">
            <div class="member-info">
                <h3>Joachim Zinßer</h3>
                <p>Email: <a href="mailto:zinsser@physi.uni-heidelberg.de">zinsser@physi.uni-heidelberg.de</a></p>
                <p>Room: 201</p>
                <p>Phone: +49 123 456 792</p>
            </div>
        </div>

        <h2 class="western">Master Students</h2> 
        <div class="member">
            <img src="effrosyni_zachou.jpg" alt="Effrosyni Zachou">
            <div class="member-info">
                <h3>Effrosyni Zachou</h3>
                <p>Email: <a href="mailto:zachou@example.com">zachou@example.com</a></p>
                <p>Room: 301</p>
                <p>Phone: +49 123 456 793</p>
            </div>
        </div>
        <h2 class="western">Bachelor Students</h2> 
        <div class="member">
            <img src="effrosyni_zachou.jpg" alt="Effrosyni Zachou">
            <div class="member-info">
                <h3>Effrosyni Zachou</h3>
                <p>Email: <a href="mailto:zachou@example.com">zachou@example.com</a></p>
                <p>Room: 301</p>
                <p>Phone: +49 123 456 793</p>
            </div>
        </div>
<!-- ++++++++++++++++++++ End Main Content of the page here! +++++++++++++++++++++ -->


    </div>
</body>
</html>

<?php
include($footerInc); 
?>
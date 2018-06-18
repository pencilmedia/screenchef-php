<?php
// SETTING THE ROOT VARIABLE WE CAN USE IT TO CREATE RELATIVE PATHS
    include("../config.inc");
    $ROOT = '../'; // Set root for relative paths
    $thisPage="components"; 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<title>Components</title>
<?php include("$ROOT/inc/head.inc.php"); ?>
</head>
<body class="components">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <main>
        <?php include("$ROOT/inc/nav.inc.php"); ?>
        <?php include("tabs.inc.php"); ?>
        <?php include("$ROOT/inc/foot.inc.php"); ?>   
    </main> 
</body>
</html>

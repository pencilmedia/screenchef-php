<?php
// SETTING THE ROOT VARIABLE WE CAN USE IT TO CREATE RELATIVE PATHS
    include("../config.inc");
    $ROOT = '../'; // Set root for relative paths
    $thisPage="holy-grail-grid"; 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
    <title><?php echo hmpgTitle ?></title>
    <?php include("../inc/head.inc.php"); ?>
    <style>
        
    </style>
    </head>
    <body>
        <div class="hg">
            <header class="hg__header">Title</header>
            <div class="hg__main">Content</div>
            <aside class="hg__left">Menu</aside>
            <aside class="hg__right">Ads</aside>
            <footer class="hg__footer">Footer</footer>
        </div>
    </body>
</html>

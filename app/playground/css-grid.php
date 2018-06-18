<?php
// SETTING THE ROOT VARIABLE WE CAN USE IT TO CREATE RELATIVE PATHS
    include("../config.inc");
    $ROOT = '../'; // Set root for relative paths
    $thisPage="css-grid"; 
?>
    <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
    <html class="no-js">
    <!--<![endif]-->

    <head>
        <title>
            <?php echo hmpgTitle ?>
        </title>
        <?php include("../inc/head.inc.php"); ?>
    </head>

    <body class="secondary">
        <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <main class="chef-grid">
            <?php include("../inc/nav.inc.php"); ?>
            <section class="chef-grid--content">
                <h1>CSS Grid</h1>
                <p>
                    <a href="https://css-tricks.com/snippets/css/complete-guide-grid/#prop-display">CSS Tricks: css-grid</a>
                </p>
                <p>
                    <a href="holy-grail-grid.php">Holy Grail CSS Grid</a>
                </p>
                <div class="css-grid css-grid--col-3">
                    <div class="css-grid--col">1
                        <p>xx</p>
                        <p>xx</p>
                        <p>xx</p>
                        <p>xx</p>
                        <p>xx</p>
                        <p>xx</p>
                        <p>xx</p>
                    </div>
                    <div class="css-grid--col">2</div>
                    <div class="css-grid--col">
                        <div class="css-grid css-grid--col-1">
                            <div class="css-grid--col">
                              <h6>Nested Grid</h6>
                            </div>
                        </div>
                        <div class="css-grid css-grid--col-2">
                            <div class="css-grid--col">1b</div>
                            <div class="css-grid--col">2b</div>
                        </div>
                        <div class="css-grid css-grid--col-3">
                            <div class="css-grid--col">1c</div>
                            <div class="css-grid--col">2c</div>
                            <div class="css-grid--col">3c</div>
                        </div>
                    </div>
                    </div>
                </div>
            </section>
            <?php include("../inc/foot.inc.php"); ?>
        </main>
    </body>

    </html>
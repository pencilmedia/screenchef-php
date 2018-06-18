<?php
// SETTING THE ROOT VARIABLE WE CAN USE IT TO CREATE RELATIVE PATHS
    include("../config.inc");
    $ROOT = '../'; // Set root for relative paths
    $thisPage="css-variables"; 
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
    article section {
        margin: 0 15%;
    }
    section {
        border-bottom: 1px solid #bbb;
    }
    // CSS Variables
    section p {
        color: red;
    }
    @supports(--css: variables) {
        section p {
            --my-color: blue;
            color: var(--my-color, 'blue');
        }
    }
</style>
</head>
    <body class="secondary">
        <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
        <main class="chef-grid">
            <?php include("../inc/nav.inc.php"); ?>
            <section class="chef-grid--content">
                <h2>CSS Variables</h2>
                <p>
                    If your browser supports CSS variables, this text will be blue, otherwise it will be red.
                </p>
            </section>
            <?php include("../inc/foot.inc.php"); ?>
        </main>
    </body>
</html>

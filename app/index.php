<?php

require('../vendor/autoload.php'); // For heroku php hosting

// SETTING THE ROOT VARIABLE WE CAN USE IT TO CREATE RELATIVE PATHS
    include("config.inc");
    $ROOT = '/'; // Set root for relative paths
    $thisPage="home"; 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<title><?php echo hmpgTitle ?></title>
<?php include("inc/head.inc.php"); ?>
</head>
<body class="hmpg">
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <main>
    <?php include("inc/nav.inc.php"); ?>
        <article>
            <section>
                <p>
                    <img src="assets/img/example.jpg" alt="test image">
                </p>
                <a href="#/">Link Example</a>
                <i class="fas fa-star"></i>
            </section>
            <section>
                <h3>Color Palette</h3>
                <h4>Dark</h4>
                <div class="color-palette">
                    <div class="box-color black">black</div>
                    <div class="box-color charcoal">charcoal</div>
                    <div class="box-color grey-darkest">greyDarkest</div>
                    <div class="box-color grey-darker">greyDarker</div>
                    <div class="box-color grey-dark">greyDark</div>
                    <div class="box-color grey">grey</div>
                    <div class="box-color grey-light">greyLight</div>
                    <div class="box-color grey-lighter">greyLighter</div>
                    <div class="box-color grey-lightest">greyLightest</div>
                </div>

                <h4>Colors</h4>
                <div class="color-palette">
                    <div class="box-color blue">blue</div>
                    <div class="box-color red">red</div>
                    <div class="box-color orange">orange</div>
                    <div class="box-color yellow">yellow</div>
                    <div class="box-color green">green</div>
                    <div class="box-color brown">brown</div>
                    <div class="box-color pink">pink</div>
                    <div class="box-color purple">purple</div>
                </div>
            </section>
            <section>
                <h2>Exploration</h2>
                <p>
                    <a href="css-variables.php">CSS Variables</a>
                </p>
            </section>
        </article>
        <ul class="tab-nav">
          <li>
            <a class="button active" href="#one">Tab 1</a>
          </li>
          <li>
            <a class="button" href="#two">Tab 2</a>
          </li>
          <li>
            <a class="button" href="#three">Tab 3</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="one">
            <h5>Tab 1</h5>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
          </div>
          <div class="tab-pane" id="two">
            <h5>Tab 2</h5>
            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
          </div>
          <div class="tab-pane" id="three">
            <h5>Tab 3</h5>
            <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
          </div>
        </div>


        <article class="chef-grid--content">
            <section>
                <h2>Playground</h2>
                <p>
                    <a href="playground/css-variables.php">CSS Variables</a>
                </p>
                <p>
                    <a href="playground/css-grid.php">CSS Grid</a>
                </p>
                <h5>Strikethrough</h5>
                <p>
                    <span style="text-decoration: line-through">strike this out</span>
                </p>
                <p>line through whitespace
                    <span style="text-decoration: line-through">&nbsp;&nbsp;&nbsp;</span>
                </p>
                <p>
                <span style='color:red;text-decoration:line-through'>
                    <span style='color:black'>black with red strikethrough</span>
                </span>
                </p>
            </section>
        </article>
        <!-- BEGIN: Footer -->
        <?php include("inc/foot.inc.php"); ?>   
    </main> 
</body>
</html>

<?php /* Smarty version Smarty-3.1.18, created on 2014-05-20 21:52:51
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85761021653734ef00a58e4-75316201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1400585270,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1400586769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85761021653734ef00a58e4-75316201',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53734ef0156f09_36048729',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53734ef0156f09_36048729')) {function content_53734ef0156f09_36048729($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
  Antonio's Pasta | Home
</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/carousel.css"> -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  
  <body>
    <div class="navbar-wrapper">
      <div class="container col-md-offset-1 col-md-10">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Antonio's Pasta</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                
  <li class="active"><a href="index.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="recipes.php">Recipes</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li><a href="contact.php">Contact</a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
  <div id="home-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#home-carousel" data-slide-to="1"></li>
      <li data-target="#home-carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/carousel_pasta_salad.jpg" alt="pasta salad">
      </div>
      <div class="item">
        <img src="images/carousel_bucatini.jpg" alt="bucatini">
      </div>
      <div class="item">
        <img src="images/carousel_smoked_salmon_penne.jpg" alt="pasta salad">
      </div>
    </div>
    <a class="left carousel-control" href="#home-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#home-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div>
  
  <div class="jumbotron col-md-offset-3 col-md-6">
    <div class="stars">
      <span class="glyphicon glyphicon-star wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
      <span class="glyphicon glyphicon-star wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
      <span class="glyphicon glyphicon-star wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
    </div>
    
    <h1>Antonio's Pasta</h1>
    <p>Authentic Italian pasta products.</p>
    <p>
      <a class="btn btn-lg btn-default" href="about.php" role="button">About us</a>
      <a class="btn btn-lg btn-default" href="recipes.php" role="button">View recipes</a>
      <a class="btn btn-lg btn-default" href="gallery.php" role="button">View gallery</a>
      <a class="btn btn-lg btn-default" href="contact.php" role="button">Contact us</a>
    </p>
  </div>
  
  <div id="page-descriptions" class="row col-md-offset-1 col-md-10">
    <div class="col-md-3">
      <h2>About Our Company</h2>
      <p>
        Learn about our mission statement, history and manufacturing process.
      </p>
      <a class="btn btn-default" href="about.php" role="button">About &raquo;</a>
    </div>
    <div class="col-md-3">
      <h2>About Our Company</h2>
      <p>
        Learn about our mission statement, history and manufacturing process.
      </p>
      <a class="btn btn-default" href="about.php" role="button">About &raquo;</a>
    </div>
    <div class="col-md-3">
      <h2>View Food Gallery</h2>
      <p>
        Learn about our mission statement, history and manufacturing process.
      </p>
      <a class="btn btn-default" href="about.php" role="button">About &raquo;</a>
    </div>
    <div class="col-md-3">
      <h2>Contact Us</h2>
      <p>
        Learn about our mission statement, history and manufacturing process.
      </p>
      <a class="btn btn-default" href="about.php" role="button">About &raquo;</a>
    </div>
  </div>
  
  
  
  <!--
  <div class="divider">
    <span class="icon icon-settings wow rotateIn animated" data-wow-delay=".9" style="visibility: visible;-webkit-animation-delay: .9; -moz-animation-delay: .9; animation-delay: .9;"></span>
  </div>
  
  <section id="services" class="section services">
    <div class="container">
      <h2 class="title wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;">Our <span>Services</span></h2>
      <h4 class="subtitle wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;">Lorem ipsum dolor sit amet, has persius detraxit ea. Eu duis complectitur mei, corpora interesset quaerendum no nec, ius vidit consul graeci in. Ex quem option eos. Ei dictas propriae usu, eius omnis eu ius, aperiam efficiendi ut vis.</h4>
      <div class="row">
        <div class="col-sm-4">
          <div class="service wow fadeInUpBig animated" data-wow-delay=".4s" style="visibility: visible;-webkit-animation-delay: .4s; -moz-animation-delay: .4s; animation-delay: .4s;">
            <span class="icon icon-cloud"></span>
            <h3>Cloud Store</h3>
            <p>Lorem ipsum dolor sit amet, has persius detraxit ea. Eu duis complectitur mei, corpora interesset quaerendum no nec, ius vidit consul graeci in. Ex quem option eos.</p>
          </div>
        </div>
        <div class="col-sm-4 wow fadeInUpBig animated" data-wow-delay=".6s" style="visibility: visible;-webkit-animation-delay: .6s; -moz-animation-delay: .6s; animation-delay: .6s;">
          <div class="service">
            <span class="icon icon-params"></span>
            <h3>Great Stats</h3>
            <p>Usu ei facer bonorum, elitr mollis at mei. Id vel omnis tollit doming. Dicant elaboraret nec te, aeque possim nec at. Usu ei facer bonorum, necsar at.</p>
          </div>
        </div>
        <div class="col-sm-4 wow fadeInUpBig animated" data-wow-delay=".8s" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s;">
          <div class="service">
            <span class="icon icon-paperplane"></span>
            <h3>Fast Transfer</h3>
            <p>Accusamus mnesarchum posidonium in sed. Ex magna munere est. Tamquam signiferumque ea sit, id sea libris detraxit, ne indoctum honestatis mel primus.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    -->

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="./fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <!-- Add fancyBox -->
    <!-- <script type="text/javascript" src="./fancybox/source/jquery.fancybox.js?v=2.1.5"></script> -->
    <link rel="stylesheet" href="./fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="./fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="./fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="./fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
    <!-- <script type="text/javascript" src="./fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script> -->
    <link rel="stylesheet" href="./fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
    <script type="text/javascript" src="./fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          // $(".fancybox").fancybox();

          $('.fancybox-thumbs').fancybox({
            prevEffect : 'none',
            nextEffect : 'none',

            closeBtn  : true,
            arrows    : true,
            nextClick : true,
            autoSize  : true,

            helpers : {
              thumbs : {
                width  : 50,
                height : 50
              }
            }
          });
      });
    </script>
  </body>
</html><?php }} ?>

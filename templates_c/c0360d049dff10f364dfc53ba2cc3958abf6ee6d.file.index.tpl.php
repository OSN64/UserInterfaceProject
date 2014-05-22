<?php /* Smarty version Smarty-3.1.18, created on 2014-05-22 14:05:37
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1585899371537b64da37ba42-33824551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1400723333,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1400731533,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1585899371537b64da37ba42-33824551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537b64da46cb56_35123539',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537b64da46cb56_35123539')) {function content_537b64da46cb56_35123539($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
  Antonio's Pasta | Home
</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
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
              <form class="navbar-form navbar-right" role="form">
                <div class="form-group">
                  <input type="text" placeholder="Linguini" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Search</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="content" class="container">
      
  <div id="home-carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
      <li data-target="#home-carousel" data-slide-to="1"></li>
      <li data-target="#home-carousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/carousel_pasta_salad.jpg" alt="pasta salad">
        <div class="container">
          <div class="carousel-caption">
            <div class="jumbotron">
              <div class="stars">
                <span class="glyphicon glyphicon-star wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
                <span class="glyphicon glyphicon-star wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
                <span class="glyphicon glyphicon-star wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
              </div>
              
              <h1>Antonio's Pasta</h1>
              <p>Authenticly Italian pasta products.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="images/carousel_bucatini.jpg" alt="bucatini">
        <div class="container">
          <div class="carousel-caption">
            <div class="jumbotron">
              <div class="stars">
                <span class="glyphicon glyphicon-star wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
                <span class="glyphicon glyphicon-star wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
                <span class="glyphicon glyphicon-star wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
              </div>
              
              <h1>Antonio's Pasta</h1>
              <p>Authenticly Italian pasta products.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="images/carousel_smoked_salmon_penne.jpg" alt="pasta salad">
        <div class="container">
          <div class="carousel-caption">
            <div class="jumbotron">
              <div class="stars">
                <span class="glyphicon glyphicon-star wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
                <span class="glyphicon glyphicon-star wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
                <span class="glyphicon glyphicon-star wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
              </div>
              
              <h1>Antonio's Pasta</h1>
              <p>Authenticly Italian pasta products.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#home-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#home-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div>
  
  <div id="page-descriptions" class="row col-md-offset-1 col-md-10">
    <div class="col-md-3">
      <h2>About Us</h2>
      <p>
        Learn about our mission statement, company history and creation process.
      </p>
      <a class="btn btn-danger" href="about.php" role="button">About &raquo;</a>
    </div>
    <div class="col-md-3">
      <h2>Our Recipes</h2>
      <p>
        Be inspired by delicious recipes that are absolutely perfect for our range of pasta.
      </p>
      <a class="btn btn-danger" href="recipes.php" role="button">Recipes &raquo;</a>
    </div>
    <div class="col-md-3">
      <h2>Food Gallery</h2>
      <p>
        View photos of our pasta products and dishes which can be created with them.
      </p>
      <a class="btn btn-danger" href="gallery.php" role="button">Gallery &raquo;</a>
    </div>
    <div class="col-md-3">
      <h2>Contact Us</h2>
      <p>
        Want to send us feedback or ask a question? Contact us directly via a message.
      </p>
      <a class="btn btn-danger" href="contact.php" role="button">Contact &raquo;</a>
    </div>
  </div>

    </div>
    
    <div id="footer">
      <p class="text-muted">&copy; 2014 Antonio's Pasta</p>
    </div>
    
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
    <script src="./js/jquery.validate.min.js"></script>
    <script src="./js/script.js"></script>
  </body>
</html><?php }} ?>

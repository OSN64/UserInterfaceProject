<?php /* Smarty version Smarty-3.1.18, created on 2014-05-23 16:06:58
         compiled from "./templates/gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1548062478537dafba6453b5-80426856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d303b2f7cd87ae72a62416ca221bc8c45c6388a' => 
    array (
      0 => './templates/gallery.tpl',
      1 => 1400822791,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1400825038,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1548062478537dafba6453b5-80426856',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537dafba69f2b4_99855694',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537dafba69f2b4_99855694')) {function content_537dafba69f2b4_99855694($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="favicon.ico">
    <title>
  Antonio's Pasta | Gallery
</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  
  <body>
    <div id="background-overlay"></div>
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
            
  <li><a href="index.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="recipes.php">Recipes</a></li>
  <li class="active"><a href="gallery.php">Gallery</a></li>
  <li><a href="contact.php">Contact</a></li>

          </ul>
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="e.g. Linguini" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Search</button>
          </form>
        </div>
      </div>
    </div>
    
    <div id="content" class="container">
      

  <div id="sidebar" class="col-md-3">
    <div class="list-group col-md-offset-3 col-md-8">
      <p class="list-group-item">Dish Types</p>
      <a class="list-group-item list-group-item-danger" href="#pAnchor">Products </a>
      <a class="list-group-item list-group-item-success" href="#dAnchor">Dishes</a>
    </div>
  </div>

<div id="galContent" class="col-md-8">
  <span id="pAnchor" class="anchor"></span>
  <h2 class="page-header">Products</h2>
  
  <div class="row">
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_farfalle.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb" title="Farfalle">
        <img class="img-responsive" src="images/gallery_farfalle.jpg" alt="Farfalle" title="Farfalle">
        <p class="caption">Farfalle</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_strozzapreti.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb" title="Strozzapreti">
        <img class="img-responsive" src="images/gallery_strozzapreti.jpg" alt="Strozzapreti" title="Strozzapreti">
        <p class="caption">Strozzapreti</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_fusilli.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb" title="Fusilli">
        <img class="img-responsive" src="images/gallery_fusilli.jpg" alt="Fusilli" title="Fusilli">
        <p class="caption">Fusilli</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_conchiglie.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb" title="Conchiglie">
        <img class="img-responsive" src="images/gallery_conchiglie.jpg" alt="Conchiglie" title="Conchiglie">
        <p class="caption">Conchiglie</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_gnocchi.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb" title="Gnocchi">
        <img class="img-responsive" src="images/gallery_gnocchi.jpg" alt="Gnocchi" title="Gnocchi">
        <p class="caption">Gnocchi</p>
      </a>
    </div>
  </div>
  
  <span id="dAnchor" class="anchor"></span>
  <h2 class="page-header">Dishes</h2>

  <div class="row">
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_puttanesca.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb" title="Puttanesca">
        <img class="img-responsive" src="images/gallery_puttanesca.jpg" alt="Puttanesca" title="Puttanesca">
        <p class="caption">Puttanesca</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_macaroni.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb" title="Macaroni">
        <img class="img-responsive" src="images/gallery_macaroni.jpg" alt="Macaroni" title="Macaroni">
        <p class="caption">Macaroni</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_bucatini.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb" title="Bucatini">
        <img class="img-responsive" src="images/gallery_bucatini.jpg" alt="Bucatini" title="Bucatini">
        <p class="caption">Bucatini</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_salad.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb" title="Salad">
        <img class="img-responsive" src="images/gallery_salad.jpg" alt="Salad" title="Salad">
        <p class="caption">Salad</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_salmon.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb" title="Salmon">
        <img class="img-responsive" src="images/gallery_salmon.jpg" alt="Salmon" title="Salmon">
        <p class="caption">Salmon</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_mushroom.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb" title="Mushroom">
        <img class="img-responsive" src="images/gallery_mushroom.jpg" alt="Mushroom" title="Mushroom">
        <p class="caption">Mushroom</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_seafood.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb" title="Seafood">
        <img class="img-responsive" src="images/gallery_seafood.jpg" alt="Seafood" title="Seafood">
        <p class="caption">Seafood</p>
      </a>
    </div>
  </div>

    </div>
    
    <div id="footer">
      <p class="text-muted">&copy; 2014 Antonio's Pasta</p>
    </div>
    
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="./fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <!-- Add fancyBox -->
    <link rel="stylesheet" href="./fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
    <script type="text/javascript" src="./fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="./fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
    <script type="text/javascript" src="./fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
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

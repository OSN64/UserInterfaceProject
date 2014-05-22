<?php /* Smarty version Smarty-3.1.18, created on 2014-05-22 18:22:09
         compiled from "./templates/gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1548062478537dafba6453b5-80426856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d303b2f7cd87ae72a62416ca221bc8c45c6388a' => 
    array (
      0 => './templates/gallery.tpl',
      1 => 1400746924,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1400745853,
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
    <link rel="icon" type="image/png" href="./favicon.ico">
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
      

  <div id="sidebar" class="col-md-4">
    <div class="list-group col-md-offset-2 col-md-8">
      <p class="list-group-item">Dish Types</p>
      <a class="list-group-item list-group-item-danger" href="#pAnchor">Products </a>
      <a class="list-group-item list-group-item-success" href="#dAnchor">Dishes</a>
    </div>
  </div>

<div id="galContent" class="col-md-8">
  <div class="col-lg-12">
  <span id="pAnchor" class="anchor"></span>
      <h2 class="page-header">Products</h2>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Fettuccine with Lemon Tuna and Capers</h4>
    <a href="images/carousel_pasta_salad.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img class="img-responsive" src="images/carousel_pasta_salad.jpg" alt="Fettuccine with Lemon Tuna and Capers" title="Fettuccine with Lemon Tuna and Capers" >
  </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Creamy Salmon and Broad Bean Fettuccine</h4>
    <a href="images/carousel_bucatini.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img class="img-responsive" src="images/carousel_bucatini.jpg" alt="Creamy Salmon and Broad Bean Fettuccine" title="Creamy Salmon and Broad Bean Fettuccine">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Creamy Bacon Spaghetti with Poached Eggs</h4>
    <a href="images/Pasta_Puttanesca_by_koishikawagirl.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/Pasta_Puttanesca_by_koishikawagirl.jpg" alt="Creamy Bacon Spaghetti with Poached Eggs" title="Creamy Bacon Spaghetti with Poached Eggs">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Chilli Prawn and Tomato Spaghetti</h4>
    <a href="images/Pasta_e_fagioli_rapida.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/Pasta_e_fagioli_rapida.jpg" alt="Chilli Prawn and Tomato Spaghetti" title="Chilli Prawn and Tomato Spaghetti">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Bruschetta Pasta</h4>
  <a href="images/pasta_an1.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
    <img src="images/pasta_an1.jpg" alt="Bruschetta Pasta" title="Bruschetta Pasta">
  </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Fettuccine with lemon tuna and capers</h4>
    <a href="images/pasta_an4.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/pasta_an4.jpg" alt="Fettuccine with lemon tuna and capers" title="Fettuccine with lemon tuna and capers">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Greek-Style Gnocchi</h4>
    <a href="images/pasta_an5.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/pasta_an5.jpg" alt="Greek-Style Gnocchi" title="Greek-Style Gnocchi" >
    </a>
  </div>
  
    <span id="dAnchor" class="anchor"></span>

  <div class="col-lg-12">
    <h1 class="page-header">Dishes</h1>
    <span id="dAnchor" class="anchor"></span>
  </div>

  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Pasta Salad</h4>
    <a href="images/carousel_smoked_salmon_penne.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/carousel_smoked_salmon_penne.jpg" alt="Pasta Salad" title="Pasta Salad">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Fettuccine with Mixed Mushroom Sauce</h4>
    <a href="images/pasta_an2.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/pasta_an2.jpg" alt="Fettuccine with Mixed Mushroom Sauce" title="Fettuccine with Mixed Mushroom Sauce">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Zucchini and Tomato Lasagne</h4>
    <a href="images/Macaroni_Pasta.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/Macaroni_Pasta.jpg" alt="Zucchini and Tomato Lasagne" title="Zucchini and Tomato Lasagne">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Amatriciana</h4>
    <a href="images/pasta_an3.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/pasta_an3.jpg" alt="Amatriciana" title="Amatriciana">
    </a>
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

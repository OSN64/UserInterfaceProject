<?php /* Smarty version Smarty-3.1.18, created on 2014-05-20 03:57:05
         compiled from "./templates/gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117126596853796cd557b8d6-74300277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d303b2f7cd87ae72a62416ca221bc8c45c6388a' => 
    array (
      0 => './templates/gallery.tpl',
      1 => 1400522209,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1400497904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117126596853796cd557b8d6-74300277',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53796cd557c2c1_98773620',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53796cd557c2c1_98773620')) {function content_53796cd557c2c1_98773620($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
  Antonio's Pasta | Gallery
</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  
  <body>
    <div class="navbar-wrapper">
      <div class="container col-md-offset-1 col-md-10">
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
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
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
<div class="col-md-offset-2 col-md-8">
  <div class="row">
    <div class="col-xs-6 col-md-3">
      <a href="images/carousel_pasta_salad.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_pasta_salad.jpg" alt="...">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
      <a href="images/carousel_bucatini.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_bucatini.jpg" alt="...">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
      <a href="images/carousel_bucatini.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_bucatini.jpg" alt="...">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
      <a href="images/carousel_pasta_salad.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_pasta_salad.jpg" alt="...">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
      <a href="images/carousel_smoked_salmon_penne.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_smoked_salmon_penne.jpg" alt="...">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
      <a href="images/carousel_bucatini.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_bucatini.jpg" alt="...">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
      <a href="images/carousel_smoked_salmon_penne.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_smoked_salmon_penne.jpg" alt="...">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
      <a href="images/carousel_bucatini.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_bucatini.jpg" alt="...">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
      <a href="images/carousel_smoked_salmon_penne.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_smoked_salmon_penne.jpg" alt="...">
      </a>
    </div>
  </div>
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
  </body>
</html><?php }} ?>
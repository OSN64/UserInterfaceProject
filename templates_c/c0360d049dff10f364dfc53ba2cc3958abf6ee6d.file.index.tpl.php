<?php /* Smarty version Smarty-3.1.18, created on 2014-05-19 17:52:31
         compiled from "./templates/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85761021653734ef00a58e4-75316201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0360d049dff10f364dfc53ba2cc3958abf6ee6d' => 
    array (
      0 => './templates/index.tpl',
      1 => 1400485949,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1400485912,
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
  Index
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
    
    
  <div id="home-carousel-container" class="col-md-12">
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
  </div>
  
  <div class="jumbotron col-md-offset-3 col-md-6">
    <h1>Antonio's Pasta</h1>
    <p>Authentic Italian pasta products.</p>
    <p>
      <a class="btn btn-lg btn-default" href="about.php" role="button">About us</a>
      <a class="btn btn-lg btn-default" href="recipes.php" role="button">View recipes</a>
      <a class="btn btn-lg btn-default" href="gallery.php" role="button">View gallery</a>
      <a class="btn btn-lg btn-default" href="contact.php" role="button">Contact us</a>
    </p>
  </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  </body>
</html><?php }} ?>

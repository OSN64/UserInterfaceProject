<?php /* Smarty version Smarty-3.1.18, created on 2014-05-19 23:13:36
         compiled from "./templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14200231715379b6fb652b01-44679734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a05a7b8b1f5e72808bdcb576f7ec0fe40032c1d7' => 
    array (
      0 => './templates/contact.tpl',
      1 => 1400505214,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1400499141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14200231715379b6fb652b01-44679734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5379b6fb7a8ae3_49179254',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5379b6fb7a8ae3_49179254')) {function content_5379b6fb7a8ae3_49179254($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
  Antonio's Pasta | Contact Us
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
  <li><a href="gallery.php">Gallery</a></li>
  <li class="active"><a href="contact.php">Contact</a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
  <div class="jumbotron col-md-offset-3 col-md-6">
    <h1>Contact Page Placeholder</h1>
    <p>Authentic Italian style pasta.</p>
    <p>
      <a class="btn btn-lg btn-default" href="#" role="button">About us</a>
      <a class="btn btn-lg btn-default" href="#" role="button">View recipes</a>
      <a class="btn btn-lg btn-default" href="#" role="button">View gallery</a>
      <a class="btn btn-lg btn-default" href="#" role="button">Contact us</a>
    </p>
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

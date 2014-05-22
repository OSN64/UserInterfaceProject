<?php /* Smarty version Smarty-3.1.18, created on 2014-05-22 12:07:46
         compiled from "./templates/contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76886685537b64d81e6110-78782473%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a05a7b8b1f5e72808bdcb576f7ec0fe40032c1d7' => 
    array (
      0 => './templates/contact.tpl',
      1 => 1400724186,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1400596106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76886685537b64d81e6110-78782473',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537b64d826c502_36802414',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537b64d826c502_36802414')) {function content_537b64d826c502_36802414($_smarty_tpl) {?><!DOCTYPE html>
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
  <li><a href="gallery.php">Gallery</a></li>
  <li class="active"><a href="contact.php">Contact</a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div id="content" class="container">
      
  <div class="container">
      
      <div class="row">
        <div class="col-lg-12">
          <h1 class="page-header">Contact <br> <small>We'd Love to Hear From You!</small></h1>
        </div>
        <div class="col-lg-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28183.887404867084!2d153.3501464!3d-27.994327!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b911afec71b6fcb%3A0x1153e617105dfcca!2sCreative+Pizza!5e0!3m2!1sen!2sau!4v1400675314054" width="100%" height="400px" scrolling="no" frameborder="0"  marginheight="0" marginwidth="0" style="border:0"></iframe>
        </div>
      </div><!-- /.row -->
      
      <div class="row">

        <div class="col-sm-8">
          <h3>Let's Get In Touch!</h3>
          <p>Lid est laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats vitaes nemo minima rerums unsers sadips amets. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            <form  id="contactus" role="form" method="POST" action="">
              <div class="row">
                <div class="form-group col-lg-4">
                  <label for="input1">Name</label>
                  <input type="text" name="name" class="form-control" id="input1" placeholder="eg: Dave Goldstene" required >
                </div>
                <div class="form-group col-lg-4">
                  <label for="input2">Email Address</label>
                  <input type="email" name="email" class="form-control" id="input2" placeholder="eg: Dave@techthrones.com" required >
                </div>
                <div class="form-group col-lg-4">
                  <label for="input3">Phone Number</label>
                  <input type="number" name="number" class="form-control" id="input3" placeholder="eg: 2323243" required >
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-lg-12">
                  <label for="input4">Message</label>
                  <textarea name="message" class="form-control" rows="6" id="input4" placeholder="Tell us what you want" required ></textarea>
                </div>
                <div class="form-group col-lg-12">
                  <input type="hidden" name="save" value="contact">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </div>
            </form>
        </div>

        <div class="col-sm-4">
          <h3>Modern Business</h3>
          <h4>A Start Bootstrap Template</h4>
          <p>
            5555 44th Street N.<br>
            Bootstrapville, CA 32323<br>
          </p>
          <p><i class="fa fa-phone"></i> <abbr title="Phone">P</abbr>: (555) 984-3600</p>
          <p><i class="fa fa-envelope-o"></i> <abbr title="Email">E</abbr>: <a href="mailto:feedback@startbootstrap.com">feedback@startbootstrap.com</a></p>
          <p><i class="fa fa-clock-o"></i> <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
        </div>

      </div><!-- /.row -->

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

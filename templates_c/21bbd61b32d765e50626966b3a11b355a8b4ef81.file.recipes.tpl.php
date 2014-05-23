<?php /* Smarty version Smarty-3.1.18, created on 2014-05-23 10:36:49
         compiled from "./templates/recipes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:61371423537dafb5c99cf8-43336370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '21bbd61b32d765e50626966b3a11b355a8b4ef81' => 
    array (
      0 => './templates/recipes.tpl',
      1 => 1400805408,
      2 => 'file',
    ),
    '9e6b070c8cb75a2b091a59dcbc2131b5d5a97bf5' => 
    array (
      0 => './templates/layout.tpl',
      1 => 1400803500,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '61371423537dafb5c99cf8-43336370',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_537dafb5cebb23_60009811',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_537dafb5cebb23_60009811')) {function content_537dafb5cebb23_60009811($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="./favicon.ico">
    <title>
  Antonio's Pasta | Recipes
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
  <li class="active"><a href="recipes.php">Recipes</a></li>
  <li><a href="gallery.php">Gallery</a></li>
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
      <a class="list-group-item list-group-item-danger" href="#type1">Main Course</a>
      <a class="list-group-item list-group-item-info" href="#type2">Quick &amp; Easy</a>
      <a class="list-group-item list-group-item-success" href="#type3">Vegetarian</a>
    </div>
  </div>
  
  <div class="panel-group col-md-7" id="recipe-list">
    <span id="type1" class="anchor"></span>
    <h2 class="page-header">Main Course Recipes</h2>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t1-d1">
            Fettuccine with Lemon Tuna and Capers
          </a>
        </h4>
      </div>
      <div id="t1-d1" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg .pull-right">
            <a href="images/carousel_pasta_salad.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img class="img-responsive" src="images/carousel_pasta_salad.jpg" alt="Fettuccine with Lemon Tuna and Capers" title="Fettuccine with Lemon Tuna and Capers" >
              <p class="caption">Fettuccine with Lemon Tuna and Capers</p>
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <br>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t1-d2">
            Creamy Salmon and Broad Bean Fettuccine
          </a>
        </h4>
      </div>
      <div id="t1-d2" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <a href="images/carousel_bucatini.jpg" class="thumbnail fancybox-thumbs " data-fancybox-group="thumb">
              <img class="img-responsive" src="images/carousel_bucatini.jpg" alt="Creamy Salmon and Broad Bean Fettuccine" title="Creamy Salmon and Broad Bean Fettuccine">
              <p class="caption">Creamy Salmon and Broad Bean Fettuccine</p>
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <br>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t1-d3">
            Creamy Bacon Spaghetti with Poached Eggs
          </a>
        </h4>
      </div>
      <div id="t1-d3" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <a href="images/Pasta_Puttanesca_by_koishikawagirl.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/Pasta_Puttanesca_by_koishikawagirl.jpg" alt="Creamy Bacon Spaghetti with Poached Eggs" title="Creamy Bacon Spaghetti with Poached Eggs">
              <p class="caption">Creamy Bacon Spaghetti with Poached Eggs</p>
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <br>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t1-d4">
            Fettuccine Boscaiola
          </a>
        </h4>
      </div>
      <div id="t1-d4" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <a href="images/pasta_an3.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/pasta_an3.jpg" alt="Fettuccine Boscaiola" title="Fettuccine Boscaiola">
              <p class="caption">Fettuccine Boscaiola</p>
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <br>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>

    <br>

    <span id="type2" class="anchor"></span>
    <h2 class="page-header">Quick & Easy Recipes</h2>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t2-d1">
            Pea, Mint and Prosciutto Pasta
          </a>
        </h4>
      </div>
      <div id="t2-d1" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
              <a href="images/Pasta_Puttanesca_by_koishikawagirl.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
                <img class="img-responsive" src="images/Pasta_Puttanesca_by_koishikawagirl.jpg" alt="Pea, Mint and Prosciutto Pasta" title="Pea, Mint and Prosciutto Pasta" >
                <p class="caption">Pea, Mint and Prosciutto Pasta</p>
              </a>
            </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <br>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t2-d2">
            Chilli Prawn and Tomato Spaghetti
          </a>
        </h4>
      </div>
      <div id="t2-d2" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <a href="images/Pasta_e_fagioli_rapida.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/Pasta_e_fagioli_rapida.jpg" alt="Chilli Prawn and Tomato Spaghetti" title="Chilli Prawn and Tomato Spaghetti">
              <p class="caption">Chilli Prawn and Tomato Spaghetti</p>
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <br>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    
    <br>
    
    <span id="type3" class="anchor"></span>
    <h2 class="page-header">Vegetarian Recipes</h2>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d1">
            Bruschetta Pasta
          </a>
        </h4>
      </div>
      <div id="t3-d1" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <a href="images/pasta_an1.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/pasta_an1.jpg" alt="Bruschetta Pasta" title="Bruschetta Pasta">
              <p class="caption">Bruschetta Pasta</p>
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <br>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d2">
            Pasta Salad
          </a>
        </h4>
      </div>
      <div id="t3-d2" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <a href="images/carousel_smoked_salmon_penne.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/carousel_smoked_salmon_penne.jpg" alt="Pasta Salad" title="Pasta Salad">
              <p class="caption">Pasta Salad</p>
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <br>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d3">
            Fettuccine with Mixed Mushroom Sauce
          </a>
        </h4>
      </div>
      <div id="t3-d3" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <a href="images/pasta_an2.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/pasta_an2.jpg" alt="Fettuccine with Mixed Mushroom Sauce" title="Fettuccine with Mixed Mushroom Sauce">
              <p class="caption">Fettuccine with Mixed Mushroom Sauce</p>
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <br>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d4">
            Zucchini and Tomato Lasagne
          </a>
        </h4>
      </div>
      <div id="t3-d4" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <a href="images/Macaroni_Pasta.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/Macaroni_Pasta.jpg" alt="Zucchini and Tomato Lasagne" title="Zucchini and Tomato Lasagne">
              <p class="caption">Zucchini and Tomato Lasagne</p>
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <br>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d5">
            Greek-Style Gnocchi 
          </a>
        </h4>
      </div>
      <div id="t3-d5" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <a href="images/pasta_an5.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/pasta_an5.jpg" alt="Greek-Style Gnocchi" title="Greek-Style Gnocchi">
              <p class="caption">Greek-Style Gnocchi </p>
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <br>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
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

{extends "layout.tpl"}

{block "title"}
  Antonio's Pasta | Gallery
{/block}

{block "nav-links"}
  <li><a href="index.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="recipes.php">Recipes</a></li>
  <li class="active"><a href="gallery.php">Gallery</a></li>
  <li><a href="contact.php">Contact</a></li>
{/block}

{block "content"}

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
{/block}
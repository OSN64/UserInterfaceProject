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
      <h1 class="page-header">Products</h1>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Lorpsedum</h4>
    <a href="images/carousel_pasta_salad.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img class="img-responsive" src="images/carousel_pasta_salad.jpg" alt="..." title="asdasddas" >
  </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Lorpsedum</h4>
    <a href="images/carousel_bucatini.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img class="img-responsive" src="images/carousel_bucatini.jpg" alt="..." title="asdasddas">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Lorpsedum</h4>
    <a href="images/Pasta_Puttanesca_by_koishikawagirl.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/Pasta_Puttanesca_by_koishikawagirl.jpg" alt="..." title="asdasddas">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Lorpsedum</h4>
    <a href="images/Pasta_e_fagioli_rapida.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/Pasta_e_fagioli_rapida.jpg" alt="..." title="asdasddas">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Lorpsedum</h4>
  <a href="images/pasta_an1.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
    <img src="images/pasta_an1.jpg" alt="..." title="asdasddas">
  </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Lorpsedum</h4>
    <a href="images/pasta_an4.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/pasta_an4.jpg" alt="..." title="asdasddas">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Lorpsedum</h4>
    <a href="images/pasta_an5.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/pasta_an5.jpg" alt="..." title="asdasddas" >
    </a>
  </div>
  
    <span id="dAnchor" class="anchor"></span>

  <div class="col-lg-12">
    <h1 class="page-header">Dishes</h1>
  </div>

  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Lorpsedum</h4>
    <a href="images/carousel_smoked_salmon_penne.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/carousel_smoked_salmon_penne.jpg" alt="..." title="asdasddas">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Lorpsedum</h4>
    <a href="images/pasta_an2.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/pasta_an2.jpg" alt="..." title="asdasddas">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Lorpsedum</h4>
    <a href="images/Macaroni_Pasta.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/Macaroni_Pasta.jpg" alt="..." title="asdasddas">
    </a>
  </div>
  <div class="col-lg-3 col-md-4 col-xs-6 thumb">
    <h4 style="text-align: center">Lorpsedum</h4>
    <a href="images/pasta_an3.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
      <img src="images/pasta_an3.jpg" alt="..." title="asdasddas">
    </a>
  </div>
</div>
{/block}
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
  <span id="pAnchor" class="anchor"></span>
  <h2 class="page-header">Products</h2>
  
  <div class="row">
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_farfalle.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img class="img-responsive" src="images/gallery_farfalle.jpg" alt="Farfalle" title="Farfalle" >
        <p class="caption">Farfalle</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_strozzapreti.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img class="img-responsive" src="images/gallery_strozzapreti.jpg" alt="Strozzapreti" title="Strozzapreti">
        <p class="caption">Strozzapreti</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_fusilli.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img class="img-responsive" src="images/gallery_fusilli.jpg" alt="Fusilli" title="Fusilli">
        <p class="caption">Fusilli</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_conchiglie.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img class="img-responsive" src="images/gallery_conchiglie.jpg" alt="Conchiglie" title="Conchiglie">
        <p class="caption">Conchiglie</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_gnocchi.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img class="img-responsive" src="images/gallery_gnocchi.jpg" alt="Gnocchi" title="Gnocchi">
        <p class="caption">Gnocchi</p>
      </a>
    </div>
  </div>
  
  <span id="dAnchor" class="anchor"></span>
  <h2 class="page-header">Dishes</h2>

  <div class="row">
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_puttanesca.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img class="img-responsive" src="images/gallery_puttanesca.jpg" alt="Puttanesca" title="Puttanesca" >
        <p class="caption">Puttanesca</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_macaroni.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img class="img-responsive" src="images/gallery_macaroni.jpg" alt="Macaroni" title="Macaroni" >
        <p class="caption">Macaroni</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_bucatini.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img class="img-responsive" src="images/gallery_bucatini.jpg" alt="Bucatini" title="Bucatini" >
        <p class="caption">Bucatini</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_salad.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img class="img-responsive" src="images/gallery_salad.jpg" alt="Salad" title="Salad" >
        <p class="caption">Salad</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_salmon.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img class="img-responsive" src="images/gallery_salmon.jpg" alt="Salmon" title="Salmon" >
        <p class="caption">Salmon</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_mushroom.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img class="img-responsive" src="images/gallery_mushroom.jpg" alt="Mushroom" title="Mushroom" >
        <p class="caption">Mushroom</p>
      </a>
    </div>
    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
      <a href="images/gallery_seafood.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img class="img-responsive" src="images/gallery_seafood.jpg" alt="Seafood" title="Seafood" >
        <p class="caption">Seafood</p>
      </a>
    </div>
  </div>
{/block}
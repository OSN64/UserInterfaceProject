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
<div id="navbar-container" class="col-md-4">
    <div class="list-group col-md-offset-2 col-md-8">
      <p class="list-group-item">Dish Types</p>
      <a class="list-group-item" href="#type1">Main Course</a>
      <a class="list-group-item" href="#type2">Quick &amp; Easy</a>
      <a class="list-group-item" href="#type3">Vegetarian</a>
    </div>
  </div>
<div class="col-md-8">
  <div class="row">
    <div class="col-xs-6 col-md-3">
      <h4 style="text-align: center">Lorpsedum</h4>
      <a href="images/carousel_pasta_salad.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_pasta_salad.jpg" alt="..." title="asdasddas" >
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
      <h4 style="text-align: center">Lorpsedum</h4>
      <a href="images/carousel_bucatini.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_bucatini.jpg" alt="..." title="asdasddas">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
    <h4 style="text-align: center">Lorpsedum</h4>
      <a href="images/carousel_bucatini.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_bucatini.jpg" alt="..." title="asdasddas">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
    <h4 style="text-align: center">Lorpsedum</h4>
      <a href="images/carousel_pasta_salad.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_pasta_salad.jpg" alt="..." title="asdasddas">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
    <h4 style="text-align: center">Lorpsedum</h4>
      <a href="images/carousel_smoked_salmon_penne.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_smoked_salmon_penne.jpg" alt="..." title="asdasddas">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
    <h4 style="text-align: center">Lorpsedum</h4>
      <a href="images/carousel_bucatini.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_bucatini.jpg" alt="..." title="asdasddas">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
    <h4 style="text-align: center">Lorpsedum</h4>
      <a href="images/carousel_smoked_salmon_penne.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_smoked_salmon_penne.jpg" alt="..." title="asdasddas">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
    <h4 style="text-align: center">Lorpsedum</h4>
      <a href="images/carousel_bucatini.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_bucatini.jpg" alt="..." title="asdasddas">
      </a>
    </div>
    <div class="col-xs-6 col-md-3">
    <h4 style="text-align: center">Lorpsedum</h4>
      <a href="images/carousel_smoked_salmon_penne.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_smoked_salmon_penne.jpg" alt="..." title="asdasddas">
      </a>
    </div>
  </div>
</div>
{/block}
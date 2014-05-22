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
        <div class="row">
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
            <a href="images/carousel_bucatini.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/carousel_bucatini.jpg" alt="..." title="asdasddas">
            </a>
            </div>

            <div class="col-lg-12">
              <span id="dAnchor" class="anchor"></span>
              <h1 class="page-header">Dishes</h1>
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
            <div class="col-xs-6 col-md-3">
              <h4 style="text-align: center">Lorpsedum</h4>
              <a href="images/carousel_pasta_salad.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
                <img src="images/carousel_pasta_salad.jpg" alt="..." title="asdasddas" >
              </a>
            </div>
          </div>
    </div>
{/block}
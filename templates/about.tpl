{extends "layout.tpl"}

{block "title"}
  Antonio's Pasta | About
{/block}

{block "nav-links"}
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="about.php">About</a></li>
  <li><a href="recipes.php">Recipes</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li><a href="contact.php">Contact</a></li>
{/block}

{block "content"}
<div class="col-md-offset-1 col-md-10">
  <div class="row featurette">
    <div class="col-md-7 vertical-middle">
      <h2 class="featurette-heading">Mission Statement</h2>
      <p class="lead">
        Antonio's Pasta is dedicated to producing only the finest quality pasta. We take pride in our products
        as they are representative of our commitment and authenticity.
      </p>
    </div><div class="col-md-5 vertical-middle">
      <a href="images/carousel_smoked_salmon_penne.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_smoked_salmon_penne.jpg" alt="...">
        <p class="caption">Caption</p>
      </a>
    </div>
  </div>
  <div class="row featurette">
    <div class="col-md-5 vertical-middle">
      <a href="images/carousel_bucatini.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_bucatini.jpg" alt="...">
        <p class="caption">Caption</p>
      </a>
    </div><div class="col-md-7 vertical-middle">
      <h2 class="featurette-heading">History</h2>
      <p class="lead">
        Antonio's Pasta was founded in 19XX by Antonio Surname. Our products have been reknowned for its quality
        ever since its origin as a family run business.
      </p>
    </div>
  </div>
  <div class="row featurette">
    <div class="col-md-7 vertical-middle">
      <h2 class="featurette-heading">Creation Process</h2>
      <p class="lead">
        Our products are made at one of our manufacturing facilities nation wide. Great care has been taken to
        ensure that the ingredients we use are at our standard of quality and reflects the character of our
        products.
      </p>
    </div><div class="col-md-5 vertical-middle">
      <a href="images/carousel_pasta_salad.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
        <img src="images/carousel_pasta_salad.jpg" alt="...">
        <p class="caption">Caption</p>
      </a>
    </div>
  </div>
</div>
{/block}
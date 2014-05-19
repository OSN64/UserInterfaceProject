{extends "layout.tpl"}

{block "title"}
  About
{/block}

{block "nav-links"}
  <li><a href="index.php">Home</a></li>
  <li class="active"><a href="about.php">About</a></li>
  <li><a href="recipes.php">Recipes</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li><a href="contact.php">Contact</a></li>
{/block}

{block "content"}
<div class="col-md-offset-2 col-md-8">
  <hr class="featurette-divider">
  
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Mission Statement</h2>
      <p class="lead">
        Antonio's pasta is dedicated to only producing the finest quality pasta. Some other stuff here.
      </p>
    </div>
    <div class="col-md-5">
      <img src="" alt="picture">
    </div>
  </div>
  
  <hr class="featurette-divider">
  
  <div class="row featurette">
    <div class="col-md-5">
      <img src="" alt="picture">
    </div>
    <div class="col-md-7">
      <h2 class="featurette-heading">History</h2>
      <p class="lead">
        Antonio's pasta is dedicated to only producing the finest quality pasta. Some other stuff here.
      </p>
    </div>
  </div>
  
  <hr class="featurette-divider">
  
  <div class="row featurette">
    <div class="col-md-7">
      <h2 class="featurette-heading">Product Sources</h2>
      <p class="lead">
        Antonio's pasta is dedicated to only producing the finest quality pasta. Some other stuff here.
      </p>
    </div>
    <div class="col-md-5">
      <img src="" alt="picture">
    </div>
  </div>
  
  <hr class="featurette-divider">
</div>
{/block}
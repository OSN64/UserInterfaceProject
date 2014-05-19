{extends "layout.tpl"}

{block "title"}
  Gallery
{/block}

{block "nav-links"}
  <li><a href="index.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="recipes.php">Recipes</a></li>
  <li class="active"><a href="gallery.php">Gallery</a></li>
  <li><a href="contact.php">Contact</a></li>
{/block}

{block "content"}
  <div class="jumbotron col-md-offset-3 col-md-6">
    <h1>Gallery Page Placeholder</h1>
    <p>Authentic Italian style pasta.</p>
    <p>
      <a class="btn btn-lg btn-default" href="#" role="button">About us</a>
      <a class="btn btn-lg btn-default" href="#" role="button">View recipes</a>
      <a class="btn btn-lg btn-default" href="#" role="button">View gallery</a>
      <a class="btn btn-lg btn-default" href="#" role="button">Contact us</a>
    </p>
  </div>
{/block}
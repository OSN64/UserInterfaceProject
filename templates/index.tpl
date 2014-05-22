{extends "layout.tpl"}

{block "title"}
Antonio's Pasta | Home
{/block}

{block "nav-links"}
<li class="active"><a href="index.php">Home</a></li>
<li><a href="about.php">About</a></li>
<li><a href="recipes.php">Recipes</a></li>
<li><a href="gallery.php">Gallery</a></li>
<li><a href="contact.php">Contact</a></li>
{/block}

{block "content"}
<div id="home-carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#home-carousel" data-slide-to="1"></li>
    <li data-target="#home-carousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/carousel_pasta_salad.jpg" alt="pasta salad">
      <div class="container">
        <div class="carousel-caption">
          <div class="jumbotron">
            <div class="stars">
              <span class="glyphicon glyphicon-star wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
              <span class="glyphicon glyphicon-star wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
              <span class="glyphicon glyphicon-star wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
            </div>

            <h1>Antonio's Pasta</h1>
            <p>Authentically Italian pasta products.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="images/carousel_bucatini.jpg" alt="bucatini">
      <div class="container">
        <div class="carousel-caption">
          <div class="jumbotron">
            <div class="stars">
              <span class="glyphicon glyphicon-star wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
              <span class="glyphicon glyphicon-star wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
              <span class="glyphicon glyphicon-star wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
            </div>

            <h1>Antonio's Pasta</h1>
            <p>Authenticly Italian pasta products.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="item">
      <img src="images/carousel_smoked_salmon_penne.jpg" alt="pasta salad">
      <div class="container">
        <div class="carousel-caption">
          <div class="jumbotron">
            <div class="stars">
              <span class="glyphicon glyphicon-star wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
              <span class="glyphicon glyphicon-star wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
              <span class="glyphicon glyphicon-star wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
            </div>

            <h1>Antonio's Pasta</h1>
            <p>Authenticly Italian pasta products.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="left carousel-control" href="#home-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
  <a class="right carousel-control" href="#home-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>

<div id="page-descriptions" class="row col-md-offset-1 col-md-10">
  <div class="col-md-3">
    <h2>About Us</h2>
    <p>
      Learn about our mission statement, company history and creation process.
    </p>
    <a class="btn btn-danger" href="about.php" role="button">About &raquo;</a>
  </div>
  <div class="col-md-3">
    <h2>Our Recipes</h2>
    <p>
      Be inspired by delicious recipes that are absolutely perfect for our range of pasta.
    </p>
    <a class="btn btn-danger" href="recipes.php" role="button">Recipes &raquo;</a>
  </div>
  <div class="col-md-3">
    <h2>Food Gallery</h2>
    <p>
      View photos of our pasta products and dishes which can be created with them.
    </p>
    <a class="btn btn-danger" href="gallery.php" role="button">Gallery &raquo;</a>
  </div>
  <div class="col-md-3">
    <h2>Contact Us</h2>
    <p>
      Want to send us feedback or ask a question? Contact us directly via a message.
    </p>
    <a class="btn btn-danger" href="contact.php" role="button">Contact &raquo;</a>
  </div>
</div>
{/block}

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
  <div id="home-carousel-container" class="col-md-12">
    <div id="home-carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#home-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#home-carousel" data-slide-to="1"></li>
        <li data-target="#home-carousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/carousel_pasta_salad.jpg" alt="pasta salad">
        </div>
        <div class="item">
          <img src="images/carousel_bucatini.jpg" alt="bucatini">
        </div>
        <div class="item">
          <img src="images/carousel_smoked_salmon_penne.jpg" alt="pasta salad">
        </div>
      </div>
      <a class="left carousel-control" href="#home-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#home-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
  </div>
  
  <div class="jumbotron col-md-offset-3 col-md-6">
    <div class="stars">
      <span class="glyphicon glyphicon-star wow fadeInLeft animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
      <span class="glyphicon glyphicon-star wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
      <span class="glyphicon glyphicon-star wow fadeInRight animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;"></span>
    </div>
      
    <h1>Antonio's Pasta</h1>
    <p>Authentic Italian pasta products.</p>
    <p>
      <a class="btn btn-lg btn-default" href="about.php" role="button">About us</a>
      <a class="btn btn-lg btn-default" href="recipes.php" role="button">View recipes</a>
      <a class="btn btn-lg btn-default" href="gallery.php" role="button">View gallery</a>
      <a class="btn btn-lg btn-default" href="contact.php" role="button">Contact us</a>
    </p>
  </div>

  <div class="divider">
      <span class="icon icon-settings wow rotateIn animated" data-wow-delay=".9" style="visibility: visible;-webkit-animation-delay: .9; -moz-animation-delay: .9; animation-delay: .9;"></span>
    </div>
    <section id="services" class="section services">
      <div class="container">
        <h2 class="title wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;">Our <span>Services</span></h2>
        <h4 class="subtitle wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible;-webkit-animation-delay: .5s; -moz-animation-delay: .5s; animation-delay: .5s;">Lorem ipsum dolor sit amet, has persius detraxit ea. Eu duis complectitur mei, corpora interesset quaerendum no nec, ius vidit consul graeci in. Ex quem option eos. Ei dictas propriae usu, eius omnis eu ius, aperiam efficiendi ut vis.</h4>
        <div class="row">
          <div class="col-sm-4">
            <div class="service wow fadeInUpBig animated" data-wow-delay=".4s" style="visibility: visible;-webkit-animation-delay: .4s; -moz-animation-delay: .4s; animation-delay: .4s;">
              <span class="icon icon-cloud"></span>
              <h3>Cloud Store</h3>
              <p>Lorem ipsum dolor sit amet, has persius detraxit ea. Eu duis complectitur mei, corpora interesset quaerendum no nec, ius vidit consul graeci in. Ex quem option eos.</p>
            </div> <!-- /.service -->
          </div> <!-- /.col-sm-4 -->
          <div class="col-sm-4 wow fadeInUpBig animated" data-wow-delay=".6s" style="visibility: visible;-webkit-animation-delay: .6s; -moz-animation-delay: .6s; animation-delay: .6s;">
            <div class="service">
              <span class="icon icon-params"></span>
              <h3>Great Stats</h3>
              <p>Usu ei facer bonorum, elitr mollis at mei. Id vel omnis tollit doming. Dicant elaboraret nec te, aeque possim nec at. Usu ei facer bonorum, necsar at.</p>
            </div> <!-- /.service -->
          </div> <!-- /.col-sm-4 -->
          <div class="col-sm-4 wow fadeInUpBig animated" data-wow-delay=".8s" style="visibility: visible;-webkit-animation-delay: .8s; -moz-animation-delay: .8s; animation-delay: .8s;">
            <div class="service">
              <span class="icon icon-paperplane"></span>
              <h3>Fast Transfer</h3>
              <p>Accusamus mnesarchum posidonium in sed. Ex magna munere est. Tamquam signiferumque ea sit, id sea libris detraxit, ne indoctum honestatis mel primus.</p>
            </div> <!-- /.service -->
          </div> <!-- /.col-sm-4 -->
        </div> <!-- /.row -->
      </div> <!-- /.container -->
    </section>
{/block}
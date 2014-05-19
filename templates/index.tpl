{extends "layout.tpl"}

{block "title"}
  Index
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
          <img src="images/carousel_pasta_salad.JPG" alt="place holder">
        </div>
        <div class="item">
          <img src="images/carousel_pasta_salad.JPG" alt="place holder">
        </div>
        <div class="item">
          <img src="images/carousel_pasta_salad_2.JPG" alt="pasta salad">
        </div>
      </div>
      <a class="left carousel-control" href="#home-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#home-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
  </div>
  
  <div class="jumbotron col-md-offset-3 col-md-6">
    <h1>Antonio's Pasta</h1>
    <p>Authentic Italian style pasta.</p>
    <p>
      <a class="btn btn-lg btn-default" href="#" role="button">About us</a>
      <a class="btn btn-lg btn-default" href="#" role="button">View recipes</a>
      <a class="btn btn-lg btn-default" href="#" role="button">View gallery</a>
      <a class="btn btn-lg btn-default" href="#" role="button">Contact us</a>
    </p>
  </div>
{/block}
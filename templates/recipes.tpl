{extends "layout.tpl"}

{block "title"}
  Antonio's Pasta | Recipes
{/block}

{block "nav-links"}
  <li><a href="index.php">Home</a></li>
  <li><a href="about.php">About</a></li>
  <li class="active"><a href="recipes.php">Recipes</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li><a href="contact.php">Contact</a></li>
{/block}

{block "content"}
  <div id="sidebar" class="col-md-4">
    <div class="list-group col-md-offset-2 col-md-8">
      <p class="list-group-item">Dish Types</p>
      <a class="list-group-item list-group-item-danger" href="#type1">Main Course</a>
      <a class="list-group-item list-group-item-info" href="#type2">Quick &amp; Easy</a>
      <a class="list-group-item list-group-item-success" href="#type3">Vegetarian</a>
    </div>
  </div>
  
  <div class="panel-group col-md-7" id="recipe-list">
    <span id="type1" class="anchor"></span>
    <h2 class="page-header">Main Course Recipes</h2>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t1-d1">
            Fettuccine with Lemon Tuna and Capers
          </a>
        </h4>
      </div>
      <div id="t1-d1" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <h4 style="text-align: center">Fettuccine with Lemon Tuna and Capers</h4>
            <a href="images/carousel_pasta_salad.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img class="img-responsive" src="images/carousel_pasta_salad.jpg" alt="Fettuccine with Lemon Tuna and Capers" title="Fettuccine with Lemon Tuna and Capers" >
          </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t1-d2">
            Creamy Salmon and Broad Bean Fettuccine
          </a>
        </h4>
      </div>
      <div id="t1-d2" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <h4 style="text-align: center">Creamy Salmon and Broad Bean Fettuccine</h4>
            <a href="images/carousel_bucatini.jpg" class="thumbnail fancybox-thumbs " data-fancybox-group="thumb">
              <img class="img-responsive" src="images/carousel_bucatini.jpg" alt="Creamy Salmon and Broad Bean Fettuccine" title="Creamy Salmon and Broad Bean Fettuccine">
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t1-d3">
            Creamy Bacon Spaghetti with Poached Eggs
          </a>
        </h4>
      </div>
      <div id="t1-d3" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <h4 style="text-align: center">Creamy Bacon Spaghetti with Poached Eggs</h4>
            <a href="images/Pasta_Puttanesca_by_koishikawagirl.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/Pasta_Puttanesca_by_koishikawagirl.jpg" alt="Creamy Bacon Spaghetti with Poached Eggs" title="Creamy Bacon Spaghetti with Poached Eggs">
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t1-d4">
            Fettuccine Boscaiola
          </a>
        </h4>
      </div>
      <div id="t1-d4" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <h4 style="text-align: center">Amatriciana</h4>
            <a href="images/pasta_an3.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/pasta_an3.jpg" alt="Amatriciana" title="Amatriciana">
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>

    <br>

    <span id="type2" class="anchor"></span>
    <h2 class="page-header">Quick & Easy Recipes</h2>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t2-d1">
            Pea, Mint and Prosciutto Pasta
          </a>
        </h4>
      </div>
      <div id="t2-d1" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
              <h4 style="text-align: center">Pea, Mint and Prosciutto Pasta</h4>
              <a href="images/Pasta_Puttanesca_by_koishikawagirl.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
                <img class="img-responsive" src="images/Pasta_Puttanesca_by_koishikawagirl.jpg" alt="Pea, Mint and Prosciutto Pasta" title="Pea, Mint and Prosciutto Pasta" >
              </a>
            </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t2-d2">
            Chilli Prawn and Tomato Spaghetti
          </a>
        </h4>
      </div>
      <div id="t2-d2" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <h4 style="text-align: center">Chilli Prawn and Tomato Spaghetti</h4>
            <a href="images/Pasta_e_fagioli_rapida.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/Pasta_e_fagioli_rapida.jpg" alt="Chilli Prawn and Tomato Spaghetti" title="Chilli Prawn and Tomato Spaghetti">
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    
    <br>
    
    <span id="type3" class="anchor"></span>
    <h2 class="page-header">Vegetarian Recipes</h2>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d1">
            Bruschetta Pasta
          </a>
        </h4>
      </div>
      <div id="t3-d1" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <h4 style="text-align: center">Bruschetta Pasta</h4>
            <a href="images/pasta_an1.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/pasta_an1.jpg" alt="Bruschetta Pasta" title="Bruschetta Pasta">
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d2">
            Pasta Salad
          </a>
        </h4>
      </div>
      <div id="t3-d2" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <h4 style="text-align: center">Pasta Salad</h4>
            <a href="images/carousel_smoked_salmon_penne.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/carousel_smoked_salmon_penne.jpg" alt="Pasta Salad" title="Pasta Salad">
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d3">
            Fettuccine with Mixed Mushroom Sauce
          </a>
        </h4>
      </div>
      <div id="t3-d3" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <h4 style="text-align: center">Fettuccine with Mixed Mushroom Sauce</h4>
            <a href="images/pasta_an2.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/pasta_an2.jpg" alt="Fettuccine with Mixed Mushroom Sauce" title="Fettuccine with Mixed Mushroom Sauce">
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d4">
            Zucchini and Tomato Lasagne
          </a>
        </h4>
      </div>
      <div id="t3-d4" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <h4 style="text-align: center">Zucchini and Tomato Lasagne</h4>
            <a href="images/Macaroni_Pasta.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/Macaroni_Pasta.jpg" alt="Zucchini and Tomato Lasagne" title="Zucchini and Tomato Lasagne">
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="panel panel-success">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d5">
            Greek-Style Gnocchi 
          </a>
        </h4>
      </div>
      <div id="t3-d5" class="panel-collapse collapse">
        <div class="panel-body">
          <h4>Ingredients</h4>
          <div class="col-lg-3 col-md-4 col-xs-6 thumb recimg">
            <h4 style="text-align: center">Greek-Style Gnocchi</h4>
            <a href="images/pasta_an5.jpg" class="thumbnail fancybox-thumbs" data-fancybox-group="thumb">
              <img src="images/pasta_an5.jpg" alt="Greek-Style Gnocchi" title="Greek-Style Gnocchi" >
            </a>
          </div>
          <ul>
            <li>400g Antonio's bavette pasta</li>
            <li>4 ripe tomatoes, roughly chopped</li>
            <li>1 red onion, chopped</li>
            <li>1 garlic clove, chopped</li>
            <li>2 tablespoons extra virgin olive oil</li>
            <li>1 tablespoon red wine vinegar</li>
            <li>1/2 cup roughly torn fresh basil</li>
            <li>2 tablespoons fresh oregano leaves</li>
          </ul>
          <h4>Method</h4>
          <ol>
            <li>
              Maecenas eu placerat ante. Fusce ut neque justo, et aliquet enim. In hac
              habitasse platea dictumst. Nullam commodo neque erat, vitae facilisis erat.
            </li>
            <li>
              Morbi et sem orci. Praesent accumsan odio in ante ullamcorper id pellentesque
              mauris rhoncus.
            </li>
            <li>
              Vestibulum eget felis nec purus commodo convallis. Aliquam erat volutpat.
            </li>
          </ol>
        </div>
      </div>
    </div>
  </div>
{/block}
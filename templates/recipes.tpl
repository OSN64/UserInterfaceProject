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
          
          <br>
          
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
          
          <br>
          
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
          
          <br>
          
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
          
          <br>
          
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
    
    <br><br>
    
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
          
          <br>
          
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
          
          <br>
          
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
    
    <br><br>
    
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
          
          <br>
          
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
          
          <br>
          
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
          
          <br>
          
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
          
          <br>
          
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
          
          <br>
          
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
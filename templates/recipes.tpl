{extends "layout.tpl"}

{block "title"}
  Recipes
{/block}

{block "content"}
  <div id="navbar-container" class="col-md-4">
    <div class="btn-group-vertical col-md-offset-4 col-md-8">
      <p class="panel">Navigation</p>
      <a class="btn btn-default" href="#type1">Type 1</a>
      <a class="btn btn-default" href="#type2">Type 2</a>
      <a class="btn btn-default" href="#type3">Type 3</a>
    </div>
  </div>
  
  <div class="panel-group col-md-6" id="recipe-list">
    <h3 id="type1">Type 1 Recipes</h3>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t1-d1">
            Type 1 Dish 1
          </a>
        </h4>
      </div>
      <div id="t1-d1" class="panel-collapse collapse">
        <div class="panel-body">
          Recipe for type 1 dish 1.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t1-d2">
            Type 1 Dish 2
          </a>
        </h4>
      </div>
      <div id="t1-d2" class="panel-collapse collapse">
        <div class="panel-body">
          Recipe for type 1 dish 2.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t1-d3">
            Type 1 Dish 3
          </a>
        </h4>
      </div>
      <div id="t1-d3" class="panel-collapse collapse">
        <div class="panel-body">
          Recipe for type 1 dish 3.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t1-d4">
            Type 1 Dish 4
          </a>
        </h4>
      </div>
      <div id="t1-d4" class="panel-collapse collapse">
        <div class="panel-body">
          Recipe for type 1 dish 4.
        </div>
      </div>
    </div>
    
    <br><br>
    
    <h3>Type 2 Recipes</h3>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t2-d1">
            Type 2 Dish 1
          </a>
        </h4>
      </div>
      <div id="t2-d1" class="panel-collapse collapse">
        <div class="panel-body">
          Recipe for type 2 dish 1.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t2-d2">
            Type 2 Dish 2
          </a>
        </h4>
      </div>
      <div id="t2-d2" class="panel-collapse collapse">
        <div class="panel-body">
          Recipe for type 2 dish 2.
        </div>
      </div>
    </div>
    
    <br><br>
    
    <h3>Type 3 Recipes</h3>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d1">
            Type 3 Dish 1
          </a>
        </h4>
      </div>
      <div id="t3-d1" class="panel-collapse collapse">
        <div class="panel-body">
          Recipe for type 3 dish 1.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d2">
            Type 3 Dish 2
          </a>
        </h4>
      </div>
      <div id="t3-d2" class="panel-collapse collapse">
        <div class="panel-body">
          Recipe for type 3 dish 2.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d3">
            Type 3 Dish 3
          </a>
        </h4>
      </div>
      <div id="t3-d3" class="panel-collapse collapse">
        <div class="panel-body">
          Recipe for type 3 dish 3.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d4">
            Type 3 Dish 4
          </a>
        </h4>
      </div>
      <div id="t3-d4" class="panel-collapse collapse">
        <div class="panel-body">
          Recipe for type 3 dish 4.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#recipe-list" href="#t3-d5">
            Type 3 Dish 5
          </a>
        </h4>
      </div>
      <div id="t3-d5" class="panel-collapse collapse">
        <div class="panel-body">
          Recipe for type 3 dish 5.
        </div>
      </div>
    </div>
  </div>
{/block}
<div class="row">
      <div class="col-md-3 col-sm-3 ">

        <h4>Категория</h4>

        <div class="row">
          <?php
          renderCategories($categories);
          ?>
        </div>
        <hr>

        <h4>Цена</h4>

        <div class="row">
          <div class="input-group mb-1">
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-default">от</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> &nbsp;
            <div class="input-group-prepend">
              <span class="input-group-text" id="inputGroup-sizing-sm">до</span>
            </div>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">&nbsp;

            <button type="button" class="btn btn-success">Найти</button>
          </div>
        </div>
        <hr>
        <h4>Издательство</h4>

        <div class="row">
          <ul class="list-group col-md-12 col-sm-12">
            <?php
            renderPublisher($publisher);
            ?>
            <li class="list-group-item">
              <button type="button" class="btn btn-success">Найти</button>
            </li>
          </ul>

        </div>
        <hr>


      </div>

      <div class="col-md-9 col-sm-9 ">
        <h1><?php renderHeader($page);?></h1>

        <div class="card-deck">
          <?php include 'inc/books.inc.php'; ?>
        </div>


        <div class="card-deck">
          <?php include 'inc/books.inc.php'; ?>
        </div>

      </div>


    </div>
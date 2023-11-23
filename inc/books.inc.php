<?php 

  for($i = 0; $i < count($books); $i++) {
    
  echo '<div class="card">
            <div class="card-body">
              <img src="http://placehold.it/150x220" alt="...">
              <h3 class="card-title">'.($books[$i]['price']).' руб</h3>
              <p class="card-text"><small class="text-muted">Автор: '.($books[$i]['author']).'</small></p>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
            <a href="?add=' . $books[$i]['idBook'] . '" class="btn btn-primary">В корзину</a>
            </div>
          </div>';


  }
?>
<?php 

$book = [];
  $book["idBook"] = 1;
  $book["title"] = "title";
  $book["author"] = "author";
  $book["description"] = "description";
  $book["price"] = 1000;

  $books = [
    '0' => [
        'idBook' => '0',
        'title'=> 'titlle1',
        'author'=>'author1',
        'desctiption'=>'description1',
        'price' => '1000',
    ],
    '1' => [
        'idBook' => '1',
        'title'=> 'titlle2',
        'author'=>'author2',
        'desctiption'=>'description2',
        'price' => '1000',
    ],
    '2' => [
        'idBook' => '2',
        'title'=> 'titlle3',
        'author'=>'author3',
        'desctiption'=>'description3',
        'price' => '1000',
    ],

];

  for($i = 0; $i < count($books); $i++) {
    
  echo '<div class="card">
            <div class="card-body">
              <img src="http://placehold.it/150x220" alt="...">
              <h3 class="card-title">'.($books[$i]['price']).' руб</h3>
              <p class="card-text"><small class="text-muted">Автор: '.($books[$i]['author']).'</small></p>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
            </div>
            <div class="card-footer">
              <button type="button" class="btn btn-primary">В корзину</button>
            </div>
          </div>';


  }
?>
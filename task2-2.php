<?php 

$categories = ["Detective", "Science", "Cooking"];
  $publisher = ["Rosmen", "AST", "Prosveshchenie"];

  $successOrder = "Строка, содержащая $firstName";

  $book = [];
  $book["idBook"] = 1;
  $book["title"] = "title";
  $book["author"] = "автор";
  $book["description"] = "description";
  $book["price"] = 1000;

  if (count($categories) == 0) {
    echo "элементов нет";
  } else {
    echo count($categories);
  }

  if (count($publisher) == 0) {
    echo "элементов нет".'<hr>';
  } else {
    echo count($publisher).'<hr>';
  }

  for ($i = 0; $i < count($categories); $i++)  {
    echo $categories[$i].'<hr>';
  }
  echo '<br>';
  echo '<br>';
  echo '<br>';


  for ($i = 0; $i < count($publisher); $i++)  {
    echo $publisher[$i].'<hr>';
  }

?>
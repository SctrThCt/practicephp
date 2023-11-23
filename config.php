<?php 

 const AUTHOR = "author";
 define('YEAR', date("Y"));
 const DBHOST = "localhost:3306";
 const DBUSER = "mysql";
 const DBPASS = "password";
 const DBNAME = "eshop";
 const ORDERS = "orders.txt";


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
        'description'=>'description1',
        'price' => '1000',
    ],
    '1' => [
        'idBook' => '1',
        'title'=> 'titlle2',
        'author'=>'author2',
        'description'=>'description2',
        'price' => '1000',
    ],
    '2' => [
        'idBook' => '2',
        'title'=> 'titlle3',
        'author'=>'author3',
        'description'=>'description3',
        'price' => '1000',
    ],

];
?>
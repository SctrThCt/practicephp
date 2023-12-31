<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <!-- Custom styles for this template -->
  <!-- <link href="starter-template.css" rel="stylesheet"> -->

  <title>PHP часть 1. Основы PHP</title>

  <style>
    .card-deck {
      margin-top: 20px
    }

    .card-body img {
      display: block;
      margin: 0 auto 15px;

    }

    .card-footer {
      background: transparent;
      border: 0;
    }
  </style>
</head>

<body>
  <?php
  include_once 'config.php';
  include_once 'inc/lib.inc.php';
  
  session_start();

  $firstName = "FirstName";
  $lastName = "LastName";
  $email = "mail@mail.mail";
  $address = "adress";

  $categories = ["Detective", "Science", "Cooking", "Psychology", "For children", "Economic"];
  $publisher = ["Rosmen", "AST", "Prosveshchenie"];

  $successOrder = "Строка, содержащая $firstName";

  $book = [];
  $book["idBook"] = 1;
  $book["title"] = "title";
  $book["author"] = "автор";
  $book["description"] = "description";
  $book["price"] = 1000;

  $menu = [
    'delivery' => 'Доставка',
    'contacts' => 'Контакты',
     'login' => 'Войти',
      'basket' => 'Корзина'
  ];

  $page = "main.php";
  $pageParam = isset($_GET['page']) ? $_GET['page'] : '';
  switch ($pageParam) {
    case "delivery":$page = "delivery.php";break;
    case "contacts":$page = "contacts.php";break;
    case "login":$page = "login.php";break;
    case "basket":$page = "basket.php";break;
    default:$page = "main.php";
  }

  if (isset($_GET['add'])) {
    $_SESSION['basket']++;
    if (isset($_SESSION['books'])){
      array_push($_SESSION['books'], $_GET['add']);
    } else {
      $_SESSION['books'] = [$_GET['add']];
    }
    
  }

  ?>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/index.php?page=main">Интернет-магазин Книжка</a>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="книгу.." aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти!</button>
      </form>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <?php
          renderMenu($menu);
          ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <div class="container">

    <?php
    include "$page";
    ?>


  </div>


  </div>

  <div class="container">


  </div><!-- /.container -->

  <?php include 'inc/footer.inc.php'; ?>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
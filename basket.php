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

    .form-signin {
      width: 100%;
      max-width: 420px;
      padding: 15px;
      margin: auto;
    }
  </style>
</head>

<body>

  <?php

  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = cleanUp($_POST['firstName']);
    $lastName = cleanUp($_POST['lastName']);
    $email = cleanUp($_POST['email']);
    $address = cleanUp($_POST['address']);

    if (saveOrder($firstName, $lastName, $email, $address)) {
      echo 'Order successfully saved!';
    } else {
      echo 'Failed to save order. Please try again.';
    }
    session_regenerate_id();
    $_SESSION['basket'] = 0;
    unset($_SESSION['books']);
  }
  ?>

  <div class="container">
    <div class="py-5 text-center">
      <h2><?php renderHeader($page); ?></h2>
      <p class="lead">Внимательно заполните поля формы, проверьте корректность введённых данных и позиции товаров и их количество.</p>
    </div>

    <div class="row">
      <div class="col-md-6 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Корзина</span>
          <span class="badge badge-secondary badge-pill"><?php echo $_SESSION['basket'] ?></span>
        </h4>
        <ul class="list-group mb-3">
          <?php
          if (isset($_SESSION['books'])) {
            renderBooksBasket($_SESSION['books']);
          } else {
            echo '<li>Пусто</li>';
          }
          ?>

          <li class="list-group-item d-flex justify-content-between">
            <span>Всего: </span>
            <strong>2700руб.</strong>
          </li>
        </ul>

      </div>
      <div class="col-md-6 order-md-1">
        <h4 class="mb-3">Информация</h4>
        <form method="post" class="needs-validation">
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="firstName">Имя</label>
              <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Иван" required>
              <div class="invalid-feedback">
                Укажите корректное имя
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="lastName">Фамилия</label>
              <input type="text" class="form-control" name="lastName" id="lastName" placeholder="Иванов" required>
              <div class="invalid-feedback">
                Укажите корректную фамилию
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="email">Email <span class="text-muted">(опционально)</span></label>
            <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Укажите корректный email
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Адрес доставки</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="город, улица, дом, квартира" required>
            <div class="invalid-feedback">
              Укажите адрес доставки
            </div>
          </div>
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Оформить заказ!</button>
        </form>
      </div>
    </div>


    <footer class="footer">
      <div class="container">
        <span class="text-muted">2020 &copy; Интернет-магазин Книжка</span>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
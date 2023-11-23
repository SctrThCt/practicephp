<?php

use PSpell\Config;

include_once 'config.php';

$orderCounter = 0;
function renderCategories(array $categories)
{
    for ($i = 0; $i < count($categories); $i++) {
        echo '<a class="dropdown-item" href="#">' . $categories[$i] . '</a>';
    }
}

function renderPublisher(array $publisher)
{
    for ($i = 0; $i < count($publisher); $i++) {
        echo '<li class="list-group-item">
        <input type="checkbox" id="exampleCheck' . $i . '">
        <label class="form-check-label" for="exampleCheck' . $i . '">' . $publisher[$i] . '</label>
      </li>';
    }
}

function renderMenu(array $menu)
{

    foreach ($menu as $key => $value) {

        echo '
        <li class="nav-item active">
        <a class="nav-link" href="index.php?page=' . $key . '">' . $value . '</a>
      </li>';
    }
}

function saveOrder(string $firstName, string $lastName, string $email, string $address)
{
    global $orderCounter;
    $date = date('Y-m-d H:i:s');

    $order = "$orderCounter|$date|$firstName|$lastName|$email|$address";

    if (file_put_contents(ORDERS, $order)) {
        $orderCounter++;
        return true;
    } else {
        return false;
    }
}

function cleanUp(string $input)
{
    return trim(strip_tags($input));
}

function readOrderFromFile()
{
    $string = file_get_contents(ORDERS);
    $order = explode("|", $string);

    for ($i = 0; $i < count($order); $i++) {
        echo $order[$i] . "\n";
    }
}

function getParam(?string $param): ?string
{
    return $param;
}

function postParam(?array $param): ?array
{
    return $param;
}

function renderHeader(string $page)
{
    $pageTitle = "";

    switch ($page) {
        case 'index':
            $pageTitle = 'Главная';
            break;
        case 'basket':
            $pageTitle = 'Оформление заказа';
            break;
        case 'contacts':
            $pageTitle = 'Контакты';
            break;
        case 'delivery':
            $pageTitle = 'Доставка';
            break;
        case 'login':
            $pageTitle = 'Вход';
            break;
        default:
            $pageTitle = 'Заголовок';
    }

    return $pageTitle;
}

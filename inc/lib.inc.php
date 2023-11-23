<?php

use PSpell\Config;

include_once 'config.php';

$orderCounter = 0;
function renderCategories(array $categories) {
    for ($i = 0; $i < count($categories); $i++) {
        echo '<a class="dropdown-item" href="#">'.$categories[$i].'</a>';
      }
}

function renderPublisher(array $publisher) {  
    for ($i = 0; $i < count($publisher); $i++) { 
        echo '<li class="list-group-item">
        <input type="checkbox" id="exampleCheck'.$i.'">
        <label class="form-check-label" for="exampleCheck'.$i.'">'.$publisher[$i].'</label>
      </li>';
      } 
}

function renderMenu(array $menu) {  

    foreach($menu as $key => $value) {  

        echo '
        <li class="nav-item active">
        <a class="nav-link" href="'.$key.'.php">'.$value.'</a>
      </li>';
    }
}

function saveOrder(string $firstName, string $lastName, string $email, string $address) {
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

function cleanUp(string $string) {
    return trim(strip_tags($string));
}

function readOrderFromFile(){
    $string = file_get_contents(ORDERS);
    $order = explode("|",$string);
    
    for ($i = 0; $i < count($order); $i++) {
        echo $order[$i]."\n";
    }
}

function getParam(?string $param): ?string {
    return $param;
}

function postParam(?array $param): ?array { 
    return $param;
}
?>
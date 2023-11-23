<?php

$pageTitle = '';

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

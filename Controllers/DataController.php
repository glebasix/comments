<?php

require_once './../Database/DB_connection.php';
require_once './../Model/Comments.php';

if (isset($_GET['page'])) {
    // Если да то переменной $page присваиваем его
    $page = $_GET['page'];
} else { // Иначе
    // Присваиваем $page один
    $page = 1;
}

// Назначаем количество данных на одной странице
$size_page = 5;
// Вычисляем с какого объекта начать выводить
$offset = ($page - 1) * $size_page;

$data = new Comments();
$data->getAllData($offset, $size_page);
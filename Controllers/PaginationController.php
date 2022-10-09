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

$com = new Comments();
$totalRows = $com->getTotalRows();

$totalPages = ceil($totalRows / $size_page);
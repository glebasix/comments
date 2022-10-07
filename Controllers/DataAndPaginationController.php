<?php

require_once 'Database/DB_connection.php';
require_once 'Database/db.php';

if (isset($_GET['pageno'])) {
    // Если да то переменной $pageno присваиваем его
    $pageno = $_GET['pageno'];
} else { // Иначе
    // Присваиваем $pageno один
    $pageno = 1;
}

// Назначаем количество данных на одной странице
$size_page = 5;
// Вычисляем с какого объекта начать выводить
$offset = ($pageno - 1) * $size_page;

// SQL запрос для получения количества элементов
$count_sql = "SELECT COUNT(*) FROM comments";
// Отправляем запрос для получения количества элементов
$result = $conn->query($count_sql);
// Получаем результат
$total_rows = $result->fetchAll(PDO::FETCH_NUM);
// Вычисляем количество страниц
$total_pages = ceil($total_rows[0][0] / $size_page);

$sql = "SELECT author, description FROM comments ORDER BY id DESC LIMIT $offset, $size_page";
$data = $conn->query($sql)->fetchAll(PDO::FETCH_NUM);

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Comments</title>
    <?php require_once 'Controllers/DataAndPaginationController.php';?>
    <?php require_once 'Database/DB_connection.php';?>
</head>
<body>

    <?php foreach ($data as $row): ?>
    <p>author: <?= $row[0] ?></p>
    <p>author: <?= $row[1] ?></p>
    <?php endforeach; ?>

<div>
    <?php for ($pageno = 1; $pageno <= $total_pages; $pageno++): ?>
    <a href="/?pageno=<?= $pageno ?>"><?= $pageno ?></a>
    <?php endfor; ?>
</div>

<?php require_once 'Com.php'; ?>

</body>
</html>
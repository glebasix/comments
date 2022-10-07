<?php

require_once 'Controllers/DataAndPaginationController.php';
require_once 'Database/DB_connection.php';
require_once 'Database/db.php';

//header("Location: /View/Comments.php");

foreach ($data as $row) {
    print "author: " . $row[0] . "<br>";
    print "comment: " . $row[1] . "<br>";
    print "<br>";
}
?>

<?php for ($pageno = 1; $pageno <= $total_pages; $pageno++): ?>
    <a href="/?pageno=<?= $pageno ?>"><?= $pageno ?></a>
<?php endfor; ?>

<form action="Controllers/FormController.php" method="post">
    <br>Type your name<br>
    <input name="author" type="text" placeholder="name">
    <br>Leave your comment<br>
    <textarea name="description" rows="5" cols="25" placeholder="comment"></textarea><br>
    <input type="submit" value="send">
</form>
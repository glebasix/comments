<?php

require_once './../Database/DB_connection.php';
require_once './../Model/Comments.php';

if (isset($_POST["author"]) && isset($_POST["description"])) {

    $author = $_POST["author"];
    $description = $_POST["description"];

    try {
        $addValues = new Comments();
        $addValues->saveData($author, $description);

        header("Location: http://comments.loc/");

    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}

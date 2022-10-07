<?php

class Comments
{
    public function saveData($author, $description)
    {
        $connection = DB_connection::connection();
        $sql = "INSERT INTO comments (author, description) VALUES ('$author', '$description')";
        $connection->exec($sql);
    }

    public function getAllData($offset, $size_page)
    {
        $connection = DB_connection::connection();
        $sql = "SELECT COUNT(*) FROM comments";
        $connection->exec;
        return $data;
    }
}

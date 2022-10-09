<?php

class Comments
{
    /**
     * @param $author
     * @param $description
     * @return void
     */
    public function saveData($author, $description): void
    {
        $connection = DB_connection::connection();
        $sql = "INSERT INTO comments (author, description) VALUES ('$author', '$description')";
        $connection->exec($sql);
    }

    /**
     * @param $offset
     * @param $size_page
     * @return array
     */
    public function getAllData($offset, $size_page): array
    {
        $connection = DB_connection::connection();
        $sql = "SELECT author, description FROM comments ORDER BY id DESC LIMIT $offset, $size_page";
        $comments = $connection->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        return $comments;
    }

    /**
     * @return int
     */
    public function getTotalRows(): int
    {
        $connection = DB_connection::connection();
        $sql = "SELECT COUNT(*) FROM comments";
        $totalRows = $connection->query($sql)->fetchAll(PDO::FETCH_NUM);
        $totalRows = $totalRows[0][0];
        return $totalRows;
    }
}

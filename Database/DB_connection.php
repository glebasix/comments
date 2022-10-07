<?php

class DB_connection {

    private static string $host = 'localhost';
    private static string $dbname = 'schema_name';
    private static string $username = 'root';
    private static string $password = '1234_Gleb';

    public static function connection() {
        return $conn = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname ,
            self::$username ,
            self::$password
        );
    }
}
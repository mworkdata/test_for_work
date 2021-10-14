<?php

namespace App;

class DataBase
{

    /**
     * @var PDO
     */
    private $connection;

    public static function getInstance(): DataBase
    {
        return new static();
    }

    public function __construct()
    {
        $this->connection = new \mysqli(
            "localhost",
            "usertest",
            "wq+D]@s@W!!}2%b",
            "dbtest"
        );
    }

    public function queryExecute(string $query)
    {
        return $this->connection->query($query);
    }

    public function real_escape_string(string $string): string
    {
        return $this->connection->real_escape_string($string);
    }
}
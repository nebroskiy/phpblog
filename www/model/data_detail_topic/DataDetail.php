<?php

class DataDetail
{
    public string $id;

    public function getDetails (PDO $connection, string $id) :PDOStatement
    {
        $this->id = $id;

        $query = "SELECT * FROM test_table WHERE {$this->id}";
        return $resQuery = $connection->query($query);
    }
}
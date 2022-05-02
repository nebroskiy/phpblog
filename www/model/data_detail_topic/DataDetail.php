<?php

class DataDetail
{
    public string $id;

    public function getDetails (object $connection, string $id) :object
    {
        $this->id = $id;

        $query = "SELECT * FROM test_table WHERE {$this->id};";
        return $resQuery = $connection->query($query);
    }
}
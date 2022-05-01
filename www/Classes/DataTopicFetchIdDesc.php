<?php

class DataTopicFetchIdDesc
{
    public function dataTopicFetchIdDesc(object $connection): object
    {
        $query = "SELECT * FROM test_table ORDER BY id DESC;";
        return $resQuery = $connection->query($query);
    }
}
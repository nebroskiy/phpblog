<?php

namespace DataTopicDisplay;

use PDO;
use PDOStatement;

class DataTopicFetchIdDesc
{
    public function dataTopicFetchIdDesc(PDO $connection): PDOStatement
    {
        $query = "SELECT * FROM test_table ORDER BY id DESC;";
        return $connection->query($query);
    }
}
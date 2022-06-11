<?php

namespace DataTopicDisplay;

use DataConnection\DataConnectionPdo;
use PDOStatement;

class DataTopicFetchIdDesc
{
    private DataConnectionPdo $connection;

    public function __construct(DataConnectionPdo $connection)
    {
        $this->connection = $connection;
    }

    public function dataTopicFetchIdDesc(): PDOStatement
    {
        $query = "SELECT * FROM test_table ORDER BY id DESC;";
        return $this->connection->query($query);
    }
}
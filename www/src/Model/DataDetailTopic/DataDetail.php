<?php

namespace DataDetailTopic;

use DataConnection\DataConnectionPdo;
use PDO;
use PDOStatement;

class DataDetail
{
    private string $id;
    private DataConnectionPdo $connection;

    public function __construct(DataConnectionPdo $connection, GetTopicId $getTopicId)
    {
        $this->connection = $connection;
        $this->id = $getTopicId->getId();
    }

    public function returnDetailsQuery () :PDOStatement
    {
        $query = "SELECT * FROM test_table WHERE {$this->id}";
        return $resQuery = $this->connection->query($query);
    }
}
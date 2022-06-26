<?php

namespace DataDetailTopic;

use DataConnection\DataConnectionPdo;
use PDO;
use PDOStatement;

class DataDetail
{
    private string $id;
    private DataConnectionPdo $connection;
    private GetTopicId $getTopicId;

    public function __construct(DataConnectionPdo $connection, GetTopicId $getTopicId)
    {
        $this->connection = $connection;
        $this->getTopicId = $getTopicId;
    }

    public function setTopicId(): void
    {
        $this->getTopicId->setId();
        $this->id = $this->getTopicId->getId();
    }

    public function returnDetailsQuery () :PDOStatement
    {
        $this->setTopicId();
        $query = "SELECT * FROM test_table WHERE {$this->id}";
        return $resQuery = $this->connection->query($query);
    }
}
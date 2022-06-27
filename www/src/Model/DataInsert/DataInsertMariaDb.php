<?php

namespace DataInsert;

use DataConnection\DataConnection;
use DataConnection\DataConnectionPdo;
use PDO;

class DataInsertMariaDb implements DataInsertInDbInterface
{
    public function dataSave (DataConnectionPdo $connection, array $dataPostArray): void
    {
        $query = "INSERT test_table(title, description, topic) VALUES (:title, :description, :topic)";
        $insert = $connection->prepare($query);
        $insert->bindParam(":title", $dataPostArray['title']);
        $insert->bindParam(":description", $dataPostArray['description']);
        $insert->bindParam(":topic", $dataPostArray['topic']);
        $insert->execute();
    }
}
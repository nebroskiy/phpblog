<?php

require "DataInsertInDbInterface.php";

class DataInsertMariaDb implements DataInsertInDbInterface
{
    public function dataSave (PDO $connection, string $title, string $description, string $topic): void
    {
        $query = "INSERT test_table(title, description, topic) VALUES (:title, :description, :topic)";
        $insert = $connection->prepare($query);
        $insert->bindParam(":title", $title);
        $insert->bindParam(":description", $description);
        $insert->bindParam(":topic", $topic);
        $insert->execute();
    }
}
<?php

class DataInsert
{
    private string $title;
    private string $description;
    private string $topic;
    private PDO $connection;

    public function __construct(string $title, string $description, string $topic)
    {
        $this->title = $title;
        $this->description = $description;
        $this->topic = $topic;
        $this->dataInsert();
    }

    private function PdoConnect(): void
    {
        require "/var/www/model/data_connection/DataConnection.php";
        $connectionBy = new DataConnection();
        $c_pdo = new DataConnectionPdo();
        $this->connection = $connectionBy->getConnection($c_pdo);
    }

    public function dataInsert(): void
    {
        require "DataTopicCheck.php";
            $dataTopicCheck = new DataTopicCheck();
            $dataTopicCheck->checkForLen($this->title, $this->description, $this->topic);
        if ($dataTopicCheck)
        {
            $this->PdoConnect();
            require "DataInsertInDb.php";
            $insertDataTo = new DataInsertInDb;
            $db = new DataInsertMariaDb;
            $insertDataTo->savingData($db, $this->connection, $this->title, $this->description, $this->topic);
        }
    }
}
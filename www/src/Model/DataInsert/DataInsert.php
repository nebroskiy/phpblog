<?php

namespace DataInsert;

use DataConnection\DataConnection;
use DataConnection\DataConnectionPdo;

class DataInsert
{
    private string $title;
    private string $description;
    private string $topic;
    private DataConnection $connection;

    public function __construct(string $title, string $description, string $topic)
    {
        $this->title = $title;
        $this->description = $description;
        $this->topic = $topic;
        $this->dataInsert();
    }

    private function PdoConnect(): void
    {
        $connectionBy = new DataConnection();
        $c_pdo = new DataConnectionPdo();
        $this->connection = $connectionBy->getConnection($c_pdo);
    }

    public function dataInsert(): void
    {
            $dataTopicCheck = new DataTopicCheck();
            $dataTopicCheck->checkForLen($this->title, $this->description, $this->topic);
        if ($dataTopicCheck)
        {
            $this->PdoConnect();
            $insertDataTo = new DataInsertInDb;
            $db = new DataInsertMariaDb;
            $insertDataTo->savingData($db, $this->connection, $this->title, $this->description, $this->topic);
        }
    }
}
<?php

namespace DataInsert;

use DataConnection\DataConnection;
use DataConnection\DataConnectionPdo;
use PDO;

class DataInsert
{
//    private string $title;
//    private string $description;
//    private string $topic;
    private DataConnectionPdo $connection;
    private DataPostMethod $dataPostMethod;
    private DataTopicCheck $dataTopicCheck;
    private DataInsertInDb $dataInsertInDb;
    private DataInsertMariaDb $dataInsertMariaDb;
    private array $dataPostArray;

    public function __construct(DataConnectionPdo $connection, DataPostMethod $dataPostMethod,
                                DataTopicCheck $dataTopicCheck, DataInsertInDb $dataInsertInDb,
                                DataInsertMariaDb $dataInsertMariaDb)
    {
        $this->connection = $connection;
        $this->dataPostMethod = $dataPostMethod;
        $this->dataTopicCheck = $dataTopicCheck;
        $this->dataInsertInDb = $dataInsertInDb;
        $this->dataInsertMariaDb = $dataInsertMariaDb;
//        $this->title = $title;
//        $this->description = $description;
//        $this->topic = $topic;
    }

    public function setDataPostArray(): void
    {
        $this->dataPostMethod->setDataPostArray();
        $this->dataPostArray = $this->dataPostMethod->getDataPostArray();
    }
//    private function PdoConnect(): void
//    {
//        $connectionBy = new DataConnection();
//        $c_pdo = new DataConnectionPdo();
//        $this->connection = $connectionBy->getConnection($c_pdo);
//    }

    public function dataInsert(): void
    {
//            $dataTopicCheck = new DataTopicCheck();
            $this->dataTopicCheck->checkForLen($this->dataPostArray);
        if ($this->dataTopicCheck)
        {
//            $this->PdoConnect();
//            $insertDataTo = new DataInsertInDb;
//            $db = new DataInsertMariaDb;
            $this->dataInsertInDb->savingData($this->dataInsertMariaDb, $this->connection, $this->dataPostArray);
        }
    }
}
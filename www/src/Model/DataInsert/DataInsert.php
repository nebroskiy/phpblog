<?php

namespace DataInsert;

use DataConnection\DataConnection;
use DataConnection\DataConnectionPdo;
use PDO;

class DataInsert
{
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
    }

    public function setDataPostArray(): void
    {
        $this->dataPostMethod->setDataPostArray();
        $this->dataPostArray = $this->dataPostMethod->getDataPostArray();
    }

    public function dataInsert(): void
    {
            $this->dataTopicCheck->checkForLen($this->dataPostArray);
        if ($this->dataTopicCheck)
        {
            $this->dataInsertInDb->savingData($this->dataInsertMariaDb, $this->connection, $this->dataPostArray);
        }
    }
}
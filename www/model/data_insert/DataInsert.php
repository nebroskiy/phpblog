<?php

class DataInsert
{
    function dataInsert (string $title, string $description, string $topic): void
    {
        require "DataTopicCheck.php";
            $dataTopicCheck = new DataTopicCheck();
            $dataTopicCheck->checkForLen($title, $description, $topic);
        if ($dataTopicCheck)
        {
            require "/var/www/model/data_connection/DataConnection.php";
                $dataConnect = new DataConnection();
                $c_pdo = new DataConnectionPdo();
                $connection = $dataConnect->getConnection($c_pdo);
            require "DataInsertInDb.php";
                $insertDataTo = new DataInsertInDb;
                $db = new DataInsertMariaDb;
                $insertDataTo->savingData($db, $connection, $title, $description, $topic);
        }
    }
}
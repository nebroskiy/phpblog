<?php

class DataInsert
{
    function dataInsert (string $title, string $description, string $topic): void
    {
        require "/var/www/Classes/DataTopicCheck.php";
            $dataTopicCheck = new DataTopicCheck();
            $dataTopicCheck->checkForLen($title, $description, $topic);
        if ($dataTopicCheck)
        {
            require "/var/www/Classes/DataConnection.php";
                $dataConnect = new DataConnection();
                $c_pdo = new DataConnectionPdo();
                $connection = $dataConnect->getConnection($c_pdo);
            require "/var/www/Classes/DataInsertInDb.php";
                $insertDataTo = new DataInsertInDb;
                $db = new DataInsertMariaDb;
                $insertDataTo->savingData($db, $connection, $title, $description, $topic);
        }
    }
}
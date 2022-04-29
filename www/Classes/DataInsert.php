<?php

class DataInsert
{
    function data_insert (string $title, string $description, string $topic): void
    {
        require "/var/www/Classes/DataTopicCheck.php";
            $data_topic_check = new DataTopicCheck();
            $data_topic_check->data_topic_check($title, $description, $topic);
        if ($data_topic_check)
        {
            require "/var/www/Classes/DataConnection.php";
                $data_connect = new DataConnection();
                $c_pdo = new DataConnectionPdo();
                $connection = $data_connect->connection_interface_implements($c_pdo);
            require "/var/www/Classes/DataInsertInDb.php";
                $insert_data_to = new DataInsertInDb;
                $db = new DataInsertMariaDb;
                $insert_data_to->saving_data($db, $connection, $title, $description, $topic);
                header("Location:/");
        }
    }
}
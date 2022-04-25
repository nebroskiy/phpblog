<?php
function data_insert ($title, $description, $topic)
{
    require "data_topic_check.php";
    $data_topic_check = data_topic_check($title, $description, $topic);
    if ($data_topic_check){
        require "pdo_connection.php";
        $connection = connection($driver, $host, $dbname, $charset, $username, $password);
        require "data_insert_mariadb.php";
        data_insert_mariadb($connection, $title, $description, $topic);
        header("Location:/");
    }
}
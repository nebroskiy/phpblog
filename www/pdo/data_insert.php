<?php
function data_insert ($title, $description, $topic)
{
    if (strlen($title) <= 5) {
        echo "This title is too short.";;
    } elseif (trim($title) == "" || $title == "") {
        echo "Enter title";
    } elseif (strlen($description) <= 5) {
        echo "Description is too short.";
    } elseif (trim($description) == "" || $description == "") {
        echo "Enter description";
    } elseif (strlen($topic) < 10) {
        echo "Your topic is too short.";
    } elseif (trim($topic) == "" || $topic == "") {
        echo "Enter topic";
    } else {
        require "pdo_connection.php";
        $connection = connection($driver, $host, $dbname, $charset, $username, $password);
        require "data_insert_mariadb.php";
                data_insert_mariadb($connection, $title, $description, $topic);
        header("Location:/");
    }
}
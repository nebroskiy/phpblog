<?php
$driver = "mysql";
$host = "db";
$dbname = "dbtest";
$charset = "utf8";
$username = "root";
$password = "qwerty";
function connection ($driver, $host, $dbname, $charset, $username, $password)
{
    $connection = new PDO("$driver:host=$host;dbname=$dbname;charset=$charset", "$username", "$password");
    return $connection;
}
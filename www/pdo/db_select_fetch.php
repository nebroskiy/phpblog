<?php
require "pdo_connection.php";
$connection = connection($driver, $host, $dbname, $charset, $username, $password);
$query = "SELECT * FROM test_table ORDER BY id DESC;";
$res = $connection->query($query);

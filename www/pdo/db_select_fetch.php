<?php
require_once "pdo_connection.php";
$query = "SELECT * FROM test_table ORDER BY id DESC;";
$res = $connection->query($query);

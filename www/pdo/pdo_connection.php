<?php
$driver = "mysql";
$host = "db";
$dbname = "dbtest";
$charset = "utf8";
$username = "root";
$password = "qwerty";
$connection = new PDO("$driver:host=$host;dbname=$dbname;charset=$charset", "$username", "$password");
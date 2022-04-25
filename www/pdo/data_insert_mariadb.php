<?php
function data_insert_mariadb ($connection, $title, $description, $topic)
{
$query = "INSERT test_table(title, description, topic) VALUES (:title, :description, :topic)";
$insert = $connection->prepare($query);
$insert->bindParam(":title", $title);
$insert->bindParam(":description", $description);
$insert->bindParam(":topic", $topic);
$insert->execute();
#$connection->exec($query);
}
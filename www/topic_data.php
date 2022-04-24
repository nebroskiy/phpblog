<?php

$title = $_POST["title"];
$description = $_POST["description"];
$topic = $_POST["topic"];

    if (strlen($title) <= 5) {
        echo "This title is too short.";
;   }
    elseif (trim($title) == "" || $title == ""){
        echo "Enter title";
    }
    elseif (strlen($description) <= 5) {
        echo "Description is too short.";
    }
    elseif (trim($description) == "" || $description == "") {
        echo "Enter description";
    }
    elseif (strlen($topic) < 10) {
        echo "Your topic is too short.";
    }
    elseif (trim($topic) == "" || $topic == ""){
        echo "Enter topic";
    }
    else{
        require_once "pdo_connection.php";
        $query = "INSERT test_table(title, description, topic) VALUES (:title, :description, :topic)";
        $insert = $connection->prepare($query);
        $insert->bindParam(":title", $title);
        $insert->bindParam(":description", $description);
        $insert->bindParam(":topic", $topic);
        $insert->execute();
#       $connection->exec($query);
        header("Location:/");
    }
exit;


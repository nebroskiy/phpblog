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
        $connection = new PDO("mysql:host=db;dbname=dbtest;charset=utf8", "root", "qwerty");
        $query = "INSERT test_table(title, description, topic) VALUES ('$title', '$description', '$topic')";
        $connection->exec($query);
        header("Location:/");
    }
exit;


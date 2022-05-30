<?php
require "DataPostMethod.php";

    $dataFromPostMethod = new DataPostMethod();
    $getDataFromPost = $dataFromPostMethod->getPostMethodData($_POST);

require "DataInsert.php";

    $topicInsertion = new DataInsert($getDataFromPost["title"], $getDataFromPost["description"], $getDataFromPost["topic"]);
    header("Location:/");
exit;


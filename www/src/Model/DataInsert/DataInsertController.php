<?php

use DataInsert\DataInsert;
use DataInsert\DataPostMethod;

    $dataFromPostMethod = new DataPostMethod();
    $getDataFromPost = $dataFromPostMethod->getPostMethodData($_POST);

    $topicInsertion = new DataInsert($getDataFromPost["title"], $getDataFromPost["description"], $getDataFromPost["topic"]);
    header("Location:/");

exit;


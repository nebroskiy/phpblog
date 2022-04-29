<?php
require "/var/www/Classes/DataPostMethod.php";
    $data_from_post_method = new DataPostMethod();
    $data_post_array = $data_from_post_method->receive_post_method_data($_POST);
require "/var/www/Classes/DataInsert.php";
    $topic_insertion = new DataInsert();
    $topic_insertion->data_insert($data_post_array["title"], $data_post_array["description"], $data_post_array["topic"]);
exit;


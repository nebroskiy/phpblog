<?php
$data_post = $_POST;
function data_post_method($data_post){
    $data_post_array = ["title" => $data_post["title"], "description" => $data_post["description"], "topic" => $data_post["topic"]];
    return $data_post_array;
}

#$title = $_POST["title"];
#$description = $_POST["description"];
#$topic = $_POST["topic"];

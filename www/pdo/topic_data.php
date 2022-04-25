<?php
require "data_post_method.php";
$data_post_array = data_post_method($data_post);
require "data_insert.php";
data_insert($data_post_array["title"], $data_post_array["description"], $data_post_array["topic"]);
exit;


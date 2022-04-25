<?php
require "../html-head.php";
require "../db_select_fetch.php";
$list_p = [];
while ($row = $res->fetch()) {
    $id = $row["id"];
    $title = $row["title"];
    $list_p += [$id => $title];
}
$json_p = json_encode($list_p);
echo $json_p;
require "../html-footer.php";
<?php
require "../html/html-head.php";
require "../pdo/topics_fetch_id_desc.php";
$list_p = [];
while ($row = $res->fetch()) {
    $list_p[] = [$row["id"] => $row["title"]];
}
$json_p = json_encode($list_p);
echo $json_p;
require "../html/html-footer.php";
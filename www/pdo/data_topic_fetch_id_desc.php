<?php
function topic_fetch_id_desc(object $connection)
{
    $query = "SELECT * FROM test_table ORDER BY id DESC;";
    return $res_query = $connection->query($query);
}
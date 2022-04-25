<?php
function topics_fetch_id_desc($connection)
{
    $query = "SELECT * FROM test_table ORDER BY id DESC;";
    return $res_query = $connection->query($query);
}
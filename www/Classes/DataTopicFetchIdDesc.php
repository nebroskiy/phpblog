<?php

class DataTopicFetchIdDesc
{
    public function data_topic_fetch_id_desc(object $connection): object
    {
        $query = "SELECT * FROM test_table ORDER BY id DESC;";
        return $res_query = $connection->query($query);
    }
}
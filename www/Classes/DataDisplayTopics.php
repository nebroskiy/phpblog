<?php

class DataDisplayTopics
{
    public function data_display_topics(object $res_query): void
    {
        while ($row = $res_query->fetch()) {
            $title = $row["title"];
            $description = $row["description"];
            $topic = $row["topic"];
            require "/var/www/html/display_topics_fill.php";
        }
    }
}
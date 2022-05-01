<?php

class DataDisplayTopics
{
    public function dataDisplayTopics(object $resQuery): void
    {
        while ($row = $resQuery->fetch()) {
            $title = $row["title"];
            $description = $row["description"];
            $topic = $row["topic"];
            require "/var/www/view/blog/display_topics_fill.php";
        }
    }
}
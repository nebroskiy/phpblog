<?php
function display_topics($res_query)
{
    while ($row = $res_query->fetch()) {
        $title = $row["title"];
        $description = $row["description"];
        $topic = $row["topic"];
        require "/var/www/html/display_topics_fill.php";
    }
}
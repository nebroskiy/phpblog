<?php
function display_topics($res)
{
    while ($row = $res->fetch()) {
        $title = $row["title"];
        $description = $row["description"];
        $topic = $row["topic"];
        echo "
    <span class=\"form-control\">
        <h2>$title</h2>
        <h4>$description</h4>
        <p>$topic</p>
    </span><br>";
    }
}
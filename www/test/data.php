<?php
$connection = new PDO("mysql:host=db;dbname=dbtest;charset=utf8", "root", "qwerty");
$query = "SELECT * FROM test_table;";
$description = "SELECT description FROM test_table WHERE id=2;";
$topic = "SELECT topic FROM test_table WHERE id=2;";
$res = $connection->query($query);
while ($row = $res->fetch()){
    $title = $row["title"]."<br>";
    $description = $row["description"]."<br>";
    $topic = $row["topic"]."<br>";
    echo "
    <span class=\"form-contro\">
        <h2>$title</h2>
        <h3>$description</h3>
        <p>$topic</p>
    </span>";
}
?>

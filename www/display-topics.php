<div class="container mt-4">
    <?php
    $connection = new PDO("mysql:host=db;dbname=dbtest;charset=utf8", "root", "qwerty");
    $query = "SELECT * FROM test_table;";
    $res = $connection->query($query);
    while ($row = $res->fetch()){
        $title = $row["title"]."<br>";
        $description = $row["description"]."<br>";
        $topic = $row["topic"]."<br>";
        echo "
    <span class=\"form-control\">
        <h2>$title</h2>
        <h4>$description</h4>
        <p>$topic</p>
    </span><br>";
    }
    ?>
</div>
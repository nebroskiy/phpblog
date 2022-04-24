<!DOCTYPE html>
<html>
<head>
    <title>PHP Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<header>
    <h1>Here will be blog</h1>
</header>
<nav>
    <a href="/">Home</a> |
    <a role="link" aria-disabled="true">Blog</a> |
    <a href="/css/">Log in</a> |
    <a href="/js/">Account</a> |
    <a href="/python/">About</a> |
    <a href="/code.php">Test File</a>
</nav>
<nav>
    <a role="link" aria-disabled="true">All topics</a> |
    <a href="/create_topic.php">Create topic</a> |
    <a href="/my_topics.php">My topics</a>
</nav>
</body>
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
        <h3>$description</h3>
        <p>$topic</p>
    </span><br>";
    }
?>
</div>
</html>
<?php
    $article = "Create Topic";
    require "./html/html-head.php";
?>
<body>
<header>
    <h1>Create Topic</h1>
</header>
<?php
    require "./html/nav_main.php";
    require "./html/nav_blog.php";
?>
</body>
<div class="container mt-4">
    <form action="/pdo/topic_data.php" method="post">
        <input type="text" name="title" placeholder="Title..." class="form-control"><br>
        <input type="text" name="description" placeholder="Description..." class="form-control"><br>
        <textarea name="topic" placeholder="Your topic..." class="form-control"></textarea><br>
        <input type="submit" value="Submit" class="btn btn-success"><br>
    </form>
</div>
<?php
    require "./html/html-footer.php";
?>
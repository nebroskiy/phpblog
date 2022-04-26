<?php
    $article = "Blog";
    require "./html/html-head.php";
?>
<header>
    <h1>Here will be blog</h1>
</header>
<?php
    require "./html/nav_main.php";
    require "./html/nav_blog.php";
?>
<div class="container mt-4">
<?php
    require "./pdo/pdo_connection.php";
    $connection = connection($driver, $host, $dbname, $charset, $username, $password);
    require "./pdo/data_topic_fetch_id_desc.php";
    $res_query = topic_fetch_id_desc($connection);
    require "./pdo/data_display_topics.php";
    display_topics($res_query);
?>
<div>
<?php
    require "./html/html-footer.php";
?>
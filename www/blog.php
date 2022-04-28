<?php
    $article = "Blog";
    require "/var/www/html/html-head.php";
?>
<header>
    <h1>Here will be blog</h1>
</header>
<?php
    require "/var/www/html/nav_main.php";
    require "/var/www/html/nav_blog.php";
?>
<div class="container mt-4">
<?php
#    require "/var/www/pdo/pdo_connection.php";
#    $connection = connection($driver, $host, $dbname, $charset, $username, $password);
    require "/var/www/Classes/Data_Connection.php";
    $connect = new Data_Connection();
    $c_pdo = new Connection_PDO();
    $connect->connection($c_pdo);
    require "/var/www/pdo/data_topic_fetch_id_desc.php";
    $res_query = topic_fetch_id_desc($connection);
    require "/var/www/pdo/data_display_topics.php";
    display_topics($res_query);
?>
<div>
<?php
    require "/var/www/html/html-footer.php";
?>
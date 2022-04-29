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
    require "/var/www/Classes/DataConnection.php";
        $data_connect = new DataConnection();
        $c_pdo = new DataConnectionPdo();
        $connection = $data_connect->connection_interface_implements($c_pdo);
    require "/var/www/Classes/DataTopicFetchIdDesc.php";
        $topic_fetch = new DataTopicFetchIdDesc();
        $res_query = $topic_fetch->data_topic_fetch_id_desc($connection);
    require "/var/www/Classes/DataDisplayTopics.php";
        $display_topics = new DataDisplayTopics();
        $display_topics->data_display_topics($res_query);
?>
<div>
<?php
    require "/var/www/html/html-footer.php";
?>
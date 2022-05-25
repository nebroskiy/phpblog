<?php
    $article = "Blog";
    require "/var/www/view/html-head.php";
?>
<header>
    <h1>Here will be blog</h1>
</header>
<?php
    require "/var/www/view/nav/nav_main.html";
    require "/var/www/view/nav/nav_blog.html";
?>
<div class="container mt-4">
<?php
    require "/var/www/model/data_topic_display/TopicDisplayController.php";
    require "/var/www/template_handler/TplHandler.php";
    $topicsToView = new TopicDisplayController();
    $topicsToView->displayTopics();
?>
</div>
<?php
    require "/var/www/view/html-footer.html";
?>
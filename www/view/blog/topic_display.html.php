<div class="container mt-4">
    <?php
    require "/var/www/model/data_topic_display/TopicDisplayController.php";
    $topicsToView = new TopicDisplayController();

    foreach ($topicsToView->getPagesToDisplay() as $page)
    {
        echo $page;
    }
    ?>
</div>
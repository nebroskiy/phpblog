<div class="container mt-4">
    <?php

    use DataTopicDisplay\TopicDisplayController;

    $topicsToView = new TopicDisplayController();
    $topicsToView->foreachPagesToDisplay($topicsToView->getPagesToDisplay());
    ?>
</div>
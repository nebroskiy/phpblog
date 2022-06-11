<div class="container mt-4">
    <?php

    use DataTopicDisplay\TopicDisplayController;
    use DataTopicDisplay\DataTopicFetchIdDesc;
    use DataConnection\DataConnectionPdo;
    use DataTopicDisplay\DataDisplayTopics;
    use TplHandler\TplHandler;

    $topicToView = new TopicDisplayController(new DataDisplayTopics(new TplHandler(),
                                                new DataTopicFetchIdDesc(new DataConnectionPdo())));
    $topicToView->callFetchIdDesc();
    $topicToView->callSetFills();
    $topicToView->setPagesToDisplay();
    $topicToView->getPagesToDisplay();
    ?>
</div>
<?php

class TopicDisplayController
{
    public function displayTopics (): void
    {
        require "/var/www/model/data_connection/DataConnection.php";
            $dataConnect = new DataConnection();
            $c_pdo = new DataConnectionPdo();
            $connection = $dataConnect->getConnection($c_pdo);
        require "DataTopicFetchIdDesc.php";
            $topicFetch = new DataTopicFetchIdDesc();
            $resQuery = $topicFetch->dataTopicFetchIdDesc($connection);
        require "DataDisplayTopics.php";
            $displayTopics = new DataDisplayTopics(
                            new TplHandler('/var/www/view/blog/display_topics_fill.tpl'), $resQuery);
    }
}
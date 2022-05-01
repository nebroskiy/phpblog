<?php

class TopicDisplayController
{
    public function displayTopics (): void
    {
        require "/var/www/Classes/DataConnection.php";
            $dataConnect = new DataConnection();
            $c_pdo = new DataConnectionPdo();
            $connection = $dataConnect->getConnection($c_pdo);
        require "/var/www/Classes/DataTopicFetchIdDesc.php";
            $topicFetch = new DataTopicFetchIdDesc();
            $resQuery = $topicFetch->dataTopicFetchIdDesc($connection);
        require "/var/www/Classes/DataDisplayTopics.php";
            $displayTopics = new DataDisplayTopics();
            $displayTopics->dataDisplayTopics($resQuery);
    }
}
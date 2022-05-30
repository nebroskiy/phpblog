<?php

class TopicDisplayController
{
    private PDO $connection;
    private PDOStatement $resQuery;
    private array $pagesToDisplay;

    public function __construct()
    {
        $this->pdoConnect();
        $this->pdoFetchIdDesc($this->connection);
        $this->displayTopics();
    }

    private function pdoConnect(): void
    {
        require "/var/www/model/data_connection/DataConnection.php";
        $connectionBy = new DataConnection();
        $c_pdo = new DataConnectionPdo();
        $this->connection = $connectionBy->getConnection($c_pdo);
    }

    private function pdoFetchIdDesc(PDO $connection): void
    {
        require "DataTopicFetchIdDesc.php";
        $topicFetch = new DataTopicFetchIdDesc();
        $this->resQuery = $topicFetch->dataTopicFetchIdDesc($this->connection);
    }

    public function setPagesToDisplay (array $pages) :void
    {
        $this->pagesToDisplay = $pages;
    }

    public function getPagesToDisplay (): array
    {
        return $this->pagesToDisplay;
    }

    private function displayTopics (): void
    {
        require "DataDisplayTopics.php";
        $displayTopics = new DataDisplayTopics(new TplHandler('/var/www/view/blog/display_topics_fill.tpl'),
                                        $this->resQuery);
        $this->setPagesToDisplay($displayTopics->getPagesDone());
    }
}
<?php

class DetailTopicController
{
    private string $id;
    private PDO $connection;
    private PDOStatement $resQuery;

    public function __construct(GetTopicId $getTopicId)
    {
        $this->id = $getTopicId->getId();
        $this->getTopic();
    }

    private function pdoConnect(): void
    {
        require "/var/www/model/data_connection/DataConnection.php";
        $connectionBy = new DataConnection();
        $c_pdo = new DataConnectionPdo();
        $this->connection = $connectionBy->getConnection($c_pdo);
    }

    private function getQueryPdo(PDO $connection, string $id): void
    {
        require "DataDetail.php";
        $detailTopic = new DataDetail();
        $this->resQuery = $detailTopic->getDetails($connection, $id);
    }

    private function getTopic (): void
    {
        $this->PdoConnect();
        $this->getQueryPdo($this->connection, $this->id);
        if (!$tplFills = $this->resQuery->fetch()){
            require "/var/www/view/404.php";
        } else {
            require "detailTopicGetView.php";
        }
    }
}
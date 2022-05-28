<?php

class DetailTopicController
{
    private string $id;
    private PDO $connection;

    public function __construct(GetTopicId $getTopicId)
    {
        $this->id = $getTopicId->getId();
        $this->getTopic();
    }

    private function PdoConnect(): void
    {
        require "/var/www/model/data_connection/DataConnection.php";
        $connectionBy = new DataConnection();
        $c_pdo = new DataConnectionPdo();
        $this->connection = $connectionBy->getConnection($c_pdo);
    }

    private function getQueryPdo(string $id): PDOStatement
    {
        require "DataDetail.php";
        $detailTopic = new DataDetail();
        $resQuery = $detailTopic->getDetails($this->connection, $id);
        return $resQuery;
    }

    private function getTopic (): void
    {
        $this->PdoConnect();
        $resQuery = $this->getQueryPdo($this->id);
        if (!$tplFills = $resQuery->fetch()){
            require "/var/www/view/404.php";
        } else {
            require "detailTopicGetView.php";
        }
    }
}
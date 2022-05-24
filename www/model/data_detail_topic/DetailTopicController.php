<?php

class DetailTopicController
{
    private string $id;

    public function __construct($uri)
    {
        preg_match('/id=\d+/', $uri, $matches);
        $this->id = $matches[0];
        $this->getTopic($this->id);
    }

    private function getTopic (string $id) :void
    {
        require "/var/www/model/data_connection/DataConnection.php";
            $connectionBy = new DataConnection();
            $c_pdo = new DataConnectionPdo();
            $connection = $connectionBy->getConnection($c_pdo);
        require "DataDetail.php";
            $detailTopic = new DataDetail();
            $resQuery = $detailTopic->getDetails($connection, $id);
        if (!$tplFills = $resQuery->fetch()){
            require "/var/www/view/404.php";
        } else {
            require "detailTopicGetView.php";
        }
//        } else {
//            $title = $row["title"];
//            $description = $row["description"];
//            $topic = $row["topic"];
//            require "detailTopicGetView.php";
//        }
    }
}
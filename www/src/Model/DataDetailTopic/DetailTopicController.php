<?php
namespace DataDetailTopic;

use DataConnection\DataConnection;
use DataConnection\DataConnectionPdo;
use PDO;
use PDOStatement;


class DetailTopicController
{
    private DataDetail $dataDetail;
    private PDOStatement $pdoFills;

    public function __construct(DataDetail $dataDetail)
    {
        $this->dataDetail = $dataDetail;
    }

    public function setPdoFills(): void
    {
        $this->pdoFills = $this->dataDetail->returnDetailsQuery();
    }

    public function requireTopic (): void
    {
        if (!$tplFills = $this->pdoFills->fetch()){
            require "/var/www/view/404.php";
        } else {
            require "detailTopicGetView.php";
        }
    }
}
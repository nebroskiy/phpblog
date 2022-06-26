<?php

namespace DataDetailTopic;

use ControllerManager\ControllerManagerInterface;
use PDOStatement;
use TplHandler\TplHandler;

class DetailTopicControllerNew implements ControllerManagerInterface
{
    private DataDetail $dataDetail;
    private PDOStatement $pdoFills;
    private TplHandler $tplHandler;

    public function __construct(DataDetail $dataDetail, TplHandler $tplHandler)
    {
        $this->dataDetail = $dataDetail;
        $this->tplHandler = $tplHandler;
    }

    public function setPdoFills(): void
    {
        $this->pdoFills = $this->dataDetail->returnDetailsQuery();
    }

    public function requireTopic (): void
    {
        if (!$tplFills = $this->pdoFills->fetch()){
            $this->tplHandler->require('/var/www/view/404.php');
        } else {
            $this->tplHandler->require('/var/www/src/Model/DataDetailTopic/detailTopicGetView.tpl.php',
                                                ['tplHandler' => $this->tplHandler, 'tplFills' => $tplFills]);
        }
    }

    public function display(): void
    {
        $this->setPdoFills();
        $this->requireTopic();
    }
}
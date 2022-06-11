<?php

namespace DataTopicDisplay;

use PDOStatement;
use TplHandler\TplHandler;

class DataDisplayTopics
{
    private TplHandler $tplHandler;
    private DataTopicFetchIdDesc $dataTopicFetchIdDesc;
    public PDOStatement $pdoFills;
    private array $tplFills = [];
    private array $pagesDone;

    public function __construct(TplHandler $tplHandler, DataTopicFetchIdDesc $dataTopicFetchIdDesc)
    {
        $this->tplHandler = $tplHandler;
        $this->dataTopicFetchIdDesc = $dataTopicFetchIdDesc;
    }

    public function pdoFetchIdDesc() :void
    {
        $this->pdoFills = $this->dataTopicFetchIdDesc->dataTopicFetchIdDesc();
    }

    public function setFills () :void
    {
        while ($row = $this->pdoFills->fetch())
        {
            $this->tplFills[] = $row;
        }
    }

    public function getPagesDone () :array
    {
        return $this->pagesDone;
    }

    public function setPagesDone () :void
    {
        $pages = [];

        foreach ($this->tplFills as $fills)
        {
            $pages[] = $this->tplHandler->creator('/var/www/view/blog/display_topics_fill.tpl', $fills);
        }

        $this->pagesDone = $pages;
    }
}
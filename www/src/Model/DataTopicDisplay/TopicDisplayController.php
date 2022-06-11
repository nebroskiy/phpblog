<?php

namespace DataTopicDisplay;

//use DataConnection\DataConnection;
//use DataConnection\DataConnectionPdo;
//use PDO;
use PDOStatement;
//use TplHandler\TplHandler;

class TopicDisplayController
{
    private DataDisplayTopics $dataDisplayTopics;
    private array $pagesToDisplay;

    public function __construct(DataDisplayTopics $dataDisplayTopics)
    {
        $this->dataDisplayTopics = $dataDisplayTopics;
    }

    public function callFetchIdDesc() :void
    {
        $this->dataDisplayTopics->pdoFetchIdDesc();
    }

    public function callSetFills() :void
    {
        $this->dataDisplayTopics->setFills();
    }

    public function setPagesToDisplay () :void
    {
        $this->dataDisplayTopics->setPagesDone();
        $this->pagesToDisplay = $this->dataDisplayTopics->getPagesDone();
    }

    public function getPagesToDisplay () :void
    {
        foreach ($this->pagesToDisplay as $page)
        {
            echo $page;
        }
    }
}
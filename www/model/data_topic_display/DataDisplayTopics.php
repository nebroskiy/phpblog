<?php

class DataDisplayTopics
{
    private object $tplHandler;
    private array $tplFills = [];
    private string $tplFilePrepared;

    public function __construct(TplHandler $tplHandler, PDOStatement $fills)
    {
        $this->setHandler($tplHandler);
        $this->setFills($fills);
        $this->showTopics($this->tplFills);
    }

    public function setHandler (TplHandler $tplHandler) :void
    {
        $this->tplHandler = $tplHandler;
    }

    public function setFills (PDOStatement $fills) :void
    {
        while ($row = $fills->fetch())
        {
            $this->tplFills[] = $row;
        }
    }

    public function getFilePrepared () :string
    {
        return $this->tplFilePrepared;
    }

    public function showTopics (array $tplFills) :void
    {
        foreach ($tplFills as $fills)
        {
            $this->tplFilePrepared = $this->tplHandler->creator($fills);
            echo $this->tplFilePrepared;
            $this->tplHandler->getContents($this->tplHandler->tplFile);
        }
    }
}
<?php

class DataDisplayTopics
{
    private object $tplHandler;
    private array $tplFills = [];
    private string $tplFilePrepared;
    private array $pagesDone;

    public function __construct(TplHandler $tplHandler, PDOStatement $fills)
    {
        $this->setHandler($tplHandler);
        $this->setFills($fills);
        $this->showTopics($this->tplFills);
    }

    private function setHandler (TplHandler $tplHandler) :void
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

    public function setPagesDone (array $pages) :void
    {
        $this->pagesDone = $pages;
    }

    public function getPagesDone (): array
    {
        return $this->pagesDone;
    }

    public function showTopics (array $tplFills): void
    {
        $pages = [];

        foreach ($tplFills as $fills)
        {
            $this->tplFilePrepared = $this->tplHandler->creator($fills);
            $pages[] = $this->tplFilePrepared;
            $this->tplHandler->setContents($this->tplHandler->tplFile);
        }

        $this->setPagesDone($pages);
    }
}
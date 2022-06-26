<?php

namespace DataTopicDisplay;

use ControllerManager\ControllerManagerInterface;
use TplHandler\TplHandler;


class TopicDisplayControllerNew implements ControllerManagerInterface
{
    private DataDisplayTopics $dataDisplayTopics;
    private TplHandler $tplHandler;
    private array $pagesToDisplay;

    public function __construct(DataDisplayTopics $dataDisplayTopics, TplHandler $tplHandler)
    {
        $this->dataDisplayTopics = $dataDisplayTopics;
        $this->tplHandler = $tplHandler;
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

    public function getPagesToDisplay (): array
    {
        return $this->pagesToDisplay;
    }

    public function display(): void
    {

        $fillsBlog = ['title' => 'Blog', 'header' => 'Blog'];

        echo $this->tplHandler->creator('/var/www/view/html-head.html.tpl', $fillsBlog);

        echo $this->tplHandler->creator('/var/www/view/header.tpl', $fillsBlog);

        $this->tplHandler->require('/var/www/view/nav/nav_main.html');
        $this->tplHandler->require('/var/www/view/nav/nav_blog.html');

            $this->callFetchIdDesc();
            $this->callSetFills();
            $this->setPagesToDisplay();
            $topics = $this->getPagesToDisplay();

        $this->tplHandler->require('/var/www/view/blog/display_topics.tpl.php', $topics);

        $this->tplHandler->require('/var/www/view/html-footer.html');
    }
}
<?php

namespace CreateTopic;

use ControllerManager\ControllerManagerInterface;
use TplHandler\TplHandler;

class CreateTopicController implements ControllerManagerInterface
{
    private TplHandler $tplHandler;

    public function __construct(TplHandler $tplHandler)
    {
        $this->tplHandler = $tplHandler;
    }

    public function display(): void
    {
       $this->tplHandler->require('/var/www/view/create_topic/create_topic.tpl.php', ['tplHandler' => $this->tplHandler]);
    }
}
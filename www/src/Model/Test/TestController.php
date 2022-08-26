<?php

namespace Test;

use ControllerManager\ControllerManagerInterface;
use TplHandler\TplHandler;

class TestController implements ControllerManagerInterface
{
    private TplHandler $tplHandler;

    public function __construct()
    {
        $this->tplHandler = new TplHandler();
    }

    public function display()
    {
        $this->tplHandler->require('/var/www/view/testview/test_child.tpl.php');
    }
}
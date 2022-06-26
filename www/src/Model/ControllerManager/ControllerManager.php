<?php

namespace ControllerManager;

class ControllerManager
{
    public function display(ControllerManagerInterface $controller): void
    {
        $controller->display();
    }
}
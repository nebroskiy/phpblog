<?php

namespace ControllerManager;

class ControllerManager
{
    public function display(ControllerManagerInterface $controller)
    {
        $controller->display();
    }
}
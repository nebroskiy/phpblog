<?php

namespace Routing;

use ControllerManager\ControllerManagerInterface;

class Routes
{
    private array $routes;

    public function __construct(ControllerManagerInterface $topicDisplayControllerNew)
    {
        $this->routes = [['regular_pattern' => '/^\/$/', 'controller' => $topicDisplayControllerNew],
                         ['regular_pattern' => '/^\/blog$/', 'controller' => $topicDisplayControllerNew]];
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }
}
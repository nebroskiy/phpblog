<?php

namespace Routing;

use ControllerManager\ControllerManagerInterface;

class Routes
{
    private array $routes;

    public function __construct(ControllerManagerInterface $topicDisplayControllerNew,
                                ControllerManagerInterface $detailTopicControllerNew)
    {
        $this->routes = [['regular_pattern' => '/^\/$/', 'controller' => $topicDisplayControllerNew],
                         ['regular_pattern' => '/^\/blog$/', 'controller' => $topicDisplayControllerNew],
                         ['regular_pattern' => '/^\/blog\/id=\d+$/', 'controller' => $detailTopicControllerNew]];
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }
}
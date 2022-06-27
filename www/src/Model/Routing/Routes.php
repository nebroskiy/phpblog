<?php

namespace Routing;

use ControllerManager\ControllerManagerInterface;

class Routes
{
    private array $routes;

    public function __construct(ControllerManagerInterface $topicDisplayControllerNew,
                                ControllerManagerInterface $detailTopicControllerNew,
                                ControllerManagerInterface $createTopicController,
                                ControllerManagerInterface $insertControllerNew)
    {
        $this->routes = [['regular_pattern' => '/^\/$/', 'controller' => $topicDisplayControllerNew],
                         ['regular_pattern' => '/^\/blog$/', 'controller' => $topicDisplayControllerNew],
                         ['regular_pattern' => '/^\/blog\/id=\d+$/', 'controller' => $detailTopicControllerNew],
                         ['regular_pattern' => '/^\/createtopic$/', 'controller' => $createTopicController],
                         ['regular_pattern' => '/^\/InsertController$/', 'controller' => $insertControllerNew]];
    }

    public function getRoutes(): array
    {
        return $this->routes;
    }
}
<?php

namespace Routing;

use ControllerManager\ControllerManager;
use ControllerManager\ControllerManagerInterface;
use Exceptions\Routing\RoutingException404;
use Exceptions\Routing\RoutingExceptions;

class IndexRouting
{
    public string $uri;
//    private array $uriExplode;
    private array $routes;
    private ControllerManager $controllerManager;
    public ControllerManagerInterface $controller;

    public function __construct(ControllerManager $controllerManager, Routes $routes)
    {
        $this->controllerManager = $controllerManager;
        $this->routes = $routes->getRoutes();
    }

    private function setPageToView($routes): bool
    {
        foreach ($routes as $page)
        {
            if (preg_match($page['regular_pattern'], $this->uri))
            {
                $this->controller = $page['controller'];
                return True;
            }
        }

        return False;
    }

    public function pageDisplay()
    {
        $this->uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
//        $this->uriExplode = explode("/", $this->uri);

        try
        {
            if ($this->setPageToView($this->routes))
            {
                $this->controllerManager->display($this->controller);
            } else {
                throw new RoutingException404();
            }
        } catch (RoutingExceptions $e)
        {
            return $e->getExceptionPage();
        }
    }
}

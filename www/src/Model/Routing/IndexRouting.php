<?php

namespace Routing;

use Exceptions\Routing\RoutingException404;
use Exceptions\Routing\RoutingExceptions;

class IndexRouting
{
    public string $uri;
//    private array $uriExplode;
    private array $routes;
    public string $pageToView;

    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function getPageToView(): string
    {
        return $this->pageToView;
    }

    private function setPageToView($routes): bool
    {
        foreach ($routes as $page)
        {
            if (preg_match($page['regular_pattern'], $this->uri))
            {
                $this->pageToView = $page['controller'];
                return True;
            }
        }

        return False;
    }

    public function pageDisplay(): string
    {
        $this->uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
//        $this->uriExplode = explode("/", $this->uri);

        try
        {
            if ($this->setPageToView($this->routes))
            {
                return $this->getPageToView();
            } else {
                throw new RoutingException404();
            }
        } catch (RoutingExceptions $e)
        {
            return $e->getExceptionPage();
        }
    }
}

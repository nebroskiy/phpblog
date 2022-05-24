<?php

class IndexRouting
{
    private string $uri;
    private array $uriExplode;
    private array $routes;

    public function __construct($routes)
    {
        $this->routes = $routes;
        $this->pageDisplay();
    }

    private function pageDisplay(): void
    {
        $this->uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $this->uriExplode = explode("/", $this->uri);

        foreach ($this->routes as $page)
        {
            if (preg_match($page['regular_pattern'], $this->uri, $matches))
            {
                require $page['controller'];
            }
        }

    }
}

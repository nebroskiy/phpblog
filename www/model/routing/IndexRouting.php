<?php

class IndexRouting
{
    public string $uri;
    private array $uriExplode;
    private array $routes;
    public string $pageToView;

    public function __construct($routes)
    {
        $this->routes = $routes;
        $this->pageDisplay();
    }

    public function getPageToView(): string
    {
        return $this->pageToView;
    }

    private function pageDisplay(): void
    {
        $this->uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
        $this->uriExplode = explode("/", $this->uri);

        foreach ($this->routes as $page)
        {
            if (preg_match($page['regular_pattern'], $this->uri, $matches))
            {
                $this->pageToView = $page['controller'];
            }
        }
    }
}

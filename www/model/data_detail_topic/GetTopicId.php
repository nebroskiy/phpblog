<?php

class GetTopicId
{
    private string $id;

    public function __construct(IndexRouting $router)
    {
        $uri = $router->uri;
        preg_match('/id=\d+/', $uri, $matches);
        $this->id = $matches[0];
    }

    public function getId(): string
    {
        return $this->id;
    }
}
<?php

namespace DataDetailTopic;

use Routing\IndexRouting;

class GetTopicId
{
    private string $id;

    public function setId(): void
    {
        $uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

        preg_match('/id=\d+/', $uri, $matches);

        $this->id = $matches[0];
    }

    public function getId(): string
    {
        return $this->id;
    }
}
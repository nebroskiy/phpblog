<?php

abstract class RoutingExceptions extends Exception
{
    protected string $exceptionPage;

    public function getExceptionPage(): string
    {
        return $this->exceptionPage;
    }
}

class RoutingException404 extends RoutingExceptions
{
    protected string $exceptionPage = "/var/www/view/404.php";
}
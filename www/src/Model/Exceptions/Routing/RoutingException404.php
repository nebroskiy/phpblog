<?php

namespace Exceptions\Routing;

class RoutingException404 extends RoutingExceptions
{
    protected string $exceptionPage = "/var/www/view/404.php";
}
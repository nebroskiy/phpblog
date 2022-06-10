<?php

namespace Exceptions\Routing;

use Exception;

abstract class RoutingExceptions extends Exception
{
    protected string $exceptionPage;

    public function getExceptionPage(): string
    {
        return $this->exceptionPage;
    }
}


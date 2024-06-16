<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Application\Routes;

interface RouteGroupInterface extends RouteInterface
{
    public function getChildren(): Routes;
}

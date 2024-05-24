<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Application\Routes;

interface RouteActionInterface extends RouteInterface
{
    /** callable|array{0: class-string, 1: string} */
    public function getCallback(): callable|array;
}
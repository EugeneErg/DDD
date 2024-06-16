<?php

declare(strict_types = 1);

namespace EugeneErg\Example;

use EugeneErg\DDD\Application\Routes\Action;
use EugeneErg\DDD\Application\Routes\Group;

class Route extends Group
{
    public function __construct()
    {
        parent::__construct(
            Action::get(static function (BookController $controller): array {
                return [$controller, 'method'];
            }, 'test'),
        );
    }
}

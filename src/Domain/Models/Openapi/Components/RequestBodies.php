<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components;

use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies\RequestBody;

final readonly class RequestBodies
{
    /** @var array<string, RequestBody> */
    public array $items;

    public function __construct(RequestBody ...$requestBodies)
    {
        $this->items = $requestBodies;
    }
}
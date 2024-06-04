<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Responses\Response;

final readonly class Responses
{
    /** @var array<string, Response> */
    public array $items;

    public function __construct(Response ...$responses)
    {
        $this->items = $responses;
    }
}
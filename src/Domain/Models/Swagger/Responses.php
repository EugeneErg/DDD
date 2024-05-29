<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Responses
{
    /** @var Response[] */
    public array $items;

    public function __construct(Response ...$responses)
    {
        $this->items = $responses;
    }
}
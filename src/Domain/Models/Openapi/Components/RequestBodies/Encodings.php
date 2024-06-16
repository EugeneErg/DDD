<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies;

final readonly class Encodings
{
    /** @var array<string, Encoding> */
    public array $items;

    public function __construct(Encoding ...$encodings)
    {
        $this->items = $encodings;
    }
}

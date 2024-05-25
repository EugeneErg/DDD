<?php

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Encodings
{
    /** @var Encoding[] */
    public array $items;

    public function __construct(Encoding ...$encodings)
    {
        $this->items = $encodings;
    }
}
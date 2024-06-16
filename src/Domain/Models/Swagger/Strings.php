<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Strings
{
    /** @var string[] */
    public array $items;

    public function __construct(string ...$strings)
    {
        $this->items = $strings;
    }
}

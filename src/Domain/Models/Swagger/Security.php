<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Security
{
    /** @var Strings[] */
    public array $items;

    public function __construct(Strings ...$strings)
    {
        $this->items = $strings;
    }
}
<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Headers
{
    /** @var Header[] */
    public array $items;

    public function __construct(Header ...$headers)
    {
        $this->items = $headers;
    }
}

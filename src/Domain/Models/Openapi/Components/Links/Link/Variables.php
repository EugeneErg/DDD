<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Links\Link;

final readonly class Variables
{
    /** @var Variable[] */
    public array $items;

    public function __construct(Variable ...$variables)
    {
        $this->items = $variables;
    }
}
<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components;

use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\AbstractSecurityScheme;

final readonly class SecuritySchemes
{
    /** @var array<string, AbstractSecurityScheme> */
    public array $items;

    public function __construct(AbstractSecurityScheme ...$securitySchemes)
    {
        $this->items = $securitySchemes;
    }

    public function toArray(): array
    {
        $result = [];

        foreach ($this->items as $name => $item) {
            $result[$name] = $item->toArray();
        }

        return $result;
    }
}

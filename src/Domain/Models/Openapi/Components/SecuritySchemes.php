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
        /** @var array<string, AbstractSecurityScheme> $securitySchemes */
        $this->items = $securitySchemes;
    }

    /**
     * @return array<string, array{type: string, description?: string}>
     */
    public function toArray(): array
    {
        $result = [];

        foreach ($this->items as $name => $item) {
            $result[$name] = $item->toArray();
        }

        return $result;
    }
}

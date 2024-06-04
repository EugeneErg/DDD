<?php

declare(strict_types=1);

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
}
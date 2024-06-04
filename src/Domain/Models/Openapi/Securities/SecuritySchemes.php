<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Securities;

use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security\Flows\Scopes;

/**
 * Каждая строка это ссылка на components.securitySchemes.{name}
 * значения, это ссылки на components.securitySchemes.{name}.flows.*.scopes.{scope}
 */
final readonly class SecuritySchemes
{
    /** @var array<string, Scopes> */
    public array $items;

    public function __construct(Scopes ...$scopes)
    {
        $this->items = $scopes;
    }
}
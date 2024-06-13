<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Securities;

use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\AbstractSecurityScheme;
use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security\Flows\Scope;

/**
 * Каждая строка это ссылка на components.securitySchemes.{name}
 * значения, это ссылки на components.securitySchemes.{name}.flows.*.scopes.{scope}
 */
final readonly class SecuritySchemes
{
    /** @var array<Scope|AbstractSecurityScheme> */
    public array $items;

    public function __construct(Scope|AbstractSecurityScheme ...$scopes)
    {
        $this->items = $scopes;
    }

    public function toArray(\EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes $securitySchemes): array
    {
        $result = [];

        foreach ($this->items as $scopeOrScheme) {
            $result = array_merge_recursive($result, $scopeOrScheme->toTargetArray($securitySchemes));
        }

        return $result;
    }
}
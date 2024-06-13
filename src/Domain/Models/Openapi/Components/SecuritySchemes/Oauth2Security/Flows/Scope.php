<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security\Flows;

use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes;
use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security\Scheme;
use EugeneErg\DDD\Domain\Models\Openapi\Exceptions\ScopeNotFoundOpenapiException;

final readonly class Scope
{
    public function __construct(public string $value)
    {
    }

    public function toTargetArray(SecuritySchemes $securitySchemes): array
    {
        foreach ($securitySchemes->items as $schemeName => $scheme) {
            if ($scheme instanceof Scheme) {
                foreach ($scheme->flows->items as $scopes) {
                    $name = array_search($this, $scopes);

                    if ($name !== false) {
                        return [$schemeName => [$name]];
                    }
                }
            }
        }

        throw new ScopeNotFoundOpenapiException;
    }
}
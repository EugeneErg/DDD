<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security\Flows;

abstract readonly class AbstractFlow
{
    public function __construct(
        public Scopes $scopes,
        public ?string $refreshUrl = null,
    ) {
    }
}
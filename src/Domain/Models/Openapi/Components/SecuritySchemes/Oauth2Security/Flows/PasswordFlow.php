<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security\Flows;

final readonly class PasswordFlow extends AbstractFlow
{
    public function __construct(
        public string $tokenUrl,
        Scopes $scopes,
        ?string $refreshUrl = null,
    ) {
        parent::__construct($scopes, $refreshUrl);
    }
}
<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security;

use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\AbstractSecurityScheme;

final readonly class Scheme extends AbstractSecurityScheme
{
    public function __construct(public Flows $flows)
    {
        parent::__construct('oath2');
    }
}

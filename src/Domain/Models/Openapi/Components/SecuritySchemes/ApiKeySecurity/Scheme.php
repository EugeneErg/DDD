<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\ApiKeySecurity;

use EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\AbstractSecurityScheme;

final readonly class Scheme extends AbstractSecurityScheme
{
    public function __construct(public string $name, public In $in, ?string $description = null)
    {
        parent::__construct('apiKey', $description);
    }
}

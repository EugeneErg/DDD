<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes;

final readonly class BaseHttpSecurityScheme extends AbstractSecurityScheme
{
    public string $scheme;

    public function __construct(public ?string $bearerFormat = null)
    {
        $this->scheme = 'base';
        parent::__construct('http');
    }
}

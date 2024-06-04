<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\SecuritySchemes\Oauth2Security\Flows;

final readonly class Scopes
{
    /** @var array<string, string> */
    public array $items;

    public function __construct(string ...$strings)
    {
        $this->items = $strings;
    }
}
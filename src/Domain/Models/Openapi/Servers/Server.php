<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Servers;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Links\Link\Variables;

final readonly class Server
{
    public Variables $variables;
    public Enum $enum;

    public function __construct(
        public string $url,
        public ?string $description = null,
        ?Variables $variables = null,
        public ?string $default = null,
        ?Enum $enum = null,
    ) {
        $this->variables = $variables ?? new Variables();
        $this->enum = $enum ?? new Enum();
    }
}
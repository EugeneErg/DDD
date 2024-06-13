<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Servers;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Links\Link\Variables;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\String\Strings;

final readonly class Server
{
    public Variables $variables;
    public Strings $enum;

    public function __construct(
        public string $url,
        public ?string $description = null,
        ?Variables $variables = null,
        public ?string $default = null,
        null|Strings $enum = null,
    ) {
        $this->variables = $variables ?? new Variables();
        $this->enum = $enum ?? new Strings();
    }

    public function toArray(): array
    {
        $result = [
            'url' => $this->url,
        ];

        if ($this->enum->items !== []) {
            $result['enum'] = $this->enum->items;
        }

        if ($this->description !== null) {
            $result['description'] = $this->description;
        }

        if ($this->default !== null) {
            $result['default'] = $this->default;
        }

        if ($this->variables->items !== []) {
            $result['variables'] = $this->variables->toArray();
        }

        return $result;

    }
}
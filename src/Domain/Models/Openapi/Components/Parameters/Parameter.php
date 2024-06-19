<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters;

use EugeneErg\DDD\Domain\Models\Openapi\Components;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Cookie\SchemaParameter as CookieSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header\SchemaParameter as HeaderSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Path\SchemaParameter as PathSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Query\SchemaParameter as QuerySchemaParameter;

final class Parameter
{
    public function __construct(
        public string $name,
        public CustomParameter|PathSchemaParameter|CookieSchemaParameter|QuerySchemaParameter|HeaderSchemaParameter $parameter,
    ) {
    }

    public function toObject(Components $components): object
    {
        return (object) array_merge($this->getParameterArray($components), ['name' => $this->name]);
    }

    private function getParameterArray(Components $components): array
    {
        if ($this->parameter instanceof PathSchemaParameter) {
            return array_merge((array) $this->parameter->toObject($components), ['in' => In::Path->value]);
        }

        if ($this->parameter instanceof CookieSchemaParameter) {
            return array_merge((array) $this->parameter->toObject($components), ['in' => In::Cookie->value]);
        }

        if ($this->parameter instanceof QuerySchemaParameter) {
            return array_merge((array) $this->parameter->toObject($components), ['in' => In::Query->value]);
        }

        if ($this->parameter instanceof HeaderSchemaParameter) {
            return array_merge((array) $this->parameter->toObject($components), ['in' => In::Header->value]);
        }

        return (array) $this->parameter->toObject($components);
    }
}

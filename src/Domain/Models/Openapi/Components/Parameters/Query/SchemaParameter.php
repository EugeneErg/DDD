<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Query;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\In;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValue;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;

final readonly class SchemaParameter extends AbstractSchemaParameter
{
    public function __construct(
        string $name,
        AbstractSchema $schema,
        ?bool $explode = null,
        public bool $allowEmptyValue = false,
        public bool $allowReserved = false,
        null|AbstractValue|AbstractValues $examples = null,
        ?string $description = null,
        bool $required = false,
        bool $deprecated = false,
        public Style $style = Style::Form,
    ) {
        parent::__construct($name, In::Query, $schema, $explode ?? $style === Style::Form, $description, $examples, $required, $deprecated);
    }

    public function toArray(): array
    {
        $result = array_merge(parent::toArray(), ['style' => $this->style->value]);

        if ($this->allowEmptyValue) {
            $result['allowEmptyValue'] = $this->allowEmptyValue;
        }

        if ($this->allowReserved) {
            $result['allowReserved'] = $this->allowReserved;
        }

        return $result;
    }
}
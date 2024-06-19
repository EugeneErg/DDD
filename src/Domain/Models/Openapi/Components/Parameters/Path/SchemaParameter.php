<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Path;

use EugeneErg\DDD\Domain\Models\Openapi\Components;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract\AbstractSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValue;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;

final readonly class SchemaParameter extends AbstractSchemaParameter
{
    public function __construct(
        AbstractSchema $schema,
        bool $explode = false,
        public bool $allowEmptyValue = false,
        public bool $allowReserved = false,
        null|AbstractValues|AbstractValue $examples = null,
        ?string $description = null,
        bool $deprecated = false,
        public Style $style = Style::Simple,
    ) {
        parent::__construct($schema, $explode, $description, true, $deprecated, $examples);
    }

    public function toObject(Components $components): object
    {
        $result = array_merge((array) parent::toObject($components), ['style' => $this->style->value]);

        if ($this->allowEmptyValue) {
            $result['allowEmptyValue'] = $this->allowEmptyValue;
        }

        if ($this->allowReserved) {
            $result['allowReserved'] = $this->allowReserved;
        }

        return (object) $result;
    }
}

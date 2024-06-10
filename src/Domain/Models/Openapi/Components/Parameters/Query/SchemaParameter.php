<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Query;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Header\AbstractHeaderSchemaParameter;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies\Examples;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\AbstractSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Types\Value;

final readonly class SchemaParameter extends AbstractHeaderSchemaParameter
{
    public function __construct(
        string $name,
        AbstractSchema $schema,
        ?bool $explode = null,
        public bool $allowEmptyValue = false,
        public bool $allowReserved = false,
        null|Examples|Value $examples = null,
        ?string $description = null,
        bool $required = false,
        bool $deprecated = false,
        public Style $style = Style::Form,
    ) {
        parent::__construct($name, $schema, $explode ?? $style === Style::Form, $description, $examples, $required, $deprecated);
    }
}
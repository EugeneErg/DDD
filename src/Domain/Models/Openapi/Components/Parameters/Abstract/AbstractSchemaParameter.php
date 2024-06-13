<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\In;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValue;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Untyped\Values;

abstract readonly class AbstractSchemaParameter extends AbstractParameter
{
    public AbstractValues|AbstractValue $examples;

    public function __construct(
        ?string $name,
        In $in,
        public AbstractSchema $schema,
        public bool $explode = true,
        ?string $description = null,
        ?bool $required = false,
        ?bool $deprecated = false,
        null|AbstractValues|AbstractValue $examples = null,
    ) {
        parent::__construct($name, $in, $description, $required, $deprecated);
        $this->examples = $examples ?? new Values();
    }

    public function toArray(): array
    {
        return array_merge(parent::toArray(), [
            'explode' => $this->explode,
            'schema' => $this->schema->toArray(),
        ]);
    }
}
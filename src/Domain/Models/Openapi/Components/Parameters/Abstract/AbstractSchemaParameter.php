<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract;

use EugeneErg\DDD\Domain\Models\Openapi\Components;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValue;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Untyped\Values;

abstract readonly class AbstractSchemaParameter extends AbstractParameter
{
    public AbstractValues|AbstractValue $examples;

    public function __construct(
        public AbstractSchema $schema,
        public bool $explode = true,
        ?string $description = null,
        ?bool $required = false,
        ?bool $deprecated = false,
        null|AbstractValues|AbstractValue $examples = null,
    ) {
        parent::__construct($description, $required, $deprecated);
        $this->examples = $examples ?? new Values();
    }

    public function toObject(Components $components): object
    {
        return (object) array_merge((array) parent::toObject($components), [
            'explode' => $this->explode,
            'schema' => $this->schema->toObject($components->schemas),
        ]);
    }
}

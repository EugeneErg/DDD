<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies;

use EugeneErg\DDD\Domain\Models\Openapi\Components;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValue;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract\AbstractValues;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Untyped\Values;

final readonly class Content
{
    public AbstractValues|AbstractValue $examples;
    public Encodings $encoding;

    public function __construct(
        public AbstractSchema $schema,
        null|AbstractValues|AbstractValue $examples = null,
        Encodings $encoding = null,
    ) {
        $this->examples = $examples ?? new Values();
        $this->encoding = $encoding ?? new Encodings();
    }

    public function toObject(Components $components): object
    {
        $result = ['schema' => $this->schema->toArray($components->schemas)];

        if ($this->examples instanceof AbstractValue) {
            $result['example'] = $this->examples->toNative();
        } elseif ($this->examples->items !== []) {
            $result['examples'] = $this->examples->toObject();
        }

        if ($this->encoding->items !== []) {
            $result['encoding'] = $this->encoding->toArray($components->headers);
        }

        return (object) $result;
    }
}

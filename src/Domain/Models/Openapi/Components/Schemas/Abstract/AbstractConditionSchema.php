<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Untyped\Schemas;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Untyped\Values;
use EugeneErg\DDD\Domain\Models\Openapi\ExternalDocs;

abstract readonly class AbstractConditionSchema extends AbstractSchema
{
    public AbstractSchemas $anyOf;
    public AbstractSchemas $allOf;
    public AbstractSchemas $oneOf;
    public AbstractValue|AbstractValues $examples;

    public function __construct(
        ?string $type,
        ?string $title = null,
        ?string $description = null,
        bool $nullable = false,
        ?Access $access = null,
        bool $deprecated = false,
        ?ExternalDocs $externalDocs = null,
        ?Xml $xml = null,
        ?AbstractValue $default = null,
        ?AbstractSchemas $anyOf = null,
        ?AbstractSchemas $allOf = null,
        ?AbstractSchemas $oneOf = null,
        public ?AbstractSchema $not = null,
        null|AbstractValue|AbstractValues $examples = null,
    ) {
        parent::__construct($type, $title, $description, $nullable, $access, $deprecated, $externalDocs, $xml, $default);
        $this->examples = $examples ?? new Values();
        $this->anyOf = $anyOf ?? new Schemas();
        $this->allOf = $allOf ?? new Schemas();
        $this->oneOf = $oneOf ?? new Schemas();
    }
}

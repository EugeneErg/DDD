<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\Abstract;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Parameters\In;
use EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies\Examples;
use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Schema;
use EugeneErg\DDD\Domain\Models\Openapi\Types\Value;

abstract readonly class AbstractSchemaParameter extends AbstractParameter
{
    public Examples|Value $examples;

    public function __construct(
        ?string $name,
        In $in,
        public Schema $schema,
        public bool $explode = true,
        ?string $description = null,
        ?bool $required = false,
        ?bool $deprecated = false,
        null|Examples|Value $examples = null,
    ) {
        parent::__construct($name, $in, $description, $required, $deprecated);
        $this->examples = $examples ?? new Examples();
    }
}
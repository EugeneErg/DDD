<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger\Parameter\Query;

use EugeneErg\DDD\Domain\Models\Swagger\Parameter\AbstractParameter as BaseAbstractParameter;
use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\OptionsInterface;

abstract readonly class AbstractParameter extends BaseAbstractParameter
{
    public function __construct(
        bool $explode,
        public bool $allowEmptyValue = false,
        public bool $allowReserved = false,
        bool $required = false,
        bool $deprecated = false,
        ?string $description = null,
        ?OptionsInterface $schema = null,
    ) {
        parent::__construct($explode, $required, $deprecated, $description, $schema);
    }
}
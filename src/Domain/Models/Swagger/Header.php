<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\OptionsInterface;

final readonly class Header
{
    public Examples $examples;

    public function __construct(
        public OptionsInterface $schema,
        public bool $explode = false,
        public EncodingStyle $style = EncodingStyle::Simple,
        public bool $required = false,
        public bool $deprecated = false,
        public ?string $description = null,
        public bool $allowEmptyValue = false,
        public bool $allowReserved = false,
        null|Examples|Example $examples = null,
        //$content
    ) {
        $this->examples = $examples instanceof Example ? new Examples($examples) : $examples ?? new Examples();
    }
}
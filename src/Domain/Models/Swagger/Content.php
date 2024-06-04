<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

use EugeneErg\DDD\Domain\Models\Swagger\Schema\Type\Abstract\OptionsInterface;

final readonly class Content
{
    public Examples $examples;
    public Encodings $encoding;

    public function __construct(
        public OptionsInterface $schema,
        null|Examples|Example $examples = null,
        Encodings $encoding = null,
    ) {
        $this->examples = $examples instanceof Example ? new Examples($examples) : $examples ?? new Examples();
        $this->encoding = $encoding ?? new Encodings();
    }
}
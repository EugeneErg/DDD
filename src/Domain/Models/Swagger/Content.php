<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Content
{
    public Examples $examples;
    public Encodings $encoding;

    public function __construct(
        public mixed $schema = null,
        null|Examples|Example $examples = null,
        Encodings $encoding = null,
    ) {
        $this->examples = $examples instanceof Example ? new Examples($examples) : $examples ?? new Examples();
        $this->encoding = $encoding ?? new Encodings();
    }
}
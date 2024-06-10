<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\RequestBodies;

use EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\AbstractSchema;
use EugeneErg\DDD\Domain\Models\Openapi\Types\Value;

final readonly class Content
{
    public Examples|Value $examples;
    public Encodings $encoding;

    public function __construct(
        public AbstractSchema $schema,
        null|Examples|Value $examples = null,
        Encodings $encoding = null,
    ) {
        $this->examples = $examples ?? new Examples();
        $this->encoding = $encoding ?? new Encodings();
    }
}
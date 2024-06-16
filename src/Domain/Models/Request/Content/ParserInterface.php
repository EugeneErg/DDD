<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Request\Content;

interface ParserInterface
{
    public function fromString(string $content): mixed;

    public function toString(mixed $content): string;
}

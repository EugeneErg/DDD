<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

final readonly class Encoding
{
    public bool $explode;

    public function __construct(
        public object $headers,
        public EncodingStyle $style = EncodingStyle::Form,
        ?bool $explode = null,
        public bool $allowReserved = false,
    ) {
        $this->explode = $explode ?? ($this->style === EncodingStyle::Form || $this->style === EncodingStyle::Simple);
    }
}

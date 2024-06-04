<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Info;

final readonly class Contacts
{
    public function __construct(
        public ?string $name = null,
        public ?string $url = null,
        public ?string $email = null,
    ) {
    }
}
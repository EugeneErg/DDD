<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Swagger;

use EugeneErg\DDD\Domain\Models\Swagger\Info\Contact;
use EugeneErg\DDD\Domain\Models\Swagger\Info\License;

final readonly class Info
{
    public function __construct(
        public string $title,
        public string $version,
        public ?string $description = null,
        public ?string $termsOfService = null,
        public ?Contact $contact = null,
        public ?License $license = null,
    ) {}
}
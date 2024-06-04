<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

use EugeneErg\DDD\Domain\Models\Openapi\Info\Contacts;
use EugeneErg\DDD\Domain\Models\Openapi\Info\License;

final readonly class Info
{
    public Contacts $contacts;

    public function __construct(
        public string $title,
        public string $version,
        public ?string $description = null,
        public ?string $termsOfService = null,
        ?Contacts $contacts = null,
        public ?License $license = null,
    ) {
        $this->contacts = $contacts ?? new Contacts();
    }
}
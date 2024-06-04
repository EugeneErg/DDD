<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Openapi;

final readonly class Info
{
    public Contacts $contacts;
    public Licenses $licenses;

    public function __construct(
        public string $title,
        public string $version,
        public ?string $description = null,
        public ?string $termsOfService = null,
        ?Contacts $contacts = null,
        ?Licenses $licenses = null,
    ) {
        $this->contacts = $contacts ?? new Contacts();
        $this->licenses = $licenses ?? new Licenses();
    }
}
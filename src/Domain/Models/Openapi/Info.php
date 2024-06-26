<?php

declare(strict_types = 1);

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

    /**
     * @return array{
     *     title: string,
     *     version: string,
     *     description?: string,
     *     contacts?: array{name?: string, url?: string, email?: string},
     *     license?: array{name: string, url?: string},
     *     termsOfService?: string,
     * }
     */
    public function toArray(): array
    {
        $result = [
            'title' => $this->title,
            'version' => $this->version,
        ];

        if ($this->description !== null) {
            $result['description'] = $this->description;
        }

        if (!$this->contacts->isEmpty()) {
            $result['contacts'] = $this->contacts->toArray();
        }

        if ($this->license !== null) {
            $result['license'] = $this->license->toArray();
        }

        if ($this->termsOfService !== null) {
            $result['termsOfService'] = $this->termsOfService;
        }

        return $result;
    }
}

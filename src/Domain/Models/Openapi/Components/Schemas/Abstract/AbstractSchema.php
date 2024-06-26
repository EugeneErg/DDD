<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Domain\Models\Openapi\Components\Schemas\Abstract;

use EugeneErg\DDD\Domain\Models\Openapi\ExternalDocs;

abstract readonly class AbstractSchema
{
    public function __construct(
        public ?string $type = null,
        public ?string $title = null,
        public ?string $description = null,
        public bool $nullable = false,
        public ?Access $access = null,
        public bool $deprecated = false,
        public ?ExternalDocs $externalDocs = null,
        public ?Xml $xml = null,
        public ?AbstractValue $default = null,
    ) {
    }

    /**
     * @return array<'default'|'description'|'externalDocs'|'nullable'|'readOnly'|'title'|'type'|'writeOnly'|'xml', array{
     * }|array{
     *     name?: string,
     *     namespace?: string,
     *     prefix?: string,
     *     attribute?: bool,
     *     wrapped?: bool
     * }|bool|float|int|object{}|string|null>
     */
    public function toArray(): array
    {
        $result = [];

        if ($this->type !== null) {
            $result['type'] = $this->type;
        }

        if ($this->title !== null) {
            $result['title'] = $this->title;
        }

        if ($this->description !== null) {
            $result['description'] = $this->description;
        }

        if ($this->nullable) {
            $result['nullable'] = $this->nullable;
        }

        if ($this->access !== null) {
            $result[$this->access->value] = true;
        }

        if ($this->externalDocs !== null) {
            $result['externalDocs'] = $this->externalDocs;
        }

        if ($this->xml !== null) {
            $result['xml'] = $this->xml->toArray();
        }

        if ($this->default !== null) {
            $result['default'] = $this->default->toNative();
        }

        return $result;
    }
}

<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Domain\Models\Request\Content;

use JsonException;

class JsonParser implements ParserInterface
{
    public function __construct(
        readonly private int $depth = 512,
        readonly private bool $UTF8Ignore = false,
        readonly private bool $UTF8Substitute = false,
        readonly private bool $bigintToString = false,
        readonly private bool $hexQuot = false,
        readonly private bool $hexTag = false,
        readonly private bool $hexAmp = false,
        readonly private bool $hexApos = false,
        readonly private bool $intFromNumericString = false,
        readonly private bool $prettyPrint = false,
        readonly private bool $unescapedSlashes = false,
        readonly private bool $unescapedUnicode = false,
    ) {
    }

    /**
     * @param string $content
     * @return mixed
     */
    public function fromString(string $content): mixed
    {
        try {
            return json_decode($content, true, $this->depth, $this->getDecodeFlags());
        } catch (JsonException $exception) {

        }
    }

    public function toString(mixed $content): string
    {
        try {
            return json_encode($content, $this->getEncodeFlags(), $this->depth);
        } catch (JsonException $exception) {

        }
    }

    /**
     * @throws JsonException
     */
    private function getDecodeFlags(): int
    {
        return JSON_THROW_ON_ERROR | JSON_PRESERVE_ZERO_FRACTION
            | ($this->UTF8Ignore ? JSON_INVALID_UTF8_IGNORE : 0)
            | ($this->UTF8Substitute ? JSON_INVALID_UTF8_SUBSTITUTE : 0)
            | ($this->bigintToString ? JSON_BIGINT_AS_STRING : 0);
    }

    /**
     * @throws JsonException
     */
    private function getEncodeFlags(): int
    {
        return JSON_THROW_ON_ERROR | JSON_PRESERVE_ZERO_FRACTION
            | ($this->UTF8Ignore ? JSON_INVALID_UTF8_IGNORE : 0)
            | ($this->UTF8Substitute ? JSON_INVALID_UTF8_SUBSTITUTE : 0)
            | ($this->hexQuot ? JSON_HEX_QUOT : 0)
            | ($this->hexTag ? JSON_HEX_TAG : 0)
            | ($this->hexAmp ? JSON_HEX_AMP : 0)
            | ($this->hexApos ? JSON_HEX_APOS : 0)
            | ($this->intFromNumericString ? JSON_NUMERIC_CHECK : 0)
            | ($this->prettyPrint ? JSON_PRETTY_PRINT : 0)
            | ($this->unescapedSlashes ? JSON_UNESCAPED_SLASHES : 0)
            | ($this->unescapedUnicode ? JSON_UNESCAPED_UNICODE : 0);
    }
}

<?php

declare(strict_types=1);

namespace Tests;

use EugeneErg\DDD\Domain\Models\Yaml\Yaml;
use PHPUnit\Framework\TestCase;
use stdClass;

final class YamlTest extends TestCase
{
    /**
     * @dataProvider getToStringData
     */
    public function testToString(mixed $value, string $expected): void
    {
        $yaml = new Yaml();

        $actual = $yaml->toString($value);

        self::assertEquals($expected, $actual);
    }

    public static function getToStringData(): array
    {
        return [
            ['t"e\st', "\"t\\\"e\\\\st\"\r\n"],
            [123, "123\r\n"],
            [123.0, "123.0\r\n"],
            [null, "null\r\n"],
            [true, "true\r\n"],
            [false, "false\r\n"],
            [new stdClass, "{}\r\n"],
            [[], "[]\r\n"],
            [[1,2,3], ''],
            [(object) ['a' => 123, 'b' => 321], ''],
        ];
    }
}
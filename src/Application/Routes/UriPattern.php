<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Application\Routes;

class UriPattern
{
    /**
     * @param string $value
     * @param array<string> $parameters
     *
     * @return string
     */
    public static function fromString(string $value, array $parameters = []): string
    {
        $path = explode('/', trim($value, '/'));
        $result = [];

        foreach ($path as $step) {
            $result[] = isset($parameters[$step])
                ? '(?<' . static::equal($step) . '>' . $parameters[$step] . ')'
                : static::equal($step);
        }

        return '{^' . implode('/', $result) . '}';
    }

    public static function length(int $length): string
    {
        return static::lengthSize($length, $length);
    }

    public static function lengthMin(int $min): string
    {
        return static::lengthSize($min);
    }

    public static function lengthMax(int $max): string
    {
        return static::lengthSize(null, $max);
    }

    public static function lengthBetween(int $from, int $to): string
    {
        return static::lengthSize($from, $to);
    }

    /**
     * @param array<string> $values
     */
    public static function in(array $values): string
    {
        return implode('|', array_map(static fn (string $value): string => static::equal($value), $values));
    }

    public static function equal(string $value): string
    {
        return preg_quote($value);
    }

    private static function lengthSize(?int $from = null, ?int $to = null): string
    {
        return '[^/]' . ($from === null && $to === null ? '*' : '{' . ($from === $to ? $from : $from . ',' . $to) . '}');
    }
}

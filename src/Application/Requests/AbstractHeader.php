<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Application\Requests;

use ReflectionClass;
use ReflectionNamedType;

abstract class AbstractHeader implements HeadersInterface
{
    public function getTypes(): array
    {
        $reflection = new ReflectionClass(static::class);
        $constructor = $reflection->getConstructor();
        $result = [];

        if ($constructor === null) {
            return $result;
        }

        foreach ($constructor->getParameters() as $parameter) {
            $type = $parameter->getType();

            if (!$type instanceof ReflectionNamedType) {
                continue;
            }

            $result[$parameter->getName()] = $type->getName();
        }
    }
}

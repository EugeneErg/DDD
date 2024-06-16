<?php

declare(strict_types = 1);

namespace EugeneErg\Example;

use EugeneErg\DDD\Application\Requests\HeadersInterface;

final readonly class Header implements HeadersInterface
{
    public function __construct()
    {
    }

    public static function getNames(): array
    {
        /**
         * Неуказанные аргументы будут пытаться получиться из одноименных заголовков
         * в аргумент перечисления будут по возможности преобразованы остальные заголовки
         * если ключем массива является число, то заголовок преобразуется в аргумент с соответствующим порядковым номером
         */
        return [


        ];
    }
}

<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Application\Middleware;

use Psr\Http\Message\RequestInterface;

interface MiddlewareChangeRequestInterface extends MiddlewareInterface
{
    /**
     * Кастомный реквест через DI получит в конструкторе
     * Данным методом вернет реквест psr
     * Роутер проанализирует запрошенные данные и возвращенные
     * Если данные были запрошены, но не были возвращены, то они удалятся из базового реквеста.
     * Если данные не были запрошены, то они не будут изменены
     * Если данные были запрошены и были возвращены, то они обновятся
     */
    public function changeRequest(): RequestInterface;
}

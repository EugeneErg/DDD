<?php

declare(strict_types=1);

namespace EugeneErg\DDD\Application\Middleware;

use EugeneErg\DDD\Application\Responses\ResponseInterface;

interface MiddlewareRedirectInterface extends MiddlewareInterface
{
    /**
     * Кастомный реквест через DI можно получить в конструкторе
     * Если данный метод вернет реквест, то роутер не пойдет далее, и начнет идти в обратном порядке
     * Если данный метод вернет null, то роутер пойдет далее
     */
    public function redirect(): ?ResponseInterface;
}
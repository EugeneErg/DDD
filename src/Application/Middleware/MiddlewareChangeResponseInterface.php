<?php

declare(strict_types = 1);

namespace EugeneErg\DDD\Application\Middleware;

use EugeneErg\DDD\Application\Responses\ResponseInterface;

interface MiddlewareChangeResponseInterface extends MiddlewareInterface
{
    /**
     * Кастомный реквест через DI можно получить в конструкторе
     * В параметрах придет актуальный респонс из следующего мидлвара
     * в предыдущий мидлвэр попадет реквест, из результата данногом метода
     */
    public function changeResponse(ResponseInterface $response): ResponseInterface;
}

<?php

declare(strict_types=1);

namespace EugeneErg\DDD;

interface RequestInterface
{
    public function getHeaders(): array;
    public function getContent(): string;
    public function getMethod(): string;
    public function getQuery(): string;
    public function getPath(): string;
}
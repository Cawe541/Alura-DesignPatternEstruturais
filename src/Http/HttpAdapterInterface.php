<?php

namespace Alura\DesignPattern\Http;

interface HttpAdapterInterface
{
    public function post(string $url, array $data = []): void;
}

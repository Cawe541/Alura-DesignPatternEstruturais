<?php

namespace Alura\DesignPattern\Http;

class ReactPHPHttpAdapter implements HttpAdapterInterface
{
    public function post(string $url, array $data = []): void
    {
        echo "ReactPHP" . PHP_EOL;
    }
}

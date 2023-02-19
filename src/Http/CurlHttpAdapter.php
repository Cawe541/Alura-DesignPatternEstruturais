<?php

namespace Alura\DesignPattern\Http;

class CurlHttpAdapter implements HttpAdapterInterface
{
    public function post(string $url, array $data = []): void
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_exec($curl);
        curl_close($curl);
    }
}
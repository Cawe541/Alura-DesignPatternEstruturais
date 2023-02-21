<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{DadosExtrinsecosPedido, Orcamento, Pedido};

$pedidos = [];
$dados = new DadosExtrinsecosPedido(md5((string) rand(1, 10000)), new \DateTimeImmutable());

for ($i = 0; $i < 10000; $i++) {
    $pedido = new Pedido();
    $pedido->dados = $dados;
    $orcamento = new Orcamento();

    $pedios[] = $pedido;
}

echo memory_get_peak_usage();

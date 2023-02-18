<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, Pedido};

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$orcamento = new Orcamento();
$orcamento->valor = $valorOrcamento;
$orcamento->quantidadeDeItems = $numeroDeItens;

$pedido = new Pedido();
$pedido->nomeCliente = $nomeCliente;
$pedido->dataFinalizacao = new \DateTimeImmutable();
$pedido->orcamento = $orcamento;

echo "Cria pedido no banco de dados" . PHP_EOL;
echo "Envia e-mail para o cliente" . PHP_EOL;

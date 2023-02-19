<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\Orcamento;

$orcamento1 = new Orcamento();
$orcamento1->quantidadeDeItems = 7;
$orcamento1->valor = 500;
$orcamento1->aprova();

$orcamento2 = new Orcamento();
$orcamento2->quantidadeDeItems = 3;
$orcamento2->valor = 1535;
$orcamento2->aprova();

$orcamento3 = new Orcamento();
$orcamento3->quantidadeDeItems = 5;
$orcamento3->valor = 1350.90;
$orcamento3->aprova();

$listaorcamento = [
    $orcamento1,
    $orcamento2,
    $orcamento3,
    'teste'
];

foreach ($listaorcamento as $orcamento) {
    echo "Valor: " . $orcamento->valor . PHP_EOL;
    echo "Quantidade de itens: " . $orcamento->quantidadeDeItems . PHP_EOL;
    echo "Estado: " . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo "-----------------" . PHP_EOL;
}

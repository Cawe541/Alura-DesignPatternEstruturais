<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, ItemOrcamento};

$orcamento = new Orcamento();
$orcamento->adicionaItem(new ItemOrcamento(500));
$orcamentoAntigo = new Orcamento();
$orcamentoAntigo->adicionaItem(new ItemOrcamento(300));
$orcamentoMaisAntigoAinda = new Orcamento();
$orcamentoMaisAntigoAinda->adicionaItem(new ItemOrcamento(200));
$orcamentoAntigo->adicionaItem($orcamentoMaisAntigoAinda);
$orcamento->adicionaItem($orcamentoAntigo);

echo $orcamento->valor() . PHP_EOL;
echo $orcamento->valor() . PHP_EOL;

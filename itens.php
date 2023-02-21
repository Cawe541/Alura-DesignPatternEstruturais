<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{CacheOrcamentoProxy, Orcamento, ItemOrcamento};

$orcamento = new Orcamento();
$orcamento->adicionaItem(new ItemOrcamento(500));
$orcamentoAntigo = new Orcamento();
$orcamentoAntigo->adicionaItem(new ItemOrcamento(300));
$orcamentoMaisAntigoAinda = new Orcamento();
$orcamentoMaisAntigoAinda->adicionaItem(new ItemOrcamento(200));
$orcamentoAntigo->adicionaItem($orcamentoMaisAntigoAinda);
$orcamento->adicionaItem($orcamentoAntigo);

$proxyCache = new CacheOrcamentoProxy($orcamento);

echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
echo $proxyCache->valor() . PHP_EOL;
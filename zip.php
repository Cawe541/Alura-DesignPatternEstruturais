<?php

require_once 'vendor/autoload.php';

$orcamentoZip = new Alura\DesignPattern\Relatorio\OrcamentoZip();
$orcamento = new Alura\DesignPattern\Orcamento();
$orcamento->valor = 100;

$orcamentoZip->exportar($orcamento);

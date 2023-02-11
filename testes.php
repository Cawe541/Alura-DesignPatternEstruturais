<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->valor = 200;
$orcamento->quantidadeDeItems = 5;
echo $calculadora->calculaDescontos($orcamento);

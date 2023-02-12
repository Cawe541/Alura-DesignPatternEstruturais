<?php

use Alura\DesignPattern\CalculadoraDeDescontos;
use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Impostos\Iss;

require 'vendor/autoload.php';

$calculadora = new CalculadoraDeDescontos();
$orcamento = new Orcamento();
$orcamento->valor = 700;
$orcamento->quantidadeDeItems = 7;
echo $calculadora->calculaDescontos($orcamento);

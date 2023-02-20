<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{Orcamento, ItemOrcamento};

$orcamento = new Orcamento();
$orcamento->adicionaItem(new ItemOrcamento(500));
$orcamento->adicionaItem(new ItemOrcamento(300));

echo $orcamento->valor();

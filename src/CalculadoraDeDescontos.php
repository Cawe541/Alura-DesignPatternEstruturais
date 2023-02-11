<?php

namespace Alura\DesignPattern;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        return $orcamento->quantidadeDeItems > 5 ? $orcamento->valor * 0.1 : 0;
    }
}

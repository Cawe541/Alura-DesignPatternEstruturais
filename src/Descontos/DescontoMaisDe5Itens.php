<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDe5Itens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        return $orcamento->quantidadeDeItems > 5 ? $orcamento->valor * 0.1 : $this->proximoDesconto->calculaDesconto($orcamento);
    }
}

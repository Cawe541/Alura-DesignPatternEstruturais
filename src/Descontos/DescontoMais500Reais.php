<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoMais500Reais extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        return $orcamento->valor > 500 ? $orcamento->valor * 0.05 : $this->proximoDesconto->calculaDesconto($orcamento);
    }
}

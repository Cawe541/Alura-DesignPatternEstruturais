<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\Desconto;
use Alura\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\Descontos\DescontoMais500Reais;
use Alura\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $correnteDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMais500Reais(
                new SemDesconto()
            )
        );

        $descontoCalculado = $correnteDeDescontos->calculaDesconto($orcamento);
        $logDesconto = new LogDesconto();
        $logDesconto->informar($descontoCalculado);
        return $descontoCalculado;
    }
}

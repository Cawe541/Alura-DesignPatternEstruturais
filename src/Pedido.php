<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern;

class Pedido
{
    public string $nomeCliente;
    public \DateTimeInterface $dataFinalizacao;
    public Orcamento $orcamento;
}

<?php

namespace Alura\DesignPattern;

class DadosExtrinsecosPedido
{
    public function __construct(private string $nomeCliente, private \DateTimeInterface $dataFinalizacao)
    {
    }

    public function nomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function dataFinalizacao(): \DateTimeInterface
    {
        return $this->dataFinalizacao;
    }
}

<?php

namespace Alura\DesignPattern;

class ListaDeOrcamentos implements \IteratorAggregate
{
    private array $orcamentos;

    public function __construct()
    {
        $this->orcamentos = [];
    }

    public function orcamentos(): array
    {
        return $this->orcamentos;
    }

    public function adicionaOrcamento(Orcamento $orcamento): void
    {
        $this->orcamentos[] = $orcamento;
    }

    public function getIterator(): \Iterator
    {
        return new \ArrayIterator($this->orcamentos);
    }
}

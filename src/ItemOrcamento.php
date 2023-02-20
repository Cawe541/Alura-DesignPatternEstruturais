<?php

namespace Alura\DesignPattern;

class ItemOrcamento implements Orcavel
{
    public function __construct(public float $valor)
    {
    }

    public function valor(): float
    {
        return $this->valor;
    }
}

<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;
use SplObserver;

class EnviarPedidoPorEmail implements SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo $pedido->pedido->nomeCliente;
        echo "Enviando email de pedido gerado" . PHP_EOL;
    }
}

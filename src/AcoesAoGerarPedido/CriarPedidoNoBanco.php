<?php

namespace Alura\DesignPattern\AcoesAoGerarPedido;

use Alura\DesignPattern\Pedido;
use SplObserver;

class CriarPedidoNoBanco implements SplObserver
{
    public function update(\SplSubject $pedido): void
    {
        echo "Cria pedido no banco de dados" . PHP_EOL;
    }
}

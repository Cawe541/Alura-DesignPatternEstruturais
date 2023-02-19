<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Pedido;

class PedidoExportado implements ConteudoExportadoInterface
{

    public function __construct(private Pedido $pedido)
    {
    }

    public function conteudo(): array
    {
        return [
            'data_finalizacao' => $this->pedido->dataFinalizacao->format('d/m/Y H:i:s'),
            'nome_cliente' => $this->pedido->nomeCliente,
        ];
    }
}

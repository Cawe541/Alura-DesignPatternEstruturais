<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\{Orcamento, Pedido};

class GerarPedido implements CommandInterface
{
    private float $valorOrcamento;
    private int $numeroItens;
    private string $nomeCliente;

    public function __construct(float $valorOrcamento, int $numeroItens, string $nomeCliente)
    {
        $this->valorOrcamento = $valorOrcamento;
        $this->numeroItens = $numeroItens;
        $this->nomeCliente = $nomeCliente;
    }

    public function execute()
    {
        $orcamento = new Orcamento();
        $orcamento->valor = $this->valorOrcamento;
        $orcamento->quantidadeDeItems = $this->numeroItens;

        $pedido = new Pedido();
        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->orcamento = $orcamento;

        echo "Cria pedido no banco de dados" . PHP_EOL;
        echo "Envia e-mail para o cliente" . PHP_EOL;
    }
}

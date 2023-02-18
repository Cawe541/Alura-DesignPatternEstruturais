<?php

namespace Alura\DesignPattern;

class GerarPedidoHandler
{
    public function __construct(/*PedidoRepository, MailService*/)
    {
    }

    public function execute(GerarPedido $gerarpedido)
    {
        $orcamento = new Orcamento();
        $orcamento->valor = $gerarpedido->getValorOrcamento();
        $orcamento->quantidadeDeItems = $gerarpedido->getNumeroItens();

        $pedido = new Pedido();
        $pedido->nomeCliente = $gerarpedido->getNomeCliente();
        $pedido->dataFinalizacao = new \DateTimeImmutable();
        $pedido->orcamento = $orcamento;

        // PedidoRepository
        echo "Cria pedido no banco de dados" . PHP_EOL;
        // MailService
        echo "Envia e-mail para o cliente" . PHP_EOL;
    }
}

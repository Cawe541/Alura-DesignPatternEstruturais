<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

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

        $pedidoRepository = new CriarPedidoNoBanco();
        $logGeararPedido =  new LogGerarPedido();
        $enviarPedidoPorEmail = new EnviarPedidoPorEmail();

        $pedidoRepository->executaAcao($pedido);
        $logGeararPedido->executaAcao($pedido);
        $enviarPedidoPorEmail->executaAcao($pedido);
    }
}

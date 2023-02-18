<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\AcoesAoGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPattern\AcoesAoGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesAoGerarPedido\LogGerarPedido;

class GerarPedidoHandler
{
    private array $acoesAoGerarPedido = [];

    public function __construct(/*PedidoRepository, MailService*/)
    {
    }

    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAoGerarPedido[] = $acao;
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

        foreach ($this->acoesAoGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}

<?php

namespace Alura\DesignPattern;

use SplObserver;
use SplSubject;

class GerarPedidoHandler implements SplSubject
{
    private array $acoesAoGerarPedido = [];
    public Pedido $pedido;

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

        $this->pedido = $pedido;
        $this->notify();
    }

    public function attach(SplObserver $observer): void
    {
        $this->acoesAoGerarPedido[] = $observer;
    }

    public function detach(SplObserver $observer): void
    {
        //
    }

    public function notify(): void
    {
        foreach ($this->acoesAoGerarPedido as $acao) {
            $acao->update($this);
        }
    }
}

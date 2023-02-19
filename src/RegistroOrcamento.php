<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\EstadosOrcamento\Finalizado;
use Alura\DesignPattern\Http\HttpAdapterInterface;

class RegistroOrcamento
{

    public function __construct(private HttpAdapterInterface $http)
    {
    }

    public function registrar(Orcamento $orcamento): void
    {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new \DomainException('Apenas orçamentos finalizados podem ser registrados na API');
        }
        $this->http->post('http://api.registrar.orcamento', [
            'valor' => $orcamento->valor,
            'quantidadeItens' => $orcamento->quantidadeDeItems
        ]);
    }
}

<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;
use Alura\DesignPattern\Relatorio\{OrcamentoExportado, PedidoExportado};
use Alura\DesignPattern\Relatorio\{ArquivoXmlExportado, ArquivoZipExportado};

$pedido = new Pedido();
$pedido->nomeCliente = 500;
$pedido->dataFinalizacao = new DateTimeImmutable();

$pedidoExportado = new PedidoExportado($pedido);
$pedidoExportadoZip = new ArquivoZipExportado('pedido');

echo $pedidoExportadoZip->salvar($pedidoExportado);

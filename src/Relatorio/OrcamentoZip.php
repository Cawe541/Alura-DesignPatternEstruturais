<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Orcamento;

class OrcamentoZip
{
    public function exportar(Orcamento $orcamento)
    {

        $caminhoArquivo = sys_get_temp_dir() . DIRECTORY_SEPARATOR . uniqid('orcamento', true) . '.zip';
        $arquivoZip = new \ZipArchive();
        $arquivoZip->open($caminhoArquivo, \ZipArchive::CREATE);
        $arquivoZip->addFromString('orcamento.calopsita', serialize($orcamento));
        $arquivoZip->close();
    }
}

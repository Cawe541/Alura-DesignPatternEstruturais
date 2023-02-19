<?php

namespace Alura\DesignPattern\Relatorio;

class ArquivoZipExportado implements ArquivoExportadoInterface
{
    public function __construct(private string $nomeArquivo)
    {
    }

    public function salvar(ConteudoExportadoInterface $conteudoExportado): string
    {
        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'zip');
        $arquivoZip = new \ZipArchive();
        $arquivoZip->open($caminhoArquivo, \ZipArchive::CREATE);
        $arquivoZip->addFromString($this->nomeArquivo, json_encode($conteudoExportado->conteudo()));
        $arquivoZip->close();
        return $caminhoArquivo;
    }
}

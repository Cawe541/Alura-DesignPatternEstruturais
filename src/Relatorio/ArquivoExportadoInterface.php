<?php

namespace Alura\DesignPattern\Relatorio;

interface ArquivoExportadoInterface
{
    public function salvar(ConteudoExportadoInterface $conteudoExportado): string;
}

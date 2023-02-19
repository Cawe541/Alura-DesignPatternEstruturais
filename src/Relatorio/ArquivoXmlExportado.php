<?php

namespace Alura\DesignPattern\Relatorio;

class ArquivoXmlExportado implements ArquivoExportadoInterface
{
    public function __construct(private string $nomeElementoPai)
    {
    }

    public function salvar(ConteudoExportadoInterface $conteudoExportado): string
    {
        $elementoXml = new \SimpleXMLElement("<{$this->nomeElementoPai}/>");
        foreach ($conteudoExportado->conteudo() as $item => $valor) {
            $elementoXml->addChild($item, $valor);
        }

        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'xml');
        $elementoXml->asXML($caminhoArquivo);
        return $caminhoArquivo;
    }
}

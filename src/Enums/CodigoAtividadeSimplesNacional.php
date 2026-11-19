<?php

namespace Nfse\Enums;

/**
 * Código da atividade do Simples Nacional (cAtvSN).
 *
 * Baseado na NT 009/2026 e na LC 123/2006.
 */
final class CodigoAtividadeSimplesNacional
{
    const ServicosAnexoIII = '7';
    const ServicosContabeisIssFixo = '8';
    const ServicosFatorR = '9';
    const TransporteMunicipal = '10';
    const LocacaoBensMoveisSemIss = '11';
    const ConstrucaoCivilAnexoIII = '12';
    const ConstrucaoCivilAnexoIV = '13';
    const ServicosAnexoIV = '14';
    const OperacoesNaoTributadas = '90';

    private function __construct()
    {
    }

    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
            switch ($this) {
                case self::ServicosAnexoIII:
                    return 'Prestação de serviços, cessão de direitos, de uso ou de espaço com incidência do ISS, tributados exclusivamente pelo Anexo III';
                case self::ServicosContabeisIssFixo:
                    return 'Prestação de serviços contábeis autorizados a pagar o ISS em valor fixo em guia do Município - Anexo III';
                case self::ServicosFatorR:
                    return 'Prestação de serviços sujeitos ao Fator R - Anexo III ou V';
                case self::TransporteMunicipal:
                    return 'Prestação de serviços de transporte municipal rodoviário, metroviário, ferroviário e aquaviário de passageiros relacionados no subitem 16.01 da LC 116/2003 - Anexo III';
                case self::LocacaoBensMoveisSemIss:
                    return 'Locação de bens móveis e operações com serviços, bens imateriais e direitos, inclusive com bens imóveis, sem incidência de ISS - Anexo III';
                case self::ConstrucaoCivilAnexoIII:
                    return 'Prestação de serviços da área da construção civil relacionados nos subitens 7.02 e 7.05 da LC 116/2003 - Anexo III';
                case self::ConstrucaoCivilAnexoIV:
                    return 'Prestação de serviços da área da construção civil relacionados nos subitens 7.02 e 7.05 da LC 116/2003 - Anexo IV';
                case self::ServicosAnexoIV:
                    return 'Prestação de serviços - Anexo IV';
                case self::OperacoesNaoTributadas:
                    return 'Operações não tributadas';
            }
        }));
    }

    /**
     * Get label (alias for getDescription)
     */
    public function label(): string
    {
        return $this->getDescription();
    }
}

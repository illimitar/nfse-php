<?php

namespace Nfse\Enums;

/**
 * Tipo de ajuste da base de cálculo do ISSQN e/ou IBS/CBS.
 *
 * Baseado no schema: TSRTCTpAjusteBC
 */
final class TipoAjusteBaseCalculo
{
    const Materiais = '2';
    const RepasseConsorciado = '5';
    const RepassePlanoSaude = '6';
    const Servicos = '7';
    const SubempreitadaMaoObra = '8';
    const ProfissionalParceiro = '9';
    const OutrasDeducoes = '99';
    const RepasseIntermediacaoImoveis = '101';
    const RepasseAgenciaTurismo = '102';
    const ReembolsoProducaoExterna = '103';
    const ReembolsoMidia = '104';
    const GlosaServicosSaude = '105';
    const OutrosReembolsos = '199';

    private function __construct()
    {
    }

    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        switch ($this) {
            case self::Materiais:
                return 'Materiais';
            case self::RepasseConsorciado:
                return 'Repasse consorciado';
            case self::RepassePlanoSaude:
                return 'Repasse plano de saúde';
            case self::Servicos:
                return 'Serviços';
            case self::SubempreitadaMaoObra:
                return 'Subempreitada de mão de obra';
            case self::ProfissionalParceiro:
                return 'Profissional parceiro';
            case self::OutrasDeducoes:
                return 'Outras deduções exclusivas do ISSQN';
            case self::RepasseIntermediacaoImoveis:
                return 'Repasse de remuneração por intermediação de imóveis a demais corretores';
            case self::RepasseAgenciaTurismo:
                return 'Repasse de valores a fornecedor relativo a fornecimento intermediado por agência de turismo';
            case self::ReembolsoProducaoExterna:
                return 'Reembolso ou ressarcimento de serviços de produção externa por conta e ordem de terceiro';
            case self::ReembolsoMidia:
                return 'Reembolso ou ressarcimento de serviços de mídia por conta e ordem de terceiro';
            case self::GlosaServicosSaude:
                return 'Glosa de serviços de saúde';
            case self::OutrosReembolsos:
                return 'Outros reembolsos ou ressarcimentos recebidos por valores pagos por conta e ordem de terceiro';
        }
    }

    /**
     * Get label (alias for getDescription)
     */
    public function label(): string
    {
        return $this->getDescription();
    }
}

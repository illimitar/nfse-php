<?php

namespace Nfse\Enums;

/**
 * Tipo de dedução/redução
 *
 * Baseado no schema: TSIdeDedRed
 */
final class TipoDeducaoReducao
{
    const AlimentacaoBebidas = '1';
    const Materiais = '2';
    const ProducaoExterna = '3';
    const ReembolsoDespesas = '4';
    const RepasseConsorciado = '5';
    const RepassePlanoSaude = '6';
    const Servicos = '7';
    const SubempreitadaMaoObra = '8';
    const ProfissionalParceiro = '9';
    const OutrasDeducoes = '99';

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
                case self::AlimentacaoBebidas:
                    return 'Alimentação e bebidas/frigobar';
                case self::Materiais:
                    return 'Materiais';
                case self::ProducaoExterna:
                    return 'Produção Externa';
                case self::ReembolsoDespesas:
                    return 'Reembolso de despesas';
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
                    return 'Outras deduções';
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

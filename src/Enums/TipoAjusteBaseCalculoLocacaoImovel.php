<?php

namespace Nfse\Enums;

/**
 * Tipo de parcela que não entra na base de cálculo do IBS e da CBS da locação.
 *
 * Baseado no schema: TSAjusteBCLocImoveis
 */
final class TipoAjusteBaseCalculoLocacaoImovel
{
    const Tributos = '01';
    const Emolumento = '02';
    const Condominio = '03';
    const RedutorSocial = '04';
    const OutrasParcelas = '99';

    private function __construct()
    {
    }

    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        switch ($this) {
            case self::Tributos:
                return 'Tributos inclusos no aluguel ou equivalente';
            case self::Emolumento:
                return 'Emolumento incluso no aluguel ou equivalente';
            case self::Condominio:
                return 'Condomínio incluso no aluguel ou equivalente';
            case self::RedutorSocial:
                return 'Redutor social';
            case self::OutrasParcelas:
                return 'Outras parcelas inclusas no aluguel ou equivalente';
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

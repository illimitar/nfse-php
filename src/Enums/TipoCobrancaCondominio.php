<?php

namespace Nfse\Enums;

/**
 * Tipo da cobrança das taxas e demais valores condominiais.
 *
 * Baseado no schema: TSRTCTpCobranca
 */
final class TipoCobrancaCondominio
{
    const CondominioOrdinario = '01';
    const CondominioPrivativo = '02';
    const FundoPromocaoPropaganda = '03';
    const ImpostosTaxas = '04';
    const FundoReserva = '05';
    const OutraCobranca = '99';

    private function __construct()
    {
    }

    public function getDescription(): string
    {
        switch ($this) {
            case self::CondominioOrdinario:
                return 'Condomínio Ordinário';
            case self::CondominioPrivativo:
                return 'Condomínio Privativo';
            case self::FundoPromocaoPropaganda:
                return 'Fundo De Promoção E Propaganda (FPP)';
            case self::ImpostosTaxas:
                return 'Impostos e Taxas';
            case self::FundoReserva:
                return 'Fundo de Reserva';
            case self::OutraCobranca:
                return 'Outra Cobrança';
        }
    }

    public function label(): string
    {
        return $this->getDescription();
    }
}

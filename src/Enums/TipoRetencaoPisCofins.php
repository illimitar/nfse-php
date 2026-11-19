<?php

namespace Nfse\Enums;

/**
 * Tipo de Retenção do PIS/COFINS e CSLL
 */
final class TipoRetencaoPisCofins
{
    const NaoRetidos = 0;
    const PisCofinsRetido = 1;
    const PisCofinsNaoRetido = 2;
    const Retidos = 3;
    const PisCofinsRetidosCsllNaoRetido = 4;
    const PisRetidoCofinsCsllNaoRetido = 5;
    const CofinsRetidoPisCsllNaoRetido = 6;
    const PisNaoRetidoCofinsCsllRetidos = 7;
    const PisCofinsNaoRetidosCsllRetido = 8;
    const CofinsNaoRetidoPisCsllRetidos = 9;

    private function __construct()
    {
    }

    /**
     * PIS/COFINS/CSLL Não Retidos
     */
    /**
     * PIS/COFINS Retido
     */
    /**
     * PIS/COFINS Não Retido
     */
    /**
     * PIS/COFINS/CSLL Retidos
     */
    /**
     * PIS/COFINS Retidos, CSLL Não Retido
     */
    /**
     * PIS Retido, COFINS/CSLL Não Retido
     */
    /**
     * COFINS Retido, PIS/CSLL Não Retido
     */
    /**
     * PIS Não Retido, COFINS/CSLL Retidos
     */
    /**
     * PIS/COFINS Não Retidos, CSLL Retido
     */
    /**
     * COFINS Não Retido, PIS/CSLL Retidos
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::NaoRetidos:
        return 'PIS/COFINS/CSLL Não Retidos';
    case self::PisCofinsRetido:
        return 'PIS/COFINS Retido';
    case self::PisCofinsNaoRetido:
        return 'PIS/COFINS Não Retido';
    case self::Retidos:
        return 'PIS/COFINS/CSLL Retidos';
    case self::PisCofinsRetidosCsllNaoRetido:
        return 'PIS/COFINS Retidos, CSLL Não Retido';
    case self::PisRetidoCofinsCsllNaoRetido:
        return 'PIS Retido, COFINS/CSLL Não Retido';
    case self::CofinsRetidoPisCsllNaoRetido:
        return 'COFINS Retido, PIS/CSLL Não Retido';
    case self::PisNaoRetidoCofinsCsllRetidos:
        return 'PIS Não Retido, COFINS/CSLL Retidos';
    case self::PisCofinsNaoRetidosCsllRetido:
        return 'PIS/COFINS Não Retidos, CSLL Retido';
    case self::CofinsNaoRetidoPisCsllRetidos:
        return 'COFINS Não Retido, PIS/CSLL Retidos';
    }
}));
    }

    public function label(): string
    {
        return $this->getDescription();
    }

    /**
     * Verifica se PIS é retido neste tipo de retenção.
     *
     * NT 007/2026: quando retido, o valor de PIS deve ser consolidado
     * no campo vRetCSLL da DPS.
     */
    public function isRetidoPis(): bool
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::PisCofinsRetido:
    case self::Retidos:
    case self::PisCofinsRetidosCsllNaoRetido:
    case self::PisRetidoCofinsCsllNaoRetido:
    case self::CofinsNaoRetidoPisCsllRetidos:
        return true;
    default:
        return false;
    }
}));
    }

    /**
     * Verifica se COFINS é retido neste tipo de retenção.
     *
     * NT 007/2026: quando retido, o valor de COFINS deve ser consolidado
     * no campo vRetCSLL da DPS.
     */
    public function isRetidoCofins(): bool
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::PisCofinsRetido:
    case self::Retidos:
    case self::PisCofinsRetidosCsllNaoRetido:
    case self::CofinsRetidoPisCsllNaoRetido:
    case self::PisNaoRetidoCofinsCsllRetidos:
        return true;
    default:
        return false;
    }
}));
    }

    /**
     * Verifica se CSLL é retida neste tipo de retenção.
     *
     * NT 007/2026: quando retida, o valor de CSLL deve ser informado
     * no campo vRetCSLL da DPS (consolidado com PIS/COFINS retidos).
     */
    public function isRetidoCsll(): bool
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::Retidos:
    case self::PisNaoRetidoCofinsCsllRetidos:
    case self::PisCofinsNaoRetidosCsllRetido:
    case self::CofinsNaoRetidoPisCsllRetidos:
        return true;
    default:
        return false;
    }
}));
    }
}

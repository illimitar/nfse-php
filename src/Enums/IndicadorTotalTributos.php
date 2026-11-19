<?php

namespace Nfse\Enums;

/**
 * Indicador de informação de valor total de tributos
 */
final class IndicadorTotalTributos
{
    const Nenhum = 0;
    const Lei12741 = 1;
    const SemInformacao = 2;

    private function __construct()
    {
    }

    /**
     * Nenhum
     */
    /**
     * Valor total aproximado dos tributos federais, estaduais e municipais (Lei 12.741/12)
     */
    /**
     * Sem informação de tributos totais
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::Nenhum:
        return 'Nenhum';
    case self::Lei12741:
        return 'Valor total aproximado dos tributos federais, estaduais e municipais (Lei 12.741/12)';
    case self::SemInformacao:
        return 'Sem informação de tributos totais';
    }
}));
    }

    public function label(): string
    {
        return $this->getDescription();
    }
}

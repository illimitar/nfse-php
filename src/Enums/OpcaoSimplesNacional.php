<?php

namespace Nfse\Enums;

/**
 * Opção pelo Simples Nacional
 *
 * Baseado no schema: TSOpSimpNac
 */
final class OpcaoSimplesNacional
{
    const NaoOptante = '1';
    const Mei = '2';
    const MeEpp = '3';

    private function __construct()
    {
    }

    /**
     * Não Optante
     */
    /**
     * Optante - Microempreendedor Individual (MEI)
     */
    /**
     * Optante - Microempresa ou Empresa de Pequeno Porte (ME/EPP)
     */
    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::NaoOptante:
        return 'Não Optante';
    case self::Mei:
        return 'Optante - Microempreendedor Individual (MEI)';
    case self::MeEpp:
        return 'Optante - Microempresa ou Empresa de Pequeno Porte (ME/EPP)';
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

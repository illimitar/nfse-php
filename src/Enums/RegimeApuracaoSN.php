<?php

namespace Nfse\Enums;

/**
 * Regime de apuração dos tributos (SN)
 *
 * Baseado no schema: TSRegApTribSN
 */
final class RegimeApuracaoSN
{
    const SimplesNacional = '1';
    const Normal = '2';
    const MicroempreendedorIndividual = '3';

    private function __construct()
    {
    }

    /**
     * Regime de apuração dos tributos federais e municipal pelo SN
     */
    /**
     * Regime de apuração dos tributos federais pelo SN e municipal pelo regime normal (ISSQN)
     */
    /**
     * Regime de apuração dos tributos pelo SN (MEI)
     */
    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::SimplesNacional:
        return 'Regime de apuração dos tributos federais e municipal pelo SN';
    case self::Normal:
        return 'Regime de apuração dos tributos federais pelo SN e municipal pelo regime normal (ISSQN)';
    case self::MicroempreendedorIndividual:
        return 'Regime de apuração dos tributos pelo SN (MEI)';
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

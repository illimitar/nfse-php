<?php

namespace Nfse\Enums;

/**
 * Regime de apuração do IBS e da CBS para optantes do Simples Nacional.
 *
 * Baseado na NT 009/2026, campo regApIBSCBSSN.
 */
final class RegimeApuracaoIbsCbsSn
{
    /** IBS e CBS apurados pelo Simples Nacional. */
    const SimplesNacional = '1';

    /** CBS apurada pelo Simples Nacional e IBS pelo regime regular. */
    const CbsSimplesIbsRegular = '2';

    /** IBS e CBS apurados pelo regime regular. */
    const RegimeRegular = '3';

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
                case self::SimplesNacional:
                    return 'IBS e CBS apurados pelo Simples Nacional';
                case self::CbsSimplesIbsRegular:
                    return 'CBS apurada pelo Simples Nacional e IBS pelo regime regular';
                case self::RegimeRegular:
                    return 'IBS e CBS apurados pelo regime regular';
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

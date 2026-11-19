<?php

namespace Nfse\Enums;

/**
 * Processo de Emissão da DPS
 *
 * Baseado no schema: TSProcEmissao
 */
final class ProcessoEmissao
{
    const WebService = '1';
    const WebFisco = '2';
    const AppFisco = '3';

    private function __construct()
    {
    }

    /**
     * Emissão com aplicativo do contribuinte (via Web Service)
     */
    /**
     * Emissão com aplicativo disponibilizado pelo fisco (Web)
     */
    /**
     * Emissão com aplicativo disponibilizado pelo fisco (App)
     */
    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::WebService:
        return 'Emissão com aplicativo do contribuinte (via Web Service)';
    case self::WebFisco:
        return 'Emissão com aplicativo disponibilizado pelo fisco (Web)';
    case self::AppFisco:
        return 'Emissão com aplicativo disponibilizado pelo fisco (App)';
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

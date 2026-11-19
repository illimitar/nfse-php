<?php

namespace Nfse\Enums;

/**
 * Tipo de Ambiente do Sistema Nacional NFS-e
 *
 * Baseado no schema: TSTipoAmbiente
 */
final class TipoAmbiente
{
    const Producao = '1';
    const Homologacao = '2';

    private function __construct()
    {
    }

    /**
     * Produção
     */
    /**
     * Homologação
     */
    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::Producao:
        return 'Produção';
    case self::Homologacao:
        return 'Homologação';
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

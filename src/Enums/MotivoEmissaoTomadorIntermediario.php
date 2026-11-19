<?php

namespace Nfse\Enums;

/**
 * Motivo da emissão da DPS pelo Tomador ou Intermediário
 *
 * Baseado no schema: TSMotivoEmisTI
 */
final class MotivoEmissaoTomadorIntermediario
{
    const Rejeicao = '4';

    private function __construct()
    {
    }

    /**
     * Rejeição de NFS-e emitida pelo prestador
     */
    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::Rejeicao:
        return 'Rejeição de NFS-e emitida pelo prestador';
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

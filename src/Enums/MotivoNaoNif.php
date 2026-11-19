<?php

namespace Nfse\Enums;

/**
 * Motivo da não informação do NIF
 *
 * Baseado no schema: TSCNaoNIF
 */
final class MotivoNaoNif
{
    const Dispensado = '1';
    const NaoExigencia = '2';

    private function __construct()
    {
    }

    /**
     * Dispensado do NIF
     */
    /**
     * Não exigência do NIF
     */
    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::Dispensado:
        return 'Dispensado do NIF';
    case self::NaoExigencia:
        return 'Não exigência do NIF';
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

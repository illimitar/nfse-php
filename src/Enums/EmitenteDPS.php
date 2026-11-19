<?php

namespace Nfse\Enums;

/**
 * Emitente da DPS
 *
 * Baseado no schema: TSEmitenteDPS
 */
final class EmitenteDPS
{
    const Prestador = '1';
    const Tomador = '2';
    const Intermediario = '3';

    private function __construct()
    {
    }

    /**
     * Prestador
     */
    /**
     * Tomador
     */
    /**
     * Intermediário
     */
    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::Prestador:
        return 'Prestador';
    case self::Tomador:
        return 'Tomador';
    case self::Intermediario:
        return 'Intermediário';
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

<?php

namespace Nfse\Enums;

/**
 * Tipo de Pessoa (Física ou Jurídica)
 */
final class TipoPessoa
{
    const Juridica = 1;
    const Fisica = 2;

    private function __construct()
    {
    }

    /**
     * Pessoa Jurídica
     */
    /**
     * Pessoa Física
     */
    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::Juridica:
        return 'Pessoa Jurídica';
    case self::Fisica:
        return 'Pessoa Física';
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

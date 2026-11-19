<?php

namespace Nfse\Enums;

/**
 * Ambiente Gerador da NFS-e
 *
 * Baseado no schema: TSAmbGer
 */
final class AmbienteGerador
{
    const Municipio = '1';
    const SefinNacional = '2';

    private function __construct()
    {
    }

    /**
     * Sistema Próprio do Município
     */
    /**
     * Sefin Nacional
     */
    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::Municipio:
        return 'Sistema Próprio do Município';
    case self::SefinNacional:
        return 'Sefin Nacional';
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

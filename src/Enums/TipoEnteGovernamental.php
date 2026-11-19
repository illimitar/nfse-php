<?php

namespace Nfse\Enums;

/**
 * Tipo de ente governamental, para administração pública direta e suas autarquias e fundações
 */
final class TipoEnteGovernamental
{
    const Uniao = 1;
    const Estado = 2;
    const DistritoFederal = 3;
    const Municipio = 4;

    private function __construct()
    {
    }

    /**
     * União
     */
    /**
     * Estado
     */
    /**
     * Distrito Federal
     */
    /**
     * Município
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::Uniao:
        return 'União';
    case self::Estado:
        return 'Estado';
    case self::DistritoFederal:
        return 'Distrito Federal';
    case self::Municipio:
        return 'Município';
    }
}));
    }

    public function label(): string
    {
        return $this->getDescription();
    }
}

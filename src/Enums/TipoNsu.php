<?php

namespace Nfse\Enums;

/**
 * Tipo de NSU para consulta no ADN
 */
final class TipoNsu
{
    const Recepcao = 'RECEPCAO';
    const Distribuicao = 'DISTRIBUICAO';
    const Geral = 'GERAL';
    const Mei = 'MEI';

    private function __construct()
    {
    }

    /**
     * Recepção
     */
    /**
     * Distribuição
     */
    /**
     * Geral
     */
    /**
     * MEI
     */
    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::Recepcao:
        return 'Recepção';
    case self::Distribuicao:
        return 'Distribuição';
    case self::Geral:
        return 'Geral';
    case self::Mei:
        return 'MEI';
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

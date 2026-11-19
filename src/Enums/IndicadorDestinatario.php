<?php

namespace Nfse\Enums;

/**
 * Indicador a respeito do destinatário dos serviços
 */
final class IndicadorDestinatario
{
    const DestinatarioTomador = 0;
    const DestinatarioDiverso = 1;

    private function __construct()
    {
    }

    /**
     * O destinatário é o próprio tomador/adquirente identificado na NFS-e
     * (tomador = adquirente = destinatário)
     */
    /**
     * O destinatário não é o próprio adquirente, podendo ser outra pessoa, física ou
     * jurídica (ou equiparada), ou um estabelecimento diferente do indicado como tomador
     * (tomador = adquirente ≠ destinatário)
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::DestinatarioTomador:
        return 'O destinatário é o próprio tomador/adquirente';
    case self::DestinatarioDiverso:
        return 'O destinatário não é o próprio adquirente';
    }
}));
    }

    public function label(): string
    {
        return $this->getDescription();
    }
}

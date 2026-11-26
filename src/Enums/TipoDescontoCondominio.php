<?php

namespace Nfse\Enums;

/**
 * Tipo do desconto aplicado pelo condomínio.
 *
 * Baseado no schema: TSRTCTpDesconto
 */
final class TipoDescontoCondominio
{
    const DescontoIncondicionado = '1';
    const DescontoCondicionado = '2';

    private function __construct()
    {
    }

    public function getDescription(): string
    {
        switch ($this) {
            case self::DescontoIncondicionado:
                return 'Desconto Incondicionado';
            case self::DescontoCondicionado:
                return 'Desconto Condicionado';
        }
    }

    public function label(): string
    {
        return $this->getDescription();
    }
}

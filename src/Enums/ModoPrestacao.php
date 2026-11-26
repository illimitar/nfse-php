<?php

namespace Nfse\Enums;

/**
 * Modo de Prestação do Serviço (Comércio Exterior)
 *
 * Baseado no schema: TSModoPrestacao
 */
final class ModoPrestacao
{
    const Desconhecido = '0';
    const Transfronteirico = '1';
    const ConsumoNoBrasil = '2';
    const MovimentoTemporarioPessoasFisicas = '3';
    const ConsumoNoExterior = '4';
    const ConsumoConcomitante = '5';

    private function __construct()
    {
    }

    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        switch ($this) {
            case self::Desconhecido:
                return 'Desconhecido (tipo não informado na nota de origem)';
            case self::Transfronteirico:
                return 'Transfronteiriço';
            case self::ConsumoNoBrasil:
                return 'Consumo no Brasil';
            case self::MovimentoTemporarioPessoasFisicas:
                return 'Movimento Temporário de Pessoas Físicas';
            case self::ConsumoNoExterior:
                return 'Consumo no Exterior';
            case self::ConsumoConcomitante:
                return 'Consumo concomitante no território nacional e no exterior';
        }
    }

    /**
     * Get label (alias for getDescription)
     */
    public function label(): string
    {
        return $this->getDescription();
    }
}

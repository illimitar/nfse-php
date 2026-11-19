<?php

namespace Nfse\Enums;

/**
 * Modo de Prestação do Serviço (Comércio Exterior)
 *
 * Baseado no schema: TSMdPrestacao
 */
final class ModoPrestacao
{
    const Desconhecido = '0';
    const Transfronteirico = '1';
    const ConsumoNoExterior = '2';
    const PresencaComercialNoExterior = '3';
    const MovimentoTemporarioPessoasFisicas = '4';

    private function __construct()
    {
    }

    /**
     * Desconhecido ou Não Aplicável
     */
    /**
     * Transfronteiriço
     */
    /**
     * Consumo no Exterior
     */
    /**
     * Presença Comercial no Exterior
     */
    /**
     * Movimento Temporário de Pessoas Físicas
     */
    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::Transfronteirico:
        return 'Transfronteiriço';
    case self::ConsumoNoExterior:
        return 'Consumo no Exterior';
    case self::PresencaComercialNoExterior:
        return 'Presença Comercial no Exterior';
    case self::MovimentoTemporarioPessoasFisicas:
        return 'Movimento Temporário de Pessoas Físicas';
    case self::Desconhecido:
        return 'Desconhecido ou Não Aplicável';
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

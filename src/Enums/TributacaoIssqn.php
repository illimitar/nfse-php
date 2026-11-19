<?php

namespace Nfse\Enums;

/**
 * Tributação do ISSQN
 */
final class TributacaoIssqn
{
    const OperacaoTributavel = 1;
    const Imunidade = 2;
    const ExportacaoServico = 3;
    const NaoIncidencia = 4;

    private function __construct()
    {
    }

    /**
     * Operação tributável
     */
    /**
     * Imunidade
     */
    /**
     * Exportação de serviço
     */
    /**
     * Não Incidência
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::OperacaoTributavel:
        return 'Operação tributável';
    case self::Imunidade:
        return 'Imunidade';
    case self::ExportacaoServico:
        return 'Exportação de serviço';
    case self::NaoIncidencia:
        return 'Não Incidência';
    }
}));
    }

    public function label(): string
    {
        return $this->getDescription();
    }
}

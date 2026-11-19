<?php

namespace Nfse\Enums;

/**
 * Vínculo da Operação à Movimentação Temporária de Bens
 *
 * Baseado no schema: TSMovTempBens
 */
final class MovimentacaoTemporariaBens
{
    const Nenhum = '0';
    const Nao = '1';
    const SimImportacao = '2';
    const SimExportacao = '3';

    private function __construct()
    {
    }

    /**
     * Nenhum
     */
    /**
     * Não
     */
    /**
     * Sim (Importação)
     */
    /**
     * Sim (Exportação)
     */
    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::Nenhum:
        return 'Nenhum';
    case self::Nao:
        return 'Não';
    case self::SimImportacao:
        return 'Sim (Importação)';
    case self::SimExportacao:
        return 'Sim (Exportação)';
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

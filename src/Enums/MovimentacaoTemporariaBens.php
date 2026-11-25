<?php

namespace Nfse\Enums;

/**
 * Vínculo da Operação à Movimentação Temporária de Bens
 *
 * Baseado no schema: TSMovTempBens
 */
final class MovimentacaoTemporariaBens
{
    const Desconhecido = '0';
    const Nao = '1';
    const DeclaracaoImportacao = '2';
    const DeclaracaoExportacao = '3';

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
            case self::Nao:
                return 'Não';
            case self::DeclaracaoImportacao:
                return 'Vinculada - Declaração de Importação';
            case self::DeclaracaoExportacao:
                return 'Vinculada - Declaração de Exportação';
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

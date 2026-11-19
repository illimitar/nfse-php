<?php

namespace Nfse\Enums;

/**
 * Código de Status da NFS-e
 *
 * Baseado no schema: cStat
 */
final class CodigoStatus
{
    const NfseGerada = 100;
    const NfseDecisaoJudicial = 102;
    const NfseAvulsa = 103;
    const NfseMei = 107;

    private function __construct()
    {
    }

    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
            switch ($this) {
                case self::NfseGerada:
                    return 'NFS-e Gerada';
                case self::NfseDecisaoJudicial:
                    return 'NFS-e de Decisão Judicial';
                case self::NfseAvulsa:
                    return 'NFS-e Avulsa';
                case self::NfseMei:
                    return 'NFS-e MEI';
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

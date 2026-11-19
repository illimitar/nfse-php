<?php

namespace Nfse\Enums;

/**
 * Documento fiscal a que se refere a chave de DF-e do Repositório Nacional
 */
final class TipoChaveDFe
{
    const Nfse = 1;
    const Nfe = 2;
    const Cte = 3;
    const Outro = 9;

    private function __construct()
    {
    }

    /**
     * NFS-e
     */
    /**
     * NF-e
     */
    /**
     * CT-e
     */
    /**
     * Outro
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::Nfse:
        return 'NFS-e';
    case self::Nfe:
        return 'NF-e';
    case self::Cte:
        return 'CT-e';
    case self::Outro:
        return 'Outro';
    }
}));
    }

    public function label(): string
    {
        return $this->getDescription();
    }
}

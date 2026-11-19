<?php

namespace Nfse\Enums;

/**
 * Motivo da substituição de NFS-e
 *
 * Baseado no schema: TSMotivoSubst
 */
final class MotivoSubstituicao
{
    const DesenquadramentoSimplesNacional = '01';
    const EnquadramentoSimplesNacional = '02';
    const InclusaoRetroativaImunidadeIsencao = '03';
    const ExclusaoRetroativaImunidadeIsencao = '04';
    const RejeicaoNfs = '05';
    const Outros = '99';

    private function __construct()
    {
    }

    /**
     * Desenquadramento de NFS-e do Simples Nacional
     */
    /**
     * Enquadramento de NFS-e no Simples Nacional
     */
    /**
     * Inclusão Retroativa de Imunidade/Isenção para NFS-e
     */
    /**
     * Exclusão Retroativa de Imunidade/Isenção para NFS-e
     */
    /**
     * Rejeição de NFS-e pelo tomador ou pelo intermediário se responsável pelo recolhimento do tributo
     */
    /**
     * Outros
     */
    /**
     * Get description for the enum case
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::DesenquadramentoSimplesNacional:
        return 'Desenquadramento de NFS-e do Simples Nacional';
    case self::EnquadramentoSimplesNacional:
        return 'Enquadramento de NFS-e no Simples Nacional';
    case self::InclusaoRetroativaImunidadeIsencao:
        return 'Inclusão Retroativa de Imunidade/Isenção para NFS-e';
    case self::ExclusaoRetroativaImunidadeIsencao:
        return 'Exclusão Retroativa de Imunidade/Isenção para NFS-e';
    case self::RejeicaoNfs:
        return 'Rejeição de NFS-e pelo tomador ou pelo intermediário se responsável pelo recolhimento do tributo';
    case self::Outros:
        return 'Outros';
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

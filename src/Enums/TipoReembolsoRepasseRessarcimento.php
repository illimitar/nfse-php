<?php

namespace Nfse\Enums;

/**
 * Tipo de valor incluído no documento, recebido por estar relacionado a operações de
 * terceiros, objeto de reembolso, repasse ou ressarcimento pelo recebedor, já tributados
 */
final class TipoReembolsoRepasseRessarcimento
{
    const IntermediacaoImoveis = '01';
    const AgenciaTurismo = '02';
    const ProducaoExterna = '03';
    const Midia = '04';
    const Outros = '99';

    private function __construct()
    {
    }

    /**
     * Repasse de remuneração por intermediação de imóveis a demais corretores envolvidos na operação
     */
    /**
     * Repasse de valores a fornecedor relativo a fornecimento intermediado por agência de turismo
     */
    /**
     * Reembolso ou ressarcimento recebido por agência de propaganda e publicidade por
     * valores pagos relativos a serviços de produção externa por conta e ordem de terceiro
     */
    /**
     * Reembolso ou ressarcimento recebido por agência de propaganda e publicidade por
     * valores pagos relativos a serviços de mídia por conta e ordem de terceiro
     */
    /**
     * Outros reembolsos ou ressarcimentos recebidos por valores pagos relativos a
     * operações por conta e ordem de terceiro
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::IntermediacaoImoveis:
        return 'Repasse de remuneração por intermediação de imóveis a demais corretores envolvidos na operação';
    case self::AgenciaTurismo:
        return 'Repasse de valores a fornecedor relativo a fornecimento intermediado por agência de turismo';
    case self::ProducaoExterna:
        return 'Reembolso ou ressarcimento por serviços de produção externa por conta e ordem de terceiro';
    case self::Midia:
        return 'Reembolso ou ressarcimento por serviços de mídia por conta e ordem de terceiro';
    case self::Outros:
        return 'Outros reembolsos ou ressarcimentos por operações por conta e ordem de terceiro';
    }
}));
    }

    public function label(): string
    {
        return $this->getDescription();
    }
}

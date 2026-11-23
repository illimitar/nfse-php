<?php

namespace Nfse\Enums;

/**
 * Tipo de Operação com Entes Governamentais ou outros serviços sobre bens imóveis
 */
final class TipoOperacaoRtc
{
    const FornecimentoPagamentoPosterior = 1;
    const RecebimentoFornecimentoRealizado = 2;
    const FornecimentoPagamentoRealizado = 3;
    const RecebimentoFornecimentoPosterior = 4;
    const FornecimentoRecebimentoConcomitantes = 5;

    private function __construct()
    {
    }

    /**
     * Fornecimento com pagamento posterior
     */
    /**
     * Recebimento do pagamento com fornecimento já realizado
     */
    /**
     * Fornecimento com pagamento já realizado
     */
    /**
     * Recebimento do pagamento com fornecimento posterior
     */
    /**
     * Fornecimento e recebimento do pagamento concomitantes
     */
    public function getDescription(): string
    {
        return (call_user_func(function () {
    switch ($this) {
    case self::FornecimentoPagamentoPosterior:
        return 'Fornecimento com pagamento posterior';
    case self::RecebimentoFornecimentoRealizado:
        return 'Recebimento do pagamento com fornecimento já realizado';
    case self::FornecimentoPagamentoRealizado:
        return 'Fornecimento com pagamento já realizado';
    case self::RecebimentoFornecimentoPosterior:
        return 'Recebimento do pagamento com fornecimento posterior';
    case self::FornecimentoRecebimentoConcomitantes:
        return 'Fornecimento e recebimento do pagamento concomitantes';
    }
}));
    }

    public function label(): string
    {
        return $this->getDescription();
    }

    /**
     * Indica se o tipo de operação exige o grupo de NFS-e referenciadas.
     */
    public static function exigeNfseReferenciada($tipo): bool
    {
        return in_array($tipo, [self::RecebimentoFornecimentoRealizado, self::FornecimentoPagamentoRealizado], true);
    }
}

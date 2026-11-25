<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class LocacaoData extends Dto
{
    public static $__mapFrom = array (
  'percentualCopropriedade' => 'pCopropriedade',
  'valorTotalOperacao' => 'vTotOper',
  'valorDescontoIncondicionadoTotal' => 'vDescIncondTot',
  'valorDescontoCondicionadoTotal' => 'vDescCondTot',
  'dataVencimentoOriginal' => 'dVencOrig'
);
    public static $__propertyTypes = array (
  'percentualCopropriedade' => '?float',
  'valorTotalOperacao' => '?float',
  'valorDescontoIncondicionadoTotal' => '?float',
  'valorDescontoCondicionadoTotal' => '?float',
  'dataVencimentoOriginal' => '?string'
);

    /**
         * Percentual de copropriedade. Com um só locador, informar 100.
         */
    public $percentualCopropriedade = null;

    /**
         * Valor total da operação com bem imóvel (R$).
         */
    public $valorTotalOperacao = null;

    /**
         * Valor total do desconto incondicionado da operação (R$).
         */
    public $valorDescontoIncondicionadoTotal = null;

    /**
         * Valor total do desconto condicionado da operação (R$).
         */
    public $valorDescontoCondicionadoTotal = null;

    /**
         * Data de vencimento original do aluguel (AAAA-MM-DD).
         */
    public $dataVencimentoOriginal = null;
}

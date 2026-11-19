<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class ValoresData extends Dto
{
    public static $__mapFrom = array (
  'valorServicoPrestado' => 'vServPrest',
  'desconto' => 'vDescCondIncond',
  'deducaoReducao' => 'vDedRed',
  'tributacao' => 'trib'
);
    public static $__propertyTypes = array (
  'valorServicoPrestado' => '?ValorServicoPrestadoData',
  'desconto' => '?DescontoData',
  'deducaoReducao' => '?DeducaoReducaoData',
  'tributacao' => '?TributacaoData'
);


    /**
     * Valor do serviço prestado.
     */
    public $valorServicoPrestado = null;

    /**
     * Descontos condicionados e incondicionados.
     */
    public $desconto = null;

    /**
     * Deduções e reduções da base de cálculo.
     */
    public $deducaoReducao = null;

    /**
     * Informações sobre a tributação do serviço.
     */
    public $tributacao = null;
}

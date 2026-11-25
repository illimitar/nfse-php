<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class ValoresData extends Dto
{
    public static $__mapFrom = array (
  'valorServicoPrestado' => 'vServPrest',
  'desconto' => 'vDescCondIncond',
  'ajusteBaseCalculo' => 'vAjusteBC',
  'tributacao' => 'trib'
);
    public static $__propertyTypes = array (
  'valorServicoPrestado' => '?ValorServicoPrestadoData',
  'desconto' => '?DescontoData',
  'ajusteBaseCalculo' => '?AjusteBaseCalculoData',
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
     * Ajuste da base de cálculo do ISSQN e/ou IBS/CBS.
     */
    public $ajusteBaseCalculo = null;

    /**
     * Informações sobre a tributação do serviço.
     */
    public $tributacao = null;
}

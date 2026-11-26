<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class CondominioData extends Dto
{
    public static $__mapFrom = array (
  'dataVencimentoOriginal' => 'dVencOrig',
  'cobrancas' => 'gCobranca',
  'descontos' => 'gDesconto'
);
    /** @var array */
    public static $__castWith = array (
  'cobrancas' => array (
    'caster' => 'Nfse\\Support\\DTO\\ArrayCaster',
    'args' => array (
      'itemType' => 'Nfse\\Dto\\Nfse\\CobrancaCondominioData'
    )
  ),
  'descontos' => array (
    'caster' => 'Nfse\\Support\\DTO\\ArrayCaster',
    'args' => array (
      'itemType' => 'Nfse\\Dto\\Nfse\\DescontoCondominioData'
    )
  )
);
    public static $__propertyTypes = array (
  'dataVencimentoOriginal' => '?string',
  'cobrancas' => '?array',
  'descontos' => '?array'
);

    /**
     * Data de vencimento original das taxas condominiais.
     */
    public $dataVencimentoOriginal = null;

    /**
     * Cobranças das taxas e demais valores condominiais.
     *
     * @var CobrancaCondominioData[]|null
     */
    public $cobrancas = null;

    /**
     * Descontos concedidos nas taxas condominiais.
     *
     * @var DescontoCondominioData[]|null
     */
    public $descontos = null;
}

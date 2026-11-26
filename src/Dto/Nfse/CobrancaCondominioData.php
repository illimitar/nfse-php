<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class CobrancaCondominioData extends Dto
{
    public static $__mapFrom = array (
  'tipoCobranca' => 'tpCobranca',
  'descricaoTipoCobranca' => 'xTpCobranca',
  'valorCobranca' => 'vCobranca',
  'detalhamentos' => 'gDetCobranca'
);
    /** @var array */
    public static $__castWith = array (
  'tipoCobranca' => array (
    'caster' => 'Nfse\\Support\\DTO\\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\\Enums\\TipoCobrancaCondominio'
    )
  ),
  'detalhamentos' => array (
    'caster' => 'Nfse\\Support\\DTO\\ArrayCaster',
    'args' => array (
      'itemType' => 'Nfse\\Dto\\Nfse\\DetalhamentoCobrancaCondominioData'
    )
  )
);
    public static $__propertyTypes = array (
  'tipoCobranca' => '?TipoCobrancaCondominio',
  'descricaoTipoCobranca' => '?string',
  'valorCobranca' => '?float',
  'detalhamentos' => '?array'
);

    /**
     * Tipo da cobrança.
     */
    public $tipoCobranca = null;

    /**
     * Descrição do tipo da cobrança. Somente quando o tipo é 99.
     */
    public $descricaoTipoCobranca = null;

    /**
     * Valor da cobrança.
     */
    public $valorCobranca = null;

    /**
     * Detalhamento da cobrança.
     *
     * @var DetalhamentoCobrancaCondominioData[]|null
     */
    public $detalhamentos = null;
}

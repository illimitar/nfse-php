<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class DescontoCondominioData extends Dto
{
    public static $__mapFrom = array (
  'tipoDesconto' => 'tpDesconto',
  'valorDesconto' => 'vDesconto',
  'descricaoTipoDesconto' => 'xTpDesconto'
);
    /** @var array */
    public static $__castWith = array (
  'tipoDesconto' => array (
    'caster' => 'Nfse\\Support\\DTO\\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\\Enums\\TipoDescontoCondominio'
    )
  )
);
    public static $__propertyTypes = array (
  'tipoDesconto' => '?TipoDescontoCondominio',
  'valorDesconto' => '?float',
  'descricaoTipoDesconto' => '?string'
);

    /**
     * Tipo do desconto.
     */
    public $tipoDesconto = null;

    /**
     * Valor do desconto.
     */
    public $valorDesconto = null;

    /**
     * Descrição do desconto aplicado pelo condomínio.
     */
    public $descricaoTipoDesconto = null;
}

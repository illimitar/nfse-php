<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class DetalhamentoCobrancaCondominioData extends Dto
{
    public static $__mapFrom = array (
  'tipoDetalhamento' => 'tpDetCobranca',
  'descricaoTipoDetalhamento' => 'xTpDetCobranca',
  'valorDetalhamento' => 'vDetCobranca'
);
    /** @var array */
    public static $__castWith = array (
  'tipoDetalhamento' => array (
    'caster' => 'Nfse\\Support\\DTO\\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\\Enums\\TipoDetalhamentoCobrancaCondominio'
    )
  )
);
    public static $__propertyTypes = array (
  'tipoDetalhamento' => '?TipoDetalhamentoCobrancaCondominio',
  'descricaoTipoDetalhamento' => '?string',
  'valorDetalhamento' => '?float'
);

    /**
     * Tipo de detalhamento da cobrança.
     */
    public $tipoDetalhamento = null;

    /**
     * Descrição do detalhamento. Somente quando o tipo é 999.
     */
    public $descricaoTipoDetalhamento = null;

    /**
     * Valor detalhado da cobrança.
     */
    public $valorDetalhamento = null;
}

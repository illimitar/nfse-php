<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Nfse\Enums\TipoAjusteBaseCalculoLocacaoImovel;

class AjusteBaseCalculoLocacaoImovelData extends Dto
{
    public static $__mapFrom = array (
  'tipoAjusteBaseCalculoLocacao' => 'tpAjusteBCLocImoveis',
  'descricaoTipoAjusteBaseCalculoLocacao' => 'xTpAjusteBCLocImoveis',
  'valorAjusteBaseCalculoLocacao' => 'vAjusteBCLocImoveis'
);
    /** @var array */
    public static $__castWith = array (
  'tipoAjusteBaseCalculoLocacao' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\TipoAjusteBaseCalculoLocacaoImovel'
    )
  )
);
    public static $__propertyTypes = array (
  'tipoAjusteBaseCalculoLocacao' => '?TipoAjusteBaseCalculoLocacaoImovel',
  'descricaoTipoAjusteBaseCalculoLocacao' => '?string',
  'valorAjusteBaseCalculoLocacao' => '?float'
);

    /**
         * Tipo da parcela que não entra na base de cálculo.
         */
    public $tipoAjusteBaseCalculoLocacao = null;

    /**
         * Descrição da parcela quando o tipo é 99.
         */
    public $descricaoTipoAjusteBaseCalculoLocacao = null;

    /**
         * Valor da parcela que não entra na base (R$).
         */
    public $valorAjusteBaseCalculoLocacao = null;
}

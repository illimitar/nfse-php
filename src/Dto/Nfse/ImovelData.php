<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class ImovelData extends Dto
{
    public static $__mapFrom = array (
  'codigoMunicipio' => 'cMun',
  'locacao' => 'gLocacao',
  'unidadesImovel' => 'gUnidImob'
);
    /** @var array */
    public static $__castWith = array (
  'unidadesImovel' => array (
    'caster' => 'Nfse\\Support\\DTO\\ArrayCaster',
    'args' => array (
      'itemType' => 'Nfse\\Dto\\Nfse\\UnidadeImovelData'
    )
  )
);
    public static $__propertyTypes = array (
  'codigoMunicipio' => '?string',
  'locacao' => '?LocacaoData',
  'unidadesImovel' => '?array'
);


    /**
     * Código do município do imóvel (tabela do IBGE).
     */
    public $codigoMunicipio = null;

    /**
     * Locação, cessão onerosa ou arrendamento.
     */
    public $locacao = null;

    /**
     * Unidades imobiliárias objeto da operação.
     *
     * @var UnidadeImovelData[]|null
     */
    public $unidadesImovel = null;
}

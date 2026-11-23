<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Nfse\Support\DTO\ArrayCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\MapFrom;

class DeducaoReducaoData extends Dto
{
    public static $__mapFrom = array (
  'percentualDeducaoReducao' => 'pDR',
  'valorDeducaoReducao' => 'vDR',
  'documentos' => 'documentos'
);
    /** @var array */
    public static $__castWith = array (
  'documentos' => array (
    'caster' => 'Nfse\Support\DTO\ArrayCaster',
    'args' => array (
      'itemType' => 'Nfse\Dto\Nfse\DocumentoDeducaoData'
    )
  )
);
    public static $__propertyTypes = array (
  'percentualDeducaoReducao' => '?float',
  'valorDeducaoReducao' => '?float',
  'documentos' => '?array'
);


    /**
     * Percentual de dedução/redução da base de cálculo.
     */
    public $percentualDeducaoReducao = null;

    /**
     * Valor monetário de dedução/redução da base de cálculo.
     */
    public $valorDeducaoReducao = null;

    /**
     * Documentos comprobatórios da dedução/redução.
     *
     * @var DocumentoDeducaoData[]|null
     */
    public $documentos = null;
}

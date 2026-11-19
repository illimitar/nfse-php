<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class DescontoData extends Dto
{
    public static $__mapFrom = array (
  'valorDescontoIncondicionado' => 'vDescIncond',
  'valorDescontoCondicionado' => 'vDescCond'
);
    public static $__propertyTypes = array (
  'valorDescontoIncondicionado' => '?float',
  'valorDescontoCondicionado' => '?float'
);


    /**
     * Valor do desconto incondicionado.
     */
    public $valorDescontoIncondicionado = null;

    /**
     * Valor do desconto condicionado.
     */
    public $valorDescontoCondicionado = null;
}

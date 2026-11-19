<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class PedRegEventoData extends Dto
{
    public static $__mapFrom = array (
  'id' => '@attributes.Id',
  'infPedReg' => 'infPedReg',
  'versao' => 'versao'
);
    public static $__propertyTypes = array (
  'id' => '?string',
  'infPedReg' => '?InfPedRegData',
  'versao' => 'string'
);


    public $id = null;

    public $infPedReg = null;

    public $versao = '1.01';
}

<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class DpsData extends Dto
{
    public static $__mapFrom = array (
  'versao' => '@attributes.versao',
  'infDps' => 'infDPS'
);
    public static $__propertyTypes = array (
  'versao' => '?string',
  'infDps' => '?InfDpsData'
);


    public $versao = null;

    public $infDps = null;
}

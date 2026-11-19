<?php

namespace Nfse\Dto\Http;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class DistribuicaoNsuDto extends Dto
{
    public static $__mapFrom = array (
  'nsu' => 'NSU',
  'chaveAcesso' => 'chAcesso',
  'dfeXmlGZipB64' => 'dfeXmlGZipB64'
);
    public static $__propertyTypes = array (
  'nsu' => '?int',
  'chaveAcesso' => '?string',
  'dfeXmlGZipB64' => '?string'
);


    public $nsu = null;

    public $chaveAcesso = null;

    public $dfeXmlGZipB64 = null;
}

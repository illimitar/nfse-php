<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class RejeicaoTomadorData extends Dto
{
    public static $__mapFrom = array (
  'descricao' => 'xDesc',
  'codigoMotivo' => 'infRej.cMotivo',
  'motivo' => 'infRej.xMotivo'
);
    public static $__propertyTypes = array (
  'descricao' => '?string',
  'codigoMotivo' => '?string',
  'motivo' => '?string'
);


    public $descricao = null;

    public $codigoMotivo = null;

    public $motivo = null;
}

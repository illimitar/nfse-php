<?php

namespace Nfse\Dto\Http;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class AliquotaDto extends Dto
{
    public static $__mapFrom = array (
  'incidencia' => 'Incidencia',
  'aliquota' => 'Aliq',
  'dataInicio' => 'DtIni',
  'dataFim' => 'DtFim'
);
    public static $__propertyTypes = array (
  'incidencia' => '?string',
  'aliquota' => '?float',
  'dataInicio' => '?string',
  'dataFim' => '?string'
);


    public $incidencia = null;

    public $aliquota = null;

    public $dataInicio = null;

    public $dataFim = null;
}

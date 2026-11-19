<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class BloqueioPorOficioData extends Dto
{
    public static $__mapFrom = array (
  'descricao' => 'xDesc',
  'cpfAgenteTributario' => 'CPFAgTrib',
  'motivo' => 'xMotivo',
  'codigoEvento' => 'codEvento'
);
    public static $__propertyTypes = array (
  'descricao' => '?string',
  'cpfAgenteTributario' => '?string',
  'motivo' => '?string',
  'codigoEvento' => '?string'
);


    public $descricao = null;

    public $cpfAgenteTributario = null;

    public $motivo = null;

    public $codigoEvento = null;
}

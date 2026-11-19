<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class DesbloqueioPorOficioData extends Dto
{
    public static $__mapFrom = array (
  'descricao' => 'xDesc',
  'cpfAgenteTributario' => 'CPFAgTrib',
  'idBloqueioOficio' => 'idBloqOfic'
);
    public static $__propertyTypes = array (
  'descricao' => '?string',
  'cpfAgenteTributario' => '?string',
  'idBloqueioOficio' => '?string'
);


    public $descricao = null;

    public $cpfAgenteTributario = null;

    public $idBloqueioOficio = null;
}

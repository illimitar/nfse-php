<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class LocalPrestacaoData extends Dto
{
    public static $__mapFrom = array (
  'codigoLocalPrestacao' => 'cLocPrestacao',
  'codigoPaisPrestacao' => 'cPaisPrestacao'
);
    public static $__propertyTypes = array (
  'codigoLocalPrestacao' => '?string',
  'codigoPaisPrestacao' => '?string'
);


    /**
     * Código do município onde o serviço foi prestado (IBGE).
     * Utilizar 0000000 para "Águas Marítimas".
     */
    public $codigoLocalPrestacao = null;

    /**
     * Código do país onde o serviço foi prestado (ISO2).
     * Obrigatório se o serviço for prestado no exterior.
     */
    public $codigoPaisPrestacao = null;
}

<?php

namespace Nfse\Dto\Http;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class DistribuicaoDfeResponse extends Dto
{
    public static $__mapFrom = array (
  'tipoAmbiente' => 'tpAmb',
  'versaoAplicativo' => 'verAplic',
  'dataHoraProcessamento' => 'dhProc',
  'ultimoNsu' => 'ultNSU',
  'maiorNsu' => 'maiorNSU',
  'listaNsu' => 'lNSU'
);
    public static $__propertyTypes = array (
  'tipoAmbiente' => '?string',
  'versaoAplicativo' => '?string',
  'dataHoraProcessamento' => '?string',
  'ultimoNsu' => '?int',
  'maiorNsu' => '?int',
  'listaNsu' => 'array'
);


    public $tipoAmbiente = null;

    public $versaoAplicativo = null;

    public $dataHoraProcessamento = null;

    public $ultimoNsu = null;

    public $maiorNsu = null;

    public $alertas = [];

    public $erros = [];

    public $listaNsu = [];
}

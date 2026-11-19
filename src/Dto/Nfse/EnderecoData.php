<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class EnderecoData extends Dto
{
    public static $__mapFrom = array (
  'codigoMunicipio' => 'endNac.cMun',
  'cep' => 'endNac.CEP',
  'logradouro' => 'xLgr',
  'numero' => 'nro',
  'bairro' => 'xBairro',
  'complemento' => 'xCpl',
  'enderecoExterior' => 'endExt'
);
    public static $__propertyTypes = array (
  'codigoMunicipio' => '?string',
  'cep' => '?string',
  'logradouro' => '?string',
  'numero' => '?string',
  'bairro' => '?string',
  'complemento' => '?string',
  'enderecoExterior' => '?EnderecoExteriorData'
);


    /**
     * Código do município (IBGE).
     */
    public $codigoMunicipio = null;

    /**
     * CEP.
     */
    public $cep = null;

    /**
     * Logradouro.
     */
    public $logradouro = null;

    /**
     * Número.
     */
    public $numero = null;

    /**
     * Bairro.
     */
    public $bairro = null;

    /**
     * Complemento.
     */
    public $complemento = null;

    /**
     * Endereço no exterior.
     */
    public $enderecoExterior = null;
}

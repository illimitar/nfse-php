<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class EnderecoEmitenteData extends Dto
{
    public static $__mapFrom = array (
  'logradouro' => 'xLgr',
  'numero' => 'nro',
  'complemento' => 'xCpl',
  'bairro' => 'xBairro',
  'codigoMunicipio' => 'cMun',
  'uf' => 'UF',
  'cep' => 'CEP'
);
    public static $__propertyTypes = array (
  'logradouro' => '?string',
  'numero' => '?string',
  'complemento' => '?string',
  'bairro' => '?string',
  'codigoMunicipio' => '?string',
  'uf' => '?string',
  'cep' => '?string'
);


    /**
     * Logradouro.
     */
    public $logradouro = null;

    /**
     * Número.
     */
    public $numero = null;

    /**
     * Complemento.
     */
    public $complemento = null;

    /**
     * Bairro.
     */
    public $bairro = null;

    /**
     * Código do município (IBGE).
     */
    public $codigoMunicipio = null;

    /**
     * Sigla da UF.
     */
    public $uf = null;

    /**
     * CEP.
     */
    public $cep = null;
}

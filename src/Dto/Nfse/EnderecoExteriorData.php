<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class EnderecoExteriorData extends Dto
{
    public static $__mapFrom = array (
  'codigoPais' => 'cPais',
  'codigoEnderecamentoPostal' => 'cEndPost',
  'cidade' => 'xCidade',
  'estadoProvinciaRegiao' => 'xEstProvReg'
);
    public static $__propertyTypes = array (
  'codigoPais' => '?string',
  'codigoEnderecamentoPostal' => '?string',
  'cidade' => '?string',
  'estadoProvinciaRegiao' => '?string'
);


    /**
     * Código do país (ISO2).
     */
    public $codigoPais = null;

    /**
     * Código de endereçamento postal.
     */
    public $codigoEnderecamentoPostal = null;

    /**
     * Nome da cidade.
     */
    public $cidade = null;

    /**
     * Estado, província ou região.
     */
    public $estadoProvinciaRegiao = null;
}

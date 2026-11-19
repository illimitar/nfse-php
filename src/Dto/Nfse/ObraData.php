<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class ObraData extends Dto
{
    public static $__mapFrom = array (
  'inscricaoImobiliariaFiscal' => 'inscImobFisc',
  'codigoObra' => 'cObra',
  'endereco' => 'end'
);
    public static $__propertyTypes = array (
  'inscricaoImobiliariaFiscal' => '?string',
  'codigoObra' => '?string',
  'endereco' => '?EnderecoData'
);


    /**
     * Inscrição imobiliária fiscal da obra.
     */
    public $inscricaoImobiliariaFiscal = null;

    /**
     * Código da obra.
     */
    public $codigoObra = null;

    /**
     * Endereço da obra.
     */
    public $endereco = null;
}

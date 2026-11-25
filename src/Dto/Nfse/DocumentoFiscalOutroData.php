<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class DocumentoFiscalOutroData extends Dto
{
    public static $__mapFrom = array (
  'codigoMunicipioDocumentoFiscal' => 'cMunDocFiscal',
  'numeroDocumentoFiscal' => 'nDocFiscal',
  'descricaoDocumentoFiscal' => 'xDocFiscal'
);
    public static $__propertyTypes = array (
  'codigoMunicipioDocumentoFiscal' => '?string',
  'numeroDocumentoFiscal' => '?string',
  'descricaoDocumentoFiscal' => '?string'
);

    /**
         * Código do município emissor do documento fiscal.
         */
    public $codigoMunicipioDocumentoFiscal = null;

    /**
         * Número do documento fiscal.
         */
    public $numeroDocumentoFiscal = null;

    /**
         * Descrição do documento fiscal.
         */
    public $descricaoDocumentoFiscal = null;
}

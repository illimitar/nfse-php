<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class DocumentoOutroData extends Dto
{
    public static $__mapFrom = array (
  'numeroDocumento' => 'nDoc',
  'descricaoDocumento' => 'xDoc'
);
    public static $__propertyTypes = array (
  'numeroDocumento' => '?string',
  'descricaoDocumento' => '?string'
);

    /**
         * Número do documento não fiscal.
         */
    public $numeroDocumento = null;

    /**
         * Descrição do documento não fiscal.
         */
    public $descricaoDocumento = null;
}

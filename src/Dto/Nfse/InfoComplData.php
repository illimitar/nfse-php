<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class InfoComplData extends Dto
{
    public static $__mapFrom = array (
  'idDocumentoTecnico' => 'idDocTec',
  'documentoReferencia' => 'docRef',
  'informacoesComplementares' => 'xInfComp'
);
    public static $__propertyTypes = array (
  'idDocumentoTecnico' => '?string',
  'documentoReferencia' => '?string',
  'informacoesComplementares' => '?string'
);


    /**
     * Oc. 0-1
     * Tam 1-40
     * Identificador do documento técnico.
     * Identificador de Documento de Responsabilidade Técnica:
     * ART, RRT, DRT, Outros.
     */
    public $idDocumentoTecnico = null;

    /**
     * Oc. 0-1
     * Tam 255
     * Chave da nota, número identificador da nota, número do contrato ou outro
     * identificador de documento emitido pelo prestador de serviços, que subsidia a
     * emissão dessa nota pelo tomador do serviço ou intermediário (preenchimento obrigatório
     * caso a nota esteja sendo emitida pelo Tomador ou intermediário do serviço).
     */
    public $documentoReferencia = null;

    /**
     * Oc. 0-1
     * Tam 255
     * Campo livre para preenchimento pelo contribuinte.
     */
    public $informacoesComplementares = null;
}

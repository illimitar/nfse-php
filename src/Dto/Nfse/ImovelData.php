<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class ImovelData extends Dto
{
    public static $__mapFrom = array (
  'inscricaoImobiliariaFiscal' => 'inscImobFisc',
  'codigoCib' => 'cCIB',
  'endereco' => 'end'
);
    public static $__propertyTypes = array (
  'inscricaoImobiliariaFiscal' => '?string',
  'codigoCib' => '?string',
  'endereco' => '?EnderecoData'
);


    /**
     * Inscrição imobiliária fiscal fornecida pela Prefeitura Municipal.
     */
    public $inscricaoImobiliariaFiscal = null;

    /**
     * Código do Cadastro Imobiliário Brasileiro (CIB).
     */
    public $codigoCib = null;

    /**
     * Endereço do imóvel.
     */
    public $endereco = null;
}

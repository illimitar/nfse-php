<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Nfse\Enums\TipoDeducaoReducao;
use Nfse\Support\DTO\EnumCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\MapFrom;

class DocumentoDeducaoData extends Dto
{
    public static $__mapFrom = array (
  'chaveNfse' => 'chNFSe',
  'chaveNfe' => 'chNFe',
  'descricaoOutrasDeducoes' => 'xDescOutDed',
  'dataEmissaoDocumento' => 'dEmiDoc',
  'valorDedutivelRedutivel' => 'vDedutivelRedutivel',
  'valorDeducaoReducao' => 'vDeducaoReducao',
  'fornecedor' => 'fornec'
);
    public static $__propertyTypes = array (
  'chaveNfse' => '?string',
  'chaveNfe' => '?string',
  'tipoDeducaoReducao' => '?TipoDeducaoReducao',
  'descricaoOutrasDeducoes' => '?string',
  'dataEmissaoDocumento' => '?string',
  'valorDedutivelRedutivel' => '?float',
  'valorDeducaoReducao' => '?float',
  'fornecedor' => '?FornecedorData'
);


    /**
     * Chave de NFS-e.
     */
    public $chaveNfse = null;

    /**
     * Chave de NF-e.
     */
    public $chaveNfe = null;

    /**
     * Tipo de dedução/redução.
     */
    public $tipoDeducaoReducao = null;

    /**
     * Descrição de outras deduções.
     */
    public $descricaoOutrasDeducoes = null;

    /**
     * Data de emissão do documento.
     */
    public $dataEmissaoDocumento = null;

    /**
     * Valor dedutível/redutível.
     */
    public $valorDedutivelRedutivel = null;

    /**
     * Valor de dedução/redução.
     */
    public $valorDeducaoReducao = null;

    /**
     * Informações do fornecedor.
     */
    public $fornecedor = null;
}

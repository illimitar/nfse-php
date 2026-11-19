<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Nfse\Enums\TipoChaveDFe;
use Nfse\Enums\TipoReembolsoRepasseRessarcimento;
use Nfse\Support\DTO\EnumCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\MapFrom;

class ReembolsoDocumentoData extends Dto
{
    public static $__mapFrom = array (
  'descricaoTipoChaveDfe' => 'dFeNacional.xTipoChaveDFe',
  'chaveDfe' => 'dFeNacional.chaveDFe',
  'codigoMunicipioDocumentoFiscal' => 'docFiscalOutro.cMunDocFiscal',
  'numeroDocumentoFiscal' => 'docFiscalOutro.nDocFiscal',
  'descricaoDocumentoFiscal' => 'docFiscalOutro.xDocFiscal',
  'numeroDocumento' => 'docOutro.nDoc',
  'descricaoDocumento' => 'docOutro.xDoc',
  'fornecedor' => 'fornec',
  'dataEmissaoDocumento' => 'dtEmiDoc',
  'dataCompetenciaDocumento' => 'dtCompDoc',
  'descricaoTipoReembolso' => 'xTpReeRepRes',
  'valorReembolso' => 'vlrReeRepRes'
);
    public static $__propertyTypes = array (
  'tipoChaveDfe' => '?TipoChaveDFe',
  'descricaoTipoChaveDfe' => '?string',
  'chaveDfe' => '?string',
  'codigoMunicipioDocumentoFiscal' => '?string',
  'numeroDocumentoFiscal' => '?string',
  'descricaoDocumentoFiscal' => '?string',
  'numeroDocumento' => '?string',
  'descricaoDocumento' => '?string',
  'fornecedor' => '?FornecedorData',
  'dataEmissaoDocumento' => '?string',
  'dataCompetenciaDocumento' => '?string',
  'tipoReembolso' => '?TipoReembolsoRepasseRessarcimento',
  'descricaoTipoReembolso' => '?string',
  'valorReembolso' => '?float'
);


    /**
     * Documento fiscal a que se refere a chave de DF-e do Repositório Nacional.
     */
    public $tipoChaveDfe = null;

    /**
     * Descrição do DF-e a que se refere a chave.
     * Preenchido apenas quando tipoChaveDFe = 9.
     */
    public $descricaoTipoChaveDfe = null;

    /**
     * Chave do Documento Fiscal eletrônico do repositório nacional.
     */
    public $chaveDfe = null;

    /**
     * Código do município emissor do documento fiscal que não se encontra
     * no repositório nacional.
     */
    public $codigoMunicipioDocumentoFiscal = null;

    /**
     * Número do documento fiscal que não se encontra no repositório nacional.
     */
    public $numeroDocumentoFiscal = null;

    /**
     * Descrição do documento fiscal.
     */
    public $descricaoDocumentoFiscal = null;

    /**
     * Número do documento não fiscal.
     */
    public $numeroDocumento = null;

    /**
     * Descrição do documento não fiscal.
     */
    public $descricaoDocumento = null;

    /**
     * Fornecedor do documento referenciado.
     */
    public $fornecedor = null;

    /**
     * Data da emissão do documento.
     * Formato: AAAA-MM-DD
     */
    public $dataEmissaoDocumento = null;

    /**
     * Data da competência do documento.
     * Formato: AAAA-MM-DD
     */
    public $dataCompetenciaDocumento = null;

    /**
     * Tipo de reembolso, repasse ou ressarcimento.
     */
    public $tipoReembolso = null;

    /**
     * Descrição do reembolso ou ressarcimento.
     * Só deve ser informada quando tpReeRepRes = 99.
     */
    public $descricaoTipoReembolso = null;

    /**
     * Valor monetário utilizado para não inclusão na base de cálculo do ISSQN,
     * do IBS e da CBS da NFS-e que está sendo emitida (R$).
     */
    public $valorReembolso = null;
}

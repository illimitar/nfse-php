<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Nfse\Enums\TipoAjusteBaseCalculo;

class DocumentoAjusteBaseCalculoData extends Dto
{
    public static $__mapFrom = array (
  'tipoAjusteBaseCalculo' => 'tpAjusteBC',
  'descricaoTipoAjusteBaseCalculo' => 'xTpAjusteBC',
  'valorTotalDocumento' => 'vTotDoc',
  'valorAjusteAplicado' => 'vAjusteAplic',
  'dataEmissaoDocumento' => 'dtEmiDoc',
  'dataCompetenciaDocumento' => 'dtCompDoc',
  'dfeNacional' => 'dFeNacional',
  'documentoFiscalOutro' => 'docFiscalOutro',
  'documentoOutro' => 'docOutro',
  'fornecedor' => 'fornec'
);
    /** @var array */
    public static $__castWith = array (
  'tipoAjusteBaseCalculo' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\TipoAjusteBaseCalculo'
    )
  )
);
    public static $__propertyTypes = array (
  'tipoAjusteBaseCalculo' => '?TipoAjusteBaseCalculo',
  'descricaoTipoAjusteBaseCalculo' => '?string',
  'valorTotalDocumento' => '?float',
  'valorAjusteAplicado' => '?float',
  'dataEmissaoDocumento' => '?string',
  'dataCompetenciaDocumento' => '?string',
  'dfeNacional' => '?DfeNacionalData',
  'documentoFiscalOutro' => '?DocumentoFiscalOutroData',
  'documentoOutro' => '?DocumentoOutroData',
  'fornecedor' => '?FornecedorData'
);

    /**
         * Tipo de ajuste da base de cálculo.
         */
    public $tipoAjusteBaseCalculo = null;

    /**
         * Descrição do ajuste quando o tipo informado exige detalhamento.
         */
    public $descricaoTipoAjusteBaseCalculo = null;

    /**
         * Valor monetário total do documento informado (R$).
         */
    public $valorTotalDocumento = null;

    /**
         * Valor monetário utilizado para ajuste da base de cálculo (R$).
         */
    public $valorAjusteAplicado = null;

    /**
         * Data de emissão do documento (AAAA-MM-DD).
         */
    public $dataEmissaoDocumento = null;

    /**
         * Data de competência do documento (AAAA-MM-DD).
         */
    public $dataCompetenciaDocumento = null;

    /**
         * Documento fiscal eletrônico do repositório nacional.
         */
    public $dfeNacional = null;

    /**
         * Documento fiscal que não está no repositório nacional.
         */
    public $documentoFiscalOutro = null;

    /**
         * Documento não fiscal.
         */
    public $documentoOutro = null;

    /**
         * Fornecedor do serviço informado no documento.
         */
    public $fornecedor = null;
}

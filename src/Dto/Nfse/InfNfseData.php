<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Nfse\Enums\AmbienteGerador;
use Nfse\Enums\CodigoStatus;
use Nfse\Enums\ProcessoEmissao;
use Nfse\Support\DTO\EnumCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\MapFrom;

class InfNfseData extends Dto
{
    public static $__mapFrom = array (
  'id' => '@attributes.Id',
  'numeroNfse' => 'nNFSe',
  'numeroDfse' => 'nDFSe',
  'codigoVerificacao' => 'cVerif',
  'dataProcessamento' => 'dhProc',
  'versaoAplicativo' => 'verAplic',
  'localEmissao' => 'xLocEmi',
  'localPrestacao' => 'xLocPrestacao',
  'codigoLocalIncidencia' => 'cLocIncid',
  'nomeLocalIncidencia' => 'xLocIncid',
  'descricaoTributacaoNacional' => 'xTribNac',
  'descricaoTributacaoMunicipal' => 'xTribMun',
  'descricaoNbs' => 'xNBS',
  'tipoEmissao' => 'tpEmis',
  'outrasInformacoes' => 'xOutInf',
  'dps' => 'DPS',
  'emitente' => 'emit',
  'valores' => 'valores',
  'ibscbs' => 'IBSCBS',
  'ambienteGerador' => 'ambGer',
  'processoEmissao' => 'procEmi',
  'codigoStatus' => 'cStat'
);
    /** @var array */
    public static $__castWith = array (
  'ambienteGerador' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\AmbienteGerador'
    )
  ),
  'processoEmissao' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\ProcessoEmissao'
    )
  ),
  'codigoStatus' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\CodigoStatus'
    )
  )
);
    public static $__propertyTypes = array (
  'id' => '?string',
  'numeroNfse' => '?string',
  'numeroDfse' => '?string',
  'codigoVerificacao' => '?string',
  'dataProcessamento' => '?string',
  'ambienteGerador' => '?AmbienteGerador',
  'versaoAplicativo' => '?string',
  'processoEmissao' => '?ProcessoEmissao',
  'localEmissao' => '?string',
  'localPrestacao' => '?string',
  'codigoLocalIncidencia' => '?string',
  'nomeLocalIncidencia' => '?string',
  'descricaoTributacaoNacional' => '?string',
  'descricaoTributacaoMunicipal' => '?string',
  'descricaoNbs' => '?string',
  'tipoEmissao' => '?int',
  'codigoStatus' => '?CodigoStatus',
  'outrasInformacoes' => '?string',
  'dps' => '?DpsData',
  'emitente' => '?EmitenteData',
  'valores' => '?ValoresNfseData',
  'ibscbs' => '?IbscbsNfseData'
);


    /**
     * Identificador da NFS-e.
     */
    public $id = null;

    /**
     * Número da NFS-e.
     */
    public $numeroNfse = null;

    /**
     * Número do DFe.
     */
    public $numeroDfse = null;

    /**
     * Código de verificação.
     */
    public $codigoVerificacao = null;

    /**
     * Data e hora de processamento.
     */
    public $dataProcessamento = null;

    /**
     * Ambiente gerador.
     */
    public $ambienteGerador = null;

    /**
     * Versão do aplicativo.
     */
    public $versaoAplicativo = null;

    /**
     * Processo de emissão.
     */
    public $processoEmissao = null;

    /**
     * Local de emissão (Nome).
     */
    public $localEmissao = null;

    /**
     * Local de prestação (Nome).
     */
    public $localPrestacao = null;

    /**
     * Código do local de incidência.
     */
    public $codigoLocalIncidencia = null;

    /**
     * Local de incidência (Nome).
     */
    public $nomeLocalIncidencia = null;

    /**
     * Descrição da tributação nacional.
     */
    public $descricaoTributacaoNacional = null;

    /**
     * Descrição da tributação municipal.
     */
    public $descricaoTributacaoMunicipal = null;

    /**
     * Descrição da NBS.
     */
    public $descricaoNbs = null;

    /**
     * Tipo de Emissão.
     */
    public $tipoEmissao = null;

    /**
     * Código de status.
     */
    public $codigoStatus = null;

    /**
     * Outras Informações.
     */
    public $outrasInformacoes = null;

    /**
     * Dados da DPS.
     */
    public $dps = null;

    /**
     * Dados do emitente.
     */
    public $emitente = null;

    /**
     * Valores da NFS-e.
     */
    public $valores = null;

    /**
     * Grupo de informações geradas pelo sistema referentes ao IBS e à CBS.
     */
    public $ibscbs = null;
}

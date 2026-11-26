<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class InfDpsData extends Dto
{
    /** @var array */
    public static $__mapFrom = array (
  'id' => '@attributes.Id',
  'tipoAmbiente' => 'tpAmb',
  'dataEmissao' => 'dhEmi',
  'versaoAplicativo' => 'verAplic',
  'serie' => 'serie',
  'numeroDps' => 'nDPS',
  'dataCompetencia' => 'dCompet',
  'tipoEmitente' => 'tpEmit',
  'finalidadeNfse' => 'finNFSe',
  'codigoLocalEmissao' => 'cLocEmi',
  'motivoEmissaoTomadorIntermediario' => 'cMotivoEmisTI',
  'chaveNfseRejeitada' => 'chNFSeRej',
  'substituicao' => 'subst',
  'prestador' => 'prest',
  'tomador' => 'toma',
  'indicadorDestinatario' => 'indDest',
  'destinatario' => 'dest',
  'intermediario' => 'interm',
  'servico' => 'serv',
  'ibscbs' => 'IBSCBS',
  'valores' => 'valores'
);
    /** @var array */
    public static $__castWith = array (
  'tipoAmbiente' => 
  array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => 
    array (
      'enumType' => 'Nfse\Enums\TipoAmbiente'
    )
  ),
  'tipoEmitente' => 
  array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => 
    array (
      'enumType' => 'Nfse\Enums\EmitenteDPS'
    )
  ),
  'motivoEmissaoTomadorIntermediario' => 
  array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => 
    array (
      'enumType' => 'Nfse\Enums\MotivoEmissaoTomadorIntermediario'
    )
  ),
  'indicadorDestinatario' =>
  array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' =>
    array (
      'enumType' => 'Nfse\Enums\IndicadorDestinatario'
    )
  )
);
    /** @var array */
    public static $__propertyTypes = array (
  'id' => '?string',
  'tipoAmbiente' => '?TipoAmbiente',
  'dataEmissao' => '?string',
  'versaoAplicativo' => '?string',
  'serie' => '?string',
  'numeroDps' => '?string',
  'dataCompetencia' => '?string',
  'tipoEmitente' => '?EmitenteDPS',
  'finalidadeNfse' => '?string',
  'codigoLocalEmissao' => '?string',
  'motivoEmissaoTomadorIntermediario' => '?MotivoEmissaoTomadorIntermediario',
  'chaveNfseRejeitada' => '?string',
  'substituicao' => '?SubstituicaoData',
  'prestador' => '?PrestadorData',
  'tomador' => '?TomadorData',
  'indicadorDestinatario' => '?IndicadorDestinatario',
  'destinatario' => '?TomadorData',
  'intermediario' => '?IntermediarioData',
  'servico' => '?ServicoData',
  'ibscbs' => '?IbscbsData',
  'valores' => '?ValoresData'
);


    /**
     * Identificador da tag a ser assinada.
     * Formado por: "DPS" + Cód.Mun.Emi. + Tipo Inscrição + Inscrição + Série + Número.
     */
    public $id = null;

    /**
     * Ambiente de emissão.
     * 1 - Produção
     * 2 - Homologação
     */
    public $tipoAmbiente = null;

    /**
     * Data e hora de emissão da DPS.
     * Formato: AAAA-MM-DDThh:mm:ssTZD
     */
    public $dataEmissao = null;

    /**
     * Versão do aplicativo emissor.
     */
    public $versaoAplicativo = null;

    /**
     * Série da DPS.
     */
    public $serie = null;

    /**
     * Número da DPS.
     */
    public $numeroDps = null;

    /**
     * Data de competência da DPS.
     * Formato: AAAA-MM-DD
     */
    public $dataCompetencia = null;

    /**
     * Tipo de emitente da DPS.
     * 1 - Prestador
     * 2 - Tomador
     * 3 - Intermediário
     */
    public $tipoEmitente = null;

    /**
     * Indicador da finalidade da emissão de NFS-e.
     * 0 - NFS-e regular
     */
    public $finalidadeNfse = null;

    /**
     * Código do município emissor da DPS (IBGE).
     */
    public $codigoLocalEmissao = null;

    /**
     * Motivo da emissão da DPS pelo Tomador ou Intermediário.
     * Obrigatório se tpEmit = 2 ou 3.
     */
    public $motivoEmissaoTomadorIntermediario = null;

    /**
     * Chave de acesso da NFS-e rejeitada.
     * Obrigatório se cMotivoEmisTI = 4.
     */
    public $chaveNfseRejeitada = null;

    /**
     * Informações de substituição de NFS-e.
     */
    public $substituicao = null;

    /**
     * Dados do prestador do serviço.
     */
    public $prestador = null;

    /**
     * Dados do tomador do serviço.
     */
    public $tomador = null;

    /**
     * Indicador do destinatário. No schema 20261124 fica em infDPS, depois do tomador.
     */
    public $indicadorDestinatario = null;

    /**
     * Destinatário do serviço quando não é o tomador. No schema 20261124 fica em infDPS.
     */
    public $destinatario = null;

    /**
     * Dados do intermediário do serviço.
     */
    public $intermediario = null;

    /**
     * Dados do serviço prestado.
     */
    public $servico = null;

    /**
     * Grupo de informações declaradas pelo emitente referentes ao IBS e à CBS.
     */
    public $ibscbs = null;

    /**
     * Valores do serviço e tributos.
     */
    public $valores = null;
}

<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Nfse\Enums\IndicadorDestinatario;
use Nfse\Enums\TipoEnteGovernamental;
use Nfse\Enums\TipoOperacaoRtc;
use Nfse\Support\DTO\ArrayCaster;
use Nfse\Support\DTO\EnumCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\MapFrom;

class IbscbsData extends Dto
{
    public static $__mapFrom = array (
  'finalidadeNfse' => 'finNFSe',
  'indicadorUsoConsumoPessoal' => 'indFinal',
  'codigoIndicadorOperacao' => 'cIndOp',
  'chavesNfseReferenciadas' => 'gRefNFSe.refNFSe',
  'destinatario' => 'dest',
  'imovel' => 'imovel',
  'cst' => 'valores.trib.gIBSCBS.CST',
  'codigoClassificacaoTributaria' => 'valores.trib.gIBSCBS.cClassTrib',
  'codigoCreditoPresumido' => 'valores.trib.gIBSCBS.cCredPres',
  'cstTributacaoRegular' => 'valores.trib.gIBSCBS.gTribRegular.CSTReg',
  'codigoClassificacaoTributariaRegular' => 'valores.trib.gIBSCBS.gTribRegular.cClassTribReg',
  'percentualDiferimentoUf' => 'valores.trib.gIBSCBS.gDif.pDifUF',
  'percentualDiferimentoMunicipal' => 'valores.trib.gIBSCBS.gDif.pDifMun',
  'percentualDiferimentoCbs' => 'valores.trib.gIBSCBS.gDif.pDifCBS',
  'tipoOperacao' => 'tpOper',
  'tipoEnteGovernamental' => 'tpEnteGov',
  'indicadorDestinatario' => 'indDest',
  'documentosReembolso' => 'valores.gReeRepRes.documentos'
);
    /** @var array */
    public static $__castWith = array (
  'tipoOperacao' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\TipoOperacaoRtc'
    )
  ),
  'tipoEnteGovernamental' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\TipoEnteGovernamental'
    )
  ),
  'indicadorDestinatario' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\IndicadorDestinatario'
    )
  ),
  'documentosReembolso' => array (
    'caster' => 'Nfse\Support\DTO\ArrayCaster',
    'args' => array (
      'itemType' => 'Nfse\Dto\Nfse\ReembolsoDocumentoData'
    )
  )
);
    public static $__propertyTypes = array (
  'finalidadeNfse' => '?string',
  'indicadorUsoConsumoPessoal' => '?int',
  'codigoIndicadorOperacao' => '?string',
  'tipoOperacao' => '?TipoOperacaoRtc',
  'chavesNfseReferenciadas' => '?array',
  'tipoEnteGovernamental' => '?TipoEnteGovernamental',
  'indicadorDestinatario' => '?IndicadorDestinatario',
  'destinatario' => '?TomadorData',
  'imovel' => '?ImovelData',
  'documentosReembolso' => '?array',
  'cst' => '?string',
  'codigoClassificacaoTributaria' => '?string',
  'codigoCreditoPresumido' => '?string',
  'cstTributacaoRegular' => '?string',
  'codigoClassificacaoTributariaRegular' => '?string',
  'percentualDiferimentoUf' => '?float',
  'percentualDiferimentoMunicipal' => '?float',
  'percentualDiferimentoCbs' => '?float'
);


    /**
     * Indicador da finalidade da emissão de NFS-e.
     * 0 - NFS-e regular
     */
    public $finalidadeNfse = null;

    /**
     * Indica operação de uso ou consumo pessoal (art. 57).
     * 0 - Não
     * 1 - Sim
     */
    public $indicadorUsoConsumoPessoal = null;

    /**
     * Código indicador da operação de fornecimento, conforme tabela
     * "código indicador de operação" (Anexo VII).
     */
    public $codigoIndicadorOperacao = null;

    /**
     * Tipo de Operação com Entes Governamentais ou outros serviços sobre bens imóveis.
     */
    public $tipoOperacao = null;

    /**
     * Chaves de acesso das NFS-e referenciadas.
     *
     * @var string[]|null
     */
    public $chavesNfseReferenciadas = null;

    /**
     * Tipo de ente governamental.
     * Informado apenas no caso de compras governamentais.
     */
    public $tipoEnteGovernamental = null;

    /**
     * A respeito do destinatário dos serviços.
     */
    public $indicadorDestinatario = null;

    /**
     * Dados do destinatário do serviço.
     * Só deve ser identificado quando indDest = 1.
     */
    public $destinatario = null;

    /**
     * Informações de operações relacionadas a bens imóveis, exceto obras.
     */
    public $imovel = null;

    /**
     * Documentos referenciados de reembolso, repasse ou ressarcimento.
     *
     * @var ReembolsoDocumentoData[]|null
     */
    public $documentosReembolso = null;

    /**
     * Código de Situação Tributária do IBS e da CBS.
     */
    public $cst = null;

    /**
     * Código de Classificação Tributária do IBS e da CBS.
     */
    public $codigoClassificacaoTributaria = null;

    /**
     * Código e classificação do crédito presumido do IBS e da CBS.
     */
    public $codigoCreditoPresumido = null;

    /**
     * Código de Situação Tributária do IBS e da CBS de tributação regular.
     */
    public $cstTributacaoRegular = null;

    /**
     * Código da Classificação Tributária do IBS e da CBS de tributação regular.
     */
    public $codigoClassificacaoTributariaRegular = null;

    /**
     * Percentual de diferimento para o IBS estadual.
     */
    public $percentualDiferimentoUf = null;

    /**
     * Percentual de diferimento para o IBS municipal.
     */
    public $percentualDiferimentoMunicipal = null;

    /**
     * Percentual de diferimento para a CBS.
     */
    public $percentualDiferimentoCbs = null;
}

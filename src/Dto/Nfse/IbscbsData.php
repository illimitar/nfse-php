<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class IbscbsData extends Dto
{
    public static $__mapFrom = array (
  'indicadorUsoConsumoPessoal' => 'indFinal',
  'codigoIndicadorOperacao' => 'cIndOp',
  'chavesNfseReferenciadas' => 'gRefNFSe.refNFSe',
  'destinatario' => 'dest',
  'imovel' => 'imovel',
  'bensMoveis' => 'bensMoveis',
  'cst' => 'valores.trib.CST',
  'codigoClassificacaoTributaria' => 'valores.trib.cClassTrib',
  'codigoCreditoPresumido' => 'valores.trib.gIBSCBS.cCredPres',
  'cstTributacaoRegular' => 'valores.trib.gIBSCBS.gTribRegular.CSTReg',
  'codigoClassificacaoTributariaRegular' => 'valores.trib.gIBSCBS.gTribRegular.cClassTribReg',
  'percentualDiferimentoUf' => 'valores.trib.gIBSCBS.gDif.pDifUF',
  'percentualDiferimentoMunicipal' => 'valores.trib.gIBSCBS.gDif.pDifMun',
  'percentualDiferimentoCbs' => 'valores.trib.gIBSCBS.gDif.pDifCBS',
  'tipoOperacao' => 'tpOper',
  'tipoEnteGovernamental' => 'tpEnteGov',
  'indicadorDestinatario' => 'indDest'
);
    /** @var array */
    public static $__castWith = array (
  'codigoIndicadorOperacao' => array (
    'caster' => 'Nfse\\Support\\DTO\\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\\Enums\\CodigoIndicadorOperacao'
    )
  ),
  'tipoOperacao' => array (
    'caster' => 'Nfse\\Support\\DTO\\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\\Enums\\TipoOperacaoRtc'
    )
  ),
  'tipoEnteGovernamental' => array (
    'caster' => 'Nfse\\Support\\DTO\\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\\Enums\\TipoEnteGovernamental'
    )
  ),
  'indicadorDestinatario' => array (
    'caster' => 'Nfse\\Support\\DTO\\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\\Enums\\IndicadorDestinatario'
    )
  ),
  'bensMoveis' => array (
    'caster' => 'Nfse\\Support\\DTO\\ArrayCaster',
    'args' => array (
      'itemType' => 'Nfse\\Dto\\Nfse\\BemMovelData'
    )
  )
);
    public static $__propertyTypes = array (
  'indicadorUsoConsumoPessoal' => '?int',
  'codigoIndicadorOperacao' => '?string',
  'tipoOperacao' => '?TipoOperacaoRtc',
  'chavesNfseReferenciadas' => '?array',
  'tipoEnteGovernamental' => '?TipoEnteGovernamental',
  'indicadorDestinatario' => '?IndicadorDestinatario',
  'destinatario' => '?TomadorData',
  'imovel' => '?ImovelData',
  'bensMoveis' => '?array',
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
     * Indica operação de uso ou consumo pessoal (art. 57).
     * 0 - Não
     * 1 - Sim
     */
    public $indicadorUsoConsumoPessoal = null;

    /**
     * Código indicador da operação de fornecimento.
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
     * Operações relacionadas a bens imóveis, exceto obras.
     */
    public $imovel = null;

    /**
     * Bens móveis objeto de locação.
     *
     * @var BemMovelData[]|null
     */
    public $bensMoveis = null;

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

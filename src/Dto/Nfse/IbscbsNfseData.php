<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class IbscbsNfseData extends Dto
{
    public static $__mapFrom = array (
  'codigoLocalidadeIncidencia' => 'cLocalidadeIncid',
  'nomeLocalidadeIncidencia' => 'xLocalidadeIncid',
  'percentualRedutor' => 'pRedutor',
  'baseCalculo' => 'valores.vBC',
  'valorCalculadoReembolso' => 'valores.vCalcReeRepRes',
  'aliquotaIbsUf' => 'valores.uf.pIBSUF',
  'percentualReducaoAliquotaUf' => 'valores.uf.pRedAliqUF',
  'aliquotaEfetivaUf' => 'valores.uf.pAliqEfetUF',
  'aliquotaIbsMunicipal' => 'valores.mun.pIBSMun',
  'percentualReducaoAliquotaMunicipal' => 'valores.mun.pRedAliqMun',
  'aliquotaEfetivaMunicipal' => 'valores.mun.pAliqEfetMun',
  'aliquotaCbs' => 'valores.fed.pCBS',
  'percentualReducaoAliquotaCbs' => 'valores.fed.pRedAliqCBS',
  'aliquotaEfetivaCbs' => 'valores.fed.pAliqEfetCBS',
  'valorTotalNota' => 'totCIBS.vTotNF',
  'valorTotalIbs' => 'totCIBS.gIBS.vIBSTot',
  'aliquotaCreditoPresumidoIbs' => 'totCIBS.gIBS.gIBSCredPres.pCredPresIBS',
  'valorCreditoPresumidoIbs' => 'totCIBS.gIBS.gIBSCredPres.vCredPresIBS',
  'valorDiferimentoUf' => 'totCIBS.gIBS.gIBSUFTot.vDifUF',
  'valorIbsUf' => 'totCIBS.gIBS.gIBSUFTot.vIBSUF',
  'valorDiferimentoMunicipal' => 'totCIBS.gIBS.gIBSMunTot.vDifMun',
  'valorIbsMunicipal' => 'totCIBS.gIBS.gIBSMunTot.vIBSMun',
  'aliquotaCreditoPresumidoCbs' => 'totCIBS.gCBS.gCBSCredPres.pCredPresCBS',
  'valorCreditoPresumidoCbs' => 'totCIBS.gCBS.gCBSCredPres.vCredPresCBS',
  'valorDiferimentoCbs' => 'totCIBS.gCBS.vDifCBS',
  'valorCbs' => 'totCIBS.gCBS.vCBS',
  'aliquotaEfetivaRegularIbsUf' => 'totCIBS.gTribRegular.pAliqEfeRegIBSUF',
  'valorTributacaoRegularIbsUf' => 'totCIBS.gTribRegular.vTribRegIBSUF',
  'aliquotaEfetivaRegularIbsMunicipal' => 'totCIBS.gTribRegular.pAliqEfeRegIBSMun',
  'valorTributacaoRegularIbsMunicipal' => 'totCIBS.gTribRegular.vTribRegIBSMun',
  'aliquotaEfetivaRegularCbs' => 'totCIBS.gTribRegular.pAliqEfeRegCBS',
  'valorTributacaoRegularCbs' => 'totCIBS.gTribRegular.vTribRegCBS',
  'aliquotaCompraGovIbsUf' => 'totCIBS.gTribCompraGov.pIBSUF',
  'valorCompraGovIbsUf' => 'totCIBS.gTribCompraGov.vIBSUF',
  'aliquotaCompraGovIbsMunicipal' => 'totCIBS.gTribCompraGov.pIBSMun',
  'valorCompraGovIbsMunicipal' => 'totCIBS.gTribCompraGov.vIBSMun',
  'aliquotaCompraGovCbs' => 'totCIBS.gTribCompraGov.pCBS',
  'valorCompraGovCbs' => 'totCIBS.gTribCompraGov.vCBS'
);
    public static $__propertyTypes = array (
  'codigoLocalidadeIncidencia' => '?string',
  'nomeLocalidadeIncidencia' => '?string',
  'percentualRedutor' => '?float',
  'baseCalculo' => '?float',
  'valorCalculadoReembolso' => '?float',
  'aliquotaIbsUf' => '?float',
  'percentualReducaoAliquotaUf' => '?float',
  'aliquotaEfetivaUf' => '?float',
  'aliquotaIbsMunicipal' => '?float',
  'percentualReducaoAliquotaMunicipal' => '?float',
  'aliquotaEfetivaMunicipal' => '?float',
  'aliquotaCbs' => '?float',
  'percentualReducaoAliquotaCbs' => '?float',
  'aliquotaEfetivaCbs' => '?float',
  'valorTotalNota' => '?float',
  'valorTotalIbs' => '?float',
  'aliquotaCreditoPresumidoIbs' => '?float',
  'valorCreditoPresumidoIbs' => '?float',
  'valorDiferimentoUf' => '?float',
  'valorIbsUf' => '?float',
  'valorDiferimentoMunicipal' => '?float',
  'valorIbsMunicipal' => '?float',
  'aliquotaCreditoPresumidoCbs' => '?float',
  'valorCreditoPresumidoCbs' => '?float',
  'valorDiferimentoCbs' => '?float',
  'valorCbs' => '?float',
  'aliquotaEfetivaRegularIbsUf' => '?float',
  'valorTributacaoRegularIbsUf' => '?float',
  'aliquotaEfetivaRegularIbsMunicipal' => '?float',
  'valorTributacaoRegularIbsMunicipal' => '?float',
  'aliquotaEfetivaRegularCbs' => '?float',
  'valorTributacaoRegularCbs' => '?float',
  'aliquotaCompraGovIbsUf' => '?float',
  'valorCompraGovIbsUf' => '?float',
  'aliquotaCompraGovIbsMunicipal' => '?float',
  'valorCompraGovIbsMunicipal' => '?float',
  'aliquotaCompraGovCbs' => '?float',
  'valorCompraGovCbs' => '?float'
);


    /**
     * Código IBGE da localidade de incidência do IBS/CBS (local da operação).
     */
    public $codigoLocalidadeIncidencia = null;

    /**
     * Nome da localidade de incidência do IBS/CBS.
     */
    public $nomeLocalidadeIncidencia = null;

    /**
     * Percentual de redução de alíquota em compra governamental.
     */
    public $percentualRedutor = null;

    /**
     * Valor da base de cálculo do IBS/CBS antes das reduções.
     */
    public $baseCalculo = null;

    /**
     * Valor total relativo a reembolso, repasse ou ressarcimento que não integra
     * a base de cálculo do ISSQN, do IBS e da CBS.
     */
    public $valorCalculadoReembolso = null;

    /**
     * Alíquota da UF para IBS da localidade de incidência.
     */
    public $aliquotaIbsUf = null;

    /**
     * Percentual de redução de alíquota estadual.
     */
    public $percentualReducaoAliquotaUf = null;

    /**
     * Alíquota efetiva da UF para IBS.
     */
    public $aliquotaEfetivaUf = null;

    /**
     * Alíquota do Município para IBS da localidade de incidência.
     */
    public $aliquotaIbsMunicipal = null;

    /**
     * Percentual de redução de alíquota municipal.
     */
    public $percentualReducaoAliquotaMunicipal = null;

    /**
     * Alíquota efetiva do Município para IBS.
     */
    public $aliquotaEfetivaMunicipal = null;

    /**
     * Alíquota da União para CBS.
     */
    public $aliquotaCbs = null;

    /**
     * Percentual de redução de alíquota da CBS.
     */
    public $percentualReducaoAliquotaCbs = null;

    /**
     * Alíquota efetiva da União para CBS.
     */
    public $aliquotaEfetivaCbs = null;

    /**
     * Valor total da NFS-e considerando os impostos por fora (IBS e CBS).
     */
    public $valorTotalNota = null;

    /**
     * Valor total do IBS.
     */
    public $valorTotalIbs = null;

    /**
     * Alíquota do crédito presumido para o IBS.
     */
    public $aliquotaCreditoPresumidoIbs = null;

    /**
     * Valor do crédito presumido para o IBS.
     */
    public $valorCreditoPresumidoIbs = null;

    /**
     * Total do diferimento do IBS estadual.
     */
    public $valorDiferimentoUf = null;

    /**
     * Total do valor do IBS estadual.
     */
    public $valorIbsUf = null;

    /**
     * Total do diferimento do IBS municipal.
     */
    public $valorDiferimentoMunicipal = null;

    /**
     * Total do valor do IBS municipal.
     */
    public $valorIbsMunicipal = null;

    /**
     * Alíquota do crédito presumido para a CBS.
     */
    public $aliquotaCreditoPresumidoCbs = null;

    /**
     * Valor do crédito presumido da CBS.
     */
    public $valorCreditoPresumidoCbs = null;

    /**
     * Total do diferimento da CBS.
     */
    public $valorDiferimentoCbs = null;

    /**
     * Total do valor da CBS da União.
     */
    public $valorCbs = null;

    /**
     * Alíquota efetiva de tributação regular do IBS estadual.
     */
    public $aliquotaEfetivaRegularIbsUf = null;

    /**
     * Valor da tributação regular do IBS estadual.
     */
    public $valorTributacaoRegularIbsUf = null;

    /**
     * Alíquota efetiva de tributação regular do IBS municipal.
     */
    public $aliquotaEfetivaRegularIbsMunicipal = null;

    /**
     * Valor da tributação regular do IBS municipal.
     */
    public $valorTributacaoRegularIbsMunicipal = null;

    /**
     * Alíquota efetiva de tributação regular da CBS.
     */
    public $aliquotaEfetivaRegularCbs = null;

    /**
     * Valor da tributação regular da CBS.
     */
    public $valorTributacaoRegularCbs = null;

    /**
     * Alíquota do IBS de competência do Estado em compras governamentais.
     */
    public $aliquotaCompraGovIbsUf = null;

    /**
     * Valor do tributo do IBS da UF calculado em compras governamentais.
     */
    public $valorCompraGovIbsUf = null;

    /**
     * Alíquota do IBS de competência do Município em compras governamentais.
     */
    public $aliquotaCompraGovIbsMunicipal = null;

    /**
     * Valor do tributo do IBS do Município calculado em compras governamentais.
     */
    public $valorCompraGovIbsMunicipal = null;

    /**
     * Alíquota da CBS em compras governamentais.
     */
    public $aliquotaCompraGovCbs = null;

    /**
     * Valor do tributo da CBS calculado em compras governamentais.
     */
    public $valorCompraGovCbs = null;
}

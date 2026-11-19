<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class ValoresNfseData extends Dto
{
    public static $__mapFrom = array (
  'valorCalculadoDeducaoReducao' => 'vCalcDR',
  'tipoBeneficioMunicipal' => 'tpBM',
  'valorCalculadoBeneficioMunicipal' => 'vCalcBM',
  'baseCalculo' => 'vBC',
  'aliquotaAplicada' => 'pAliqAplic',
  'valorIssqn' => 'vISSQN',
  'valorTotalRetido' => 'vTotalRet',
  'valorLiquido' => 'vLiq'
);
    public static $__propertyTypes = array (
  'valorCalculadoDeducaoReducao' => '?float',
  'tipoBeneficioMunicipal' => '?int',
  'valorCalculadoBeneficioMunicipal' => '?float',
  'baseCalculo' => '?float',
  'aliquotaAplicada' => '?float',
  'valorIssqn' => '?float',
  'valorTotalRetido' => '?float',
  'valorLiquido' => '?float'
);


    /**
     * Valor calculado de Dedução/Redução.
     */
    public $valorCalculadoDeducaoReducao = null;

    /**
     * Tipo de Benefício Municipal.
     */
    public $tipoBeneficioMunicipal = null;

    /**
     * Valor calculado de Benefício Municipal.
     */
    public $valorCalculadoBeneficioMunicipal = null;

    /**
     * Valor da Base de Cálculo.
     */
    public $baseCalculo = null;

    /**
     * Alíquota Aplicada.
     */
    public $aliquotaAplicada = null;

    /**
     * Valor do ISSQN.
     */
    public $valorIssqn = null;

    /**
     * Valor Total Retido.
     */
    public $valorTotalRetido = null;

    /**
     * Valor Líquido da NFS-e.
     */
    public $valorLiquido = null;
}

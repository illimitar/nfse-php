<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class BeneficioMunicipalData extends Dto
{
    public static $__mapFrom = array (
  'codigoBeneficio' => 'nBM',
  'percentualReducaoBcBm' => 'pRedBCBM',
  'valorReducaoBcBm' => 'vRedBCBM'
);
    public static $__propertyTypes = array (
  'codigoBeneficio' => '?string',
  'percentualReducaoBcBm' => '?float',
  'valorReducaoBcBm' => '?float'
);


    /**
     * Código de identificação do Benefício Municipal.
     */
    public $codigoBeneficio = null;

    /**
     * Percentual de redução da base de cálculo referente ao benefício municipal.
     */
    public $percentualReducaoBcBm = null;

    /**
     * Valor monetário de redução da base de cálculo referente ao benefício municipal.
     */
    public $valorReducaoBcBm = null;
}

<?php

namespace Nfse\Dto\Http;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class ParametrosConfiguracaoConvenioDto extends Dto
{
    public static $__mapFrom = array (
  'aderenteAmbienteNacional' => 'aderenteAmbienteNacional',
  'aderenteEmissorNacional' => 'aderenteEmissorNacional',
  'situacaoEmissaoPadraoContribuintesRFB' => 'situacaoEmissaoPadraoContribuintesRFB',
  'aderenteMAN' => 'aderenteMAN',
  'permiteAproveitametoDeCreditos' => 'permiteAproveitametoDeCreditos'
);
    public static $__propertyTypes = array (
  'aderenteAmbienteNacional' => '?int',
  'aderenteEmissorNacional' => '?int',
  'situacaoEmissaoPadraoContribuintesRFB' => '?int',
  'aderenteMAN' => '?int',
  'permiteAproveitametoDeCreditos' => '?bool'
);


    public $aderenteAmbienteNacional = null;

    public $aderenteEmissorNacional = null;

    public $situacaoEmissaoPadraoContribuintesRFB = null;

    public $aderenteMAN = null;

    public $permiteAproveitametoDeCreditos = null;
}

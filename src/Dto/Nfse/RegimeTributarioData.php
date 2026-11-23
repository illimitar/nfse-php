<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Nfse\Enums\OpcaoSimplesNacional;
use Nfse\Enums\RegimeApuracaoIbsCbsSn;
use Nfse\Enums\RegimeApuracaoSN;
use Nfse\Enums\RegimeEspecialTributacao;
use Nfse\Support\DTO\EnumCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\MapFrom;

class RegimeTributarioData extends Dto
{
    public static $__mapFrom = array (
      'opcaoSimplesNacional' => 'opSimpNac',
      'regimeApuracaoTributosSn' => 'regApTribSN',
      'regimeApuracaoIbsCbsSn' => 'regApIBSCBSSN',
      'regimeEspecialTributacao' => 'regEspTrib'
    );
    /** @var array */
    public static $__castWith = array (
  'opcaoSimplesNacional' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\OpcaoSimplesNacional'
    )
  ),
  'regimeApuracaoTributosSn' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\RegimeApuracaoSN'
    )
  ),
  'regimeApuracaoIbsCbsSn' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\RegimeApuracaoIbsCbsSn'
    )
  ),
  'regimeEspecialTributacao' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\RegimeEspecialTributacao'
    )
  )
);
    
    public static $__propertyTypes = array (
      'opcaoSimplesNacional' => '?OpcaoSimplesNacional',
      'regimeApuracaoTributosSn' => '?RegimeApuracaoSN',
      'regimeApuracaoIbsCbsSn' => '?RegimeApuracaoIbsCbsSn',
      'regimeEspecialTributacao' => '?RegimeEspecialTributacao'
    );


    /**
     * Opção pelo Simples Nacional.
     * 1 - Não Optante
     * 2 - Optante - Microempreendedor Individual (MEI)
     * 3 - Optante - Microempresa ou Empresa de Pequeno Porte (ME/EPP)
     */
    public $opcaoSimplesNacional = null;

    /**
     * Regime de apuração dos tributos (SN).
     * Obrigatório se opSimpNac = 3.
     * 1 - Regime de apuração dos tributos federais e municipal pelo SN
     * 2 - Regime de apuração dos tributos federais pelo SN e municipal pelo regime normal (ISSQN)
     */
    public $regimeApuracaoTributosSn = null;

    /**
     * Regime de apuração do IBS e da CBS para optantes do Simples Nacional.
     * Obrigatório quando opSimpNac = 3 ou 4.
     *
     * 1 - IBS e CBS apurados pelo SN;
     * 2 - CBS apurada pelo SN e IBS pelo regime regular;
     * 3 - IBS e CBS apurados pelo regime regular.
     */
    public $regimeApuracaoIbsCbsSn = null;

    /**
     * Regime Especial de Tributação.
     * 0 - Nenhum
     * 1 - Ato Cooperado (Cooperativa)
     * 2 - Estimativa
     * 3 - Microempresa Municipal
     * 4 - Notário ou Registrador
     * 5 - Profissional Autônomo
     * 6 - Sociedade de Profissionais
     */
    public $regimeEspecialTributacao = null;
}

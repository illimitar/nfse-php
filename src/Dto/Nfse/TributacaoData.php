<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Nfse\Enums\CstPisCofins;
use Nfse\Enums\IndicadorTotalTributos;
use Nfse\Enums\TipoImunidade;
use Nfse\Enums\TipoRetencaoIssqn;
use Nfse\Enums\TipoRetencaoPisCofins;
use Nfse\Enums\TipoSuspensao;
use Nfse\Enums\TributacaoIssqn;
use Nfse\Support\DTO\EnumCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\MapFrom;

class TributacaoData extends Dto
{
    public static $__mapFrom = array (
      'tributacaoIssqn' => 'tribMun.tribISSQN',
      'tipoImunidade' => 'tribMun.tpImunidade',
      'tipoRetencaoIssqn' => 'tribMun.tpRetISSQN',
      'aliquota' => 'tribMun.pAliq',
      'tipoSuspensao' => 'tribMun.exigSusp.tpSusp',
      'numeroProcessoSuspensao' => 'tribMun.exigSusp.nProcesso',
      'beneficioMunicipal' => 'tribMun.BM',
      'cstPisCofins' => 'tribFed.piscofins.CST',
      'baseCalculoPisCofins' => 'tribFed.piscofins.vBCPisCofins',
      'aliquotaPis' => 'tribFed.piscofins.pAliqPis',
      'aliquotaCofins' => 'tribFed.piscofins.pAliqCofins',
      'valorPis' => 'tribFed.piscofins.vPis',
      'valorCofins' => 'tribFed.piscofins.vCofins',
      'tipoRetencaoPisCofins' => 'tribFed.piscofins.tpRetPisCofins',
      'valorRetidoIrrf' => 'tribFed.vRetIRRF',
      'valorRetidoCsll' => 'tribFed.vRetCSLL',
      'valorTotalTributosFederais' => 'totTrib.vTotTrib.vTotTribFed',
      'valorTotalTributosEstaduais' => 'totTrib.vTotTrib.vTotTribEst',
      'valorTotalTributosMunicipais' => 'totTrib.vTotTrib.vTotTribMun',
      'percentualTotalTributosSN' => 'totTrib.pTotTribSN',
      'percentualTotalTributosFederais' => 'totTrib.pTotTrib.pTotTribFed',
      'percentualTotalTributosEstaduais' => 'totTrib.pTotTrib.pTotTribEst',
      'percentualTotalTributosMunicipais' => 'totTrib.pTotTrib.pTotTribMun',
      'indicadorTotalTributos' => 'totTrib.indTotTrib'
    );
    /** @var array */
    public static $__castWith = array (
  'tributacaoIssqn' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\TributacaoIssqn'
    )
  ),
  'tipoImunidade' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\TipoImunidade'
    )
  ),
  'tipoRetencaoIssqn' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\TipoRetencaoIssqn'
    )
  ),
  'tipoSuspensao' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\TipoSuspensao'
    )
  ),
  'cstPisCofins' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\CstPisCofins'
    )
  ),
  'tipoRetencaoPisCofins' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\TipoRetencaoPisCofins'
    )
  ),
  'indicadorTotalTributos' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\IndicadorTotalTributos'
    )
  )
);
    public static $__propertyTypes = array (
      'tributacaoIssqn' => '?TributacaoIssqn',
      'tipoImunidade' => '?TipoImunidade',
      'tipoRetencaoIssqn' => '?TipoRetencaoIssqn',
      'aliquota' => '?float',
      'tipoSuspensao' => '?TipoSuspensao',
      'numeroProcessoSuspensao' => '?string',
      'beneficioMunicipal' => '?BeneficioMunicipalData',
      'cstPisCofins' => '?CstPisCofins',
      'baseCalculoPisCofins' => '?float',
      'aliquotaPis' => '?float',
      'aliquotaCofins' => '?float',
      'valorPis' => '?float',
      'valorCofins' => '?float',
      'tipoRetencaoPisCofins' => '?TipoRetencaoPisCofins',
      'valorRetidoIrrf' => '?float',
      'valorRetidoCsll' => '?float',
      'valorTotalTributosFederais' => '?float',
      'valorTotalTributosEstaduais' => '?float',
      'valorTotalTributosMunicipais' => '?float',
      'percentualTotalTributosSN' => '?float',
      'percentualTotalTributosFederais' => '?float',
      'percentualTotalTributosEstaduais' => '?float',
      'percentualTotalTributosMunicipais' => '?float',
      'indicadorTotalTributos' => '?IndicadorTotalTributos'
    );


    /**
     * Tributação do ISSQN.
     * 1 - Operação tributável
     * 2 - Imunidade
     * 3 - Exportação de serviço
     * 4 - Não Incidência
     */
    public $tributacaoIssqn = null;

    /**
     * Tipo de imunidade.
     * Obrigatório se tribISSQN = 2.
     * 0 - Imunidade (tipo não informado na nota de origem)
     * 1 - Patrimônio, renda ou serviços, uns dos outros (CF88, Art 150, VI, a)
     * 2 - Templos de qualquer culto (CF88, Art 150, VI, b)
     * 3 - Patrimônio, renda ou serviços dos partidos políticos, inclusive suas fundações, das entidades sindicais dos trabalhadores, das instituições de educação e de assistência social, sem fins lucrativos, atendidos os requisitos da lei (CF88, Art 150, VI, c)
     * 4 - Livros, jornais, periódicos e o papel destinado a sua impressão (CF88, Art 150, VI, d)
     */
    public $tipoImunidade = null;

    /**
     * Tipo de retencao do ISSQN.
     * 1 - Não Retido
     * 2 - Retido pelo Tomador
     * 3 - Retido pelo Intermediario
     */
    public $tipoRetencaoIssqn = null;

    /**
     * Alíquota do ISSQN.
     */
    public $aliquota = null;

    /**
     * Suspensão da exigibilidade do ISSQN.
     * 1 - Suspenso por decisão judicial
     * 2 - Suspenso por decisão administrativa
     */
    public $tipoSuspensao = null;

    /**
     * Número do processo judicial ou administrativo de suspensão da exigibilidade.
     */
    public $numeroProcessoSuspensao = null;

    /**
     * Benefício Municipal.
     */
    public $beneficioMunicipal = null;

    /**
     * Código da Situação Tributária do PIS/COFINS.
     */
    public $cstPisCofins = null;

    /**
     * Base de cálculo PIS/COFINS.
     */
    public $baseCalculoPisCofins = null;

    /**
     * Alíquota PIS.
     */
    public $aliquotaPis = null;

    /**
     * Alíquota COFINS.
     */
    public $aliquotaCofins = null;

    /**
     * Valor PIS (R$).
     *
     * NT 007/2026: este campo registra o valor de PIS como débito de apuração
     * própria do prestador. Não deve ser usado para informar valores retidos.
     * Para retenção, consolidar no campo vRetCSLL.
     */
    public $valorPis = null;

    /**
     * Valor COFINS (R$).
     *
     * NT 007/2026: este campo registra o valor de COFINS como débito de apuração
     * própria do prestador. Não deve ser usado para informar valores retidos.
     * Para retenção, consolidar no campo vRetCSLL.
     */
    public $valorCofins = null;

    /**
     * Tipo de Retenção PIS/COFINS e CSLL.
     *
     * Códigos 0 e 3-9 definidos pela NT 007/2026. Atualmente o schema
     * aceita apenas os códigos 1 e 2. Os demais serão habilitados quando
     * os grupos IBSCBS se tornarem obrigatórios.
     *
     * @see TipoRetencaoPisCofins
     */
    public $tipoRetencaoPisCofins = null;

    /**
     * Valor retido de IRRF (R$).
     */
    public $valorRetidoIrrf = null;

    /**
     * Valor retido de contribuições sociais (R$).
     *
     * NT 007/2026: se houver retenções de PIS, COFINS e/ou CSLL, elas
     * devem ser SOMADAS e informadas neste campo, de acordo com o tipo
     * de retenção indicado em tpRetPisCofins.
     *
     * Exemplo: para tpRetPisCofins=1 (PIS/COFINS Retido) com CSLL também
     * retida, este campo deve conter: PIS retido + COFINS retido + CSLL retida.
     *
     * @see TipoRetencaoPisCofins::isRetidoPis()
     * @see TipoRetencaoPisCofins::isRetidoCofins()
     * @see TipoRetencaoPisCofins::isRetidoCsll()
     */
    public $valorRetidoCsll = null;

    /**
     * Valor total dos tributos federais.
     */
    public $valorTotalTributosFederais = null;

    /**
     * Valor total dos tributos estaduais.
     */
    public $valorTotalTributosEstaduais = null;

    /**
     * Valor total dos tributos municipais.
     */
    public $valorTotalTributosMunicipais = null;

    /**
     * Valor percentual total aproximado dos tributos federais, estaduais e municipais.
     */
    public $percentualTotalTributosSN = null;

    /**
     * Percentual total aproximado dos tributos federais.
     */
    public $percentualTotalTributosFederais = null;

    /**
     * Percentual total aproximado dos tributos estaduais.
     */
    public $percentualTotalTributosEstaduais = null;

    /**
     * Percentual total aproximado dos tributos municipais.
     */
    public $percentualTotalTributosMunicipais = null;

    /**
     * Indicador de informação de valor total de tributos.
     * 0 - Nenhum
     */
    public $indicadorTotalTributos = null;
}

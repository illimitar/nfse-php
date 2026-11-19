<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Nfse\Enums\ModoPrestacao;
use Nfse\Enums\MovimentacaoTemporariaBens;
use Nfse\Enums\TipoPessoa;
use Nfse\Support\DTO\EnumCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\MapFrom;

class ComercioExteriorData extends Dto
{
    public static $__mapFrom = array (
  'vinculoPrestacao' => 'vincPrest',
  'nifExportador' => 'NIFExport',
  'codigoPaisExportador' => 'cPaisExport',
  'codigoMecanismoApoioFomento' => 'cMecAFComex',
  'numeroEnquadramento' => 'nEnquad',
  'numeroProcesso' => 'nProc',
  'indicadorIncentivo' => 'indIncentivo',
  'descricaoIncentivo' => 'xDescIncentivo',
  'tipoMoeda' => 'tpMoeda',
  'valorServicoMoeda' => 'vServMoeda',
  'mecanismoApoioComexPrestador' => 'mecAFComexP',
  'mecanismoApoioComexTomador' => 'mecAFComexT',
  'numeroDeclaracaoImportacao' => 'nDI',
  'numeroRegistroExportacao' => 'nRE',
  'mdic' => 'mdic'
);
    public static $__propertyTypes = array (
  'modoPrestacao' => '?ModoPrestacao',
  'vinculoPrestacao' => '?int',
  'tipoPessoaExportador' => '?TipoPessoa',
  'nifExportador' => '?string',
  'codigoPaisExportador' => '?string',
  'codigoMecanismoApoioFomento' => '?string',
  'numeroEnquadramento' => '?string',
  'numeroProcesso' => '?string',
  'indicadorIncentivo' => '?int',
  'descricaoIncentivo' => '?string',
  'tipoMoeda' => '?string',
  'valorServicoMoeda' => '?float',
  'mecanismoApoioComexPrestador' => '?string',
  'mecanismoApoioComexTomador' => '?string',
  'movimentacaoTemporariaBens' => '?MovimentacaoTemporariaBens',
  'numeroDeclaracaoImportacao' => '?string',
  'numeroRegistroExportacao' => '?string',
  'mdic' => '?string'
);


    /**
     * Modo de prestação do serviço.
     * 1 - Transfronteiriço
     * 2 - Consumo no Brasil
     * 3 - Presença Comercial no Exterior
     * 4 - Movimento Temporário de Pessoas Físicas
     */
    public $modoPrestacao = null;

    /**
     * Vínculo entre as partes no negócio.
     * 1 - Sem vínculo
     * 2 - Com vínculo
     */
    public $vinculoPrestacao = null;

    /**
     * Tipo de pessoa do exportador.
     * 1 - Pessoa Jurídica
     * 2 - Pessoa Física
     */
    public $tipoPessoaExportador = null;

    /**
     * NIF do exportador.
     */
    public $nifExportador = null;

    /**
     * Código do país do exportador.
     */
    public $codigoPaisExportador = null;

    /**
     * Código do mecanismo de apoio/fomento.
     */
    public $codigoMecanismoApoioFomento = null;

    /**
     * Número do enquadramento.
     */
    public $numeroEnquadramento = null;

    /**
     * Número do processo.
     */
    public $numeroProcesso = null;

    /**
     * Indicador de incentivo fiscal.
     * 1 - Sim
     * 2 - Não
     */
    public $indicadorIncentivo = null;

    /**
     * Descrição do incentivo fiscal.
     */
    public $descricaoIncentivo = null;

    /**
     * Código da moeda da transação (ISO 4217).
     */
    public $tipoMoeda = null;

    /**
     * Valor do serviço na moeda estrangeira.
     */
    public $valorServicoMoeda = null;

    /**
     * Mecanismo de apoio/fomento ao Comércio Exterior utilizado pelo prestador.
     */
    public $mecanismoApoioComexPrestador = null;

    /**
     * Mecanismo de apoio/fomento ao Comércio Exterior utilizado pelo tomador.
     */
    public $mecanismoApoioComexTomador = null;

    /**
     * Movimentação temporária de bens.
     */
    public $movimentacaoTemporariaBens = null;

    /**
     * Número da Declaração de Importação (DI/DSI/DA/DRI-E) averbada.
     */
    public $numeroDeclaracaoImportacao = null;

    /**
     * Número do Registro de Exportação (RE) averbado.
     */
    public $numeroRegistroExportacao = null;

    /**
     * Compartilhamento de dados com o MDIC.
     * 1 - Sim
     * 2 - Não
     */
    public $mdic = null;
}

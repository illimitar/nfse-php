<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class ComercioExteriorData extends Dto
{
    public static $__mapFrom = array (
  'modoPrestacao' => 'mdPrestacao',
  'vinculoPrestacao' => 'vincPrest',
  'tipoMoeda' => 'tpMoeda',
  'valorServicoMoeda' => 'vServMoeda',
  'mecanismoApoioComexPrestador' => 'mecAFComexP',
  'mecanismoApoioComexTomador' => 'mecAFComexT',
  'movimentacaoTemporariaBens' => 'movTempBens',
  'numeroDeclaracaoImportacao' => 'nDI',
  'numeroRegistroExportacao' => 'nRE',
  'mdic' => 'mdic'
);
    /** @var array */
    public static $__castWith = array (
  'modoPrestacao' => array (
    'caster' => 'Nfse\\Support\\DTO\\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\\Enums\\ModoPrestacao'
    )
  ),
  'movimentacaoTemporariaBens' => array (
    'caster' => 'Nfse\\Support\\DTO\\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\\Enums\\MovimentacaoTemporariaBens'
    )
  )
);
    public static $__propertyTypes = array (
  'modoPrestacao' => '?ModoPrestacao',
  'vinculoPrestacao' => '?int',
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
     * 0 - Desconhecido
     * 1 - Transfronteiriço
     * 2 - Consumo no Brasil
     * 3 - Movimento temporário de pessoas físicas
     * 4 - Consumo no exterior
     */
    public $modoPrestacao = null;

    /**
     * Vínculo entre as partes no negócio.
     * 0 - Sem vínculo
     * 1 - Controlada
     * 2 - Controladora
     * 3 - Coligada
     * 4 - Matriz
     * 5 - Filial ou sucursal
     * 6 - Outro vínculo
     * 9 - Desconhecido
     */
    public $vinculoPrestacao = null;

    /**
     * Código da moeda da transação (tabela do Banco Central).
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
     * Vínculo da operação à movimentação temporária de bens.
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
     * Envio das informações ao MDIC.
     * 0 - Não enviar
     * 1 - Enviar
     */
    public $mdic = null;
}

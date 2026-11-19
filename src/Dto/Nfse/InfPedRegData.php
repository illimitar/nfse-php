<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class InfPedRegData extends Dto
{
    public static $__mapFrom = array (
  'id' => '@attributes.Id',
  'tipoAmbiente' => 'tpAmb',
  'versaoAplicativo' => 'verAplic',
  'dataHoraEvento' => 'dhEvento',
  'chaveNfse' => 'chNFSe',
  'cnpjAutor' => 'CNPJAutor',
  'cpfAutor' => 'CPFAutor',
  'nPedRegEvento' => 'nPedRegEvento',
  'e101101' => 'e101101',
  'e105102' => 'e105102',
  'e101103' => 'e101103',
  'e105104' => 'e105104',
  'e105105' => 'e105105',
  'e305101' => 'e305101',
  'e202201' => 'e202201',
  'e203202' => 'e203202',
  'e204203' => 'e204203',
  'e205204' => 'e205204',
  'e202205' => 'e202205',
  'e203206' => 'e203206',
  'e204207' => 'e204207',
  'e205208' => 'e205208',
  'e305102' => 'e305102',
  'e305103' => 'e305103'
);
    public static $__propertyTypes = array (
  'id' => '?string',
  'tipoAmbiente' => '?int',
  'versaoAplicativo' => '?string',
  'dataHoraEvento' => '?string',
  'chaveNfse' => '?string',
  'cnpjAutor' => '?string',
  'cpfAutor' => '?string',
  'nPedRegEvento' => 'int',
  'e101101' => '?CancelamentoData',
  'e105102' => '?CancelamentoSubstituicaoData',
  'e101103' => '?AnaliseFiscalSolicitacaoData',
  'e105104' => '?AnaliseFiscalData',
  'e105105' => '?AnaliseFiscalData',
  'e305101' => '?CancelamentoPorOficioData',
  'e202201' => '?ConfirmacaoPrestadorData',
  'e203202' => '?ConfirmacaoTomadorData',
  'e204203' => '?ConfirmacaoIntermediarioData',
  'e205204' => '?ConfirmacaoTacitaData',
  'e202205' => '?RejeicaoPrestadorData',
  'e203206' => '?RejeicaoTomadorData',
  'e204207' => '?RejeicaoIntermediarioData',
  'e205208' => '?AnulacaoRejeicaoData',
  'e305102' => '?BloqueioPorOficioData',
  'e305103' => '?DesbloqueioPorOficioData'
);


    public $id = null;

    public $tipoAmbiente = null;

    public $versaoAplicativo = null;

    public $dataHoraEvento = null;

    public $chaveNfse = null;

    public $cnpjAutor = null;

    public $cpfAutor = null;

    public $nPedRegEvento = 1;

    public $tipoEvento = '101101';

    /**
     * === CANCELAMENTOS ===
     */
    public $e101101 = null;

    public $e105102 = null;

    public $e101103 = null;

    public $e105104 = null;

    public $e105105 = null;

    public $e305101 = null;

    /**
     * === CONFIRMAÇÕES ===
     */
    public $e202201 = null;

    public $e203202 = null;

    public $e204203 = null;

    public $e205204 = null;

    /**
     * === REJEIÇÕES ===
     */
    public $e202205 = null;

    public $e203206 = null;

    public $e204207 = null;

    public $e205208 = null;

    /**
     * === AÇÕES POR OFÍCIO ===
     */
    public $e305102 = null;

    public $e305103 = null;
}

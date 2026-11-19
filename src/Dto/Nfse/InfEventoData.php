<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class InfEventoData extends Dto
{
    public static $__mapFrom = array (
  'id' => '@attributes.Id',
  'versaoAplicativo' => 'verAplic',
  'ambiente' => 'ambGer',
  'numeroSequencialEvento' => 'nSeqEvento',
  'dataHoraProcessamento' => 'dhProc',
  'numeroDfse' => 'nDFSe',
  'pedRegEvento' => 'pedRegEvento'
);
    public static $__propertyTypes = array (
  'id' => '?string',
  'versaoAplicativo' => '?string',
  'ambiente' => '?int',
  'numeroSequencialEvento' => '?int',
  'dataHoraProcessamento' => '?string',
  'numeroDfse' => '?string',
  'pedRegEvento' => '?PedRegEventoData'
);


    public $id = null;

    public $versaoAplicativo = null;

    public $ambiente = null;

    public $numeroSequencialEvento = null;

    public $dataHoraProcessamento = null;

    public $numeroDfse = null;

    public $pedRegEvento = null;
}

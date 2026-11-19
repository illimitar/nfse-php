<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class AnulacaoRejeicaoData extends Dto
{
    public static $__mapFrom = array (
  'descricao' => 'xDesc',
  'cpfAgenteTributario' => 'infAnRej.CPFAgTrib',
  'idEventoManifestacaoRejeicao' => 'infAnRej.idEvManifRej',
  'motivo' => 'infAnRej.xMotivo'
);
    public static $__propertyTypes = array (
  'descricao' => '?string',
  'cpfAgenteTributario' => '?string',
  'idEventoManifestacaoRejeicao' => '?string',
  'motivo' => '?string'
);


    public $descricao = null;

    public $cpfAgenteTributario = null;

    public $idEventoManifestacaoRejeicao = null;

    public $motivo = null;
}

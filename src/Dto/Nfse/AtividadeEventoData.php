<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class AtividadeEventoData extends Dto
{
    public static $__mapFrom = array (
  'nome' => 'xNome',
  'dataInicio' => 'dtIni',
  'dataFim' => 'dtFim',
  'idAtividadeEvento' => 'idAtvEvt',
  'endereco' => 'end'
);
    public static $__propertyTypes = array (
  'nome' => '?string',
  'dataInicio' => '?string',
  'dataFim' => '?string',
  'idAtividadeEvento' => '?string',
  'endereco' => '?EnderecoData'
);


    /**
     * Nome do evento ou atividade.
     */
    public $nome = null;

    /**
     * Data de início do evento.
     * Formato: AAAA-MM-DD
     */
    public $dataInicio = null;

    /**
     * Data de fim do evento.
     * Formato: AAAA-MM-DD
     */
    public $dataFim = null;

    /**
     * Identificador da atividade ou evento.
     */
    public $idAtividadeEvento = null;

    /**
     * Endereço do evento.
     */
    public $endereco = null;
}

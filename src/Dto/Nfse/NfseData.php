<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class NfseData extends Dto
{
    public static $__mapFrom = array (
  'versao' => '@attributes.versao',
  'infNfse' => 'infNFSe',
  'infEvento' => 'infEvento'
);
    public static $__propertyTypes = array (
  'versao' => '?string',
  'infNfse' => '?InfNfseData',
  'infEvento' => '?InfEventoData'
);


    /**
     * Versão do leiaute.
     */
    public $versao = null;

    /**
     * Informações da NFS-e.
     */
    public $infNfse = null;

    /**
     * Informações do Evento.
     */
    public $infEvento = null;

    /**
     * XML original retornado pela API da SEFIN Nacional.
     */
    public $nfseXml = null;
}

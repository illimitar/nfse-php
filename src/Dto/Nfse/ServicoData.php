<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class ServicoData extends Dto
{
    public static $__mapFrom = array (
  'localPrestacao' => 'locPrest',
  'codigoServico' => 'cServ',
  'comercioExterior' => 'comExt',
  'obra' => 'obra',
  'atividadeEvento' => 'atvEvento',
  'informacaoComplemento' => 'infoCompl'
);
    public static $__propertyTypes = array (
  'localPrestacao' => '?LocalPrestacaoData',
  'codigoServico' => '?CodigoServicoData',
  'comercioExterior' => '?ComercioExteriorData',
  'obra' => '?ObraData',
  'atividadeEvento' => '?AtividadeEventoData',
  'informacaoComplemento' => '?InfoComplData'
);


    /**
     * Local da prestação do serviço.
     */
    public $localPrestacao = null;

    /**
     * Código do serviço prestado.
     */
    public $codigoServico = null;

    /**
     * Informações de comércio exterior.
     */
    public $comercioExterior = null;

    /**
     * Informações da obra.
     */
    public $obra = null;

    /**
     * Informações de atividade/evento.
     */
    public $atividadeEvento = null;

    /**
     * Informações complementares do serviço.
     */
    public $informacaoComplemento = null;
}

<?php

namespace Nfse\Dto\Http;

use Nfse\Dto\Dto;

class ConsultaNfseResponse extends Dto
{
    public $tipoAmbiente = null;

    public $versaoAplicativo = null;

    public $dataHoraProcessamento = null;

    public $chaveAcesso = null;

    public $nfseXmlGZipB64 = null;
}

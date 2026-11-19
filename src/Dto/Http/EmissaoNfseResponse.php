<?php

namespace Nfse\Dto\Http;

use Nfse\Dto\Dto;

class EmissaoNfseResponse extends Dto
{
    public $tipoAmbiente = null;

    public $versaoAplicativo = null;

    public $dataHoraProcessamento = null;

    public $idDps = null;

    public $chaveAcesso = null;

    public $nfseXmlGZipB64 = null;

    public $alertas = [];

    public $erros = [];
}

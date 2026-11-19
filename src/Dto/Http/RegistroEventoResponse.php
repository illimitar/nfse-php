<?php

namespace Nfse\Dto\Http;

use Nfse\Dto\Dto;

class RegistroEventoResponse extends Dto
{
    public $tipoAmbiente = null;

    public $versaoAplicativo = null;

    public $dataHoraProcessamento = null;

    public $eventoXmlGZipB64 = null;
}

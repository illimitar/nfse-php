<?php

namespace Nfse\Dto\Http;

use Nfse\Dto\Dto;

class ResultadoConsultaAliquotasResponse extends Dto
{
    public $mensagem = null;

    /**
     * @var AliquotaDto[]
     */
    public $aliquotas = [];
}

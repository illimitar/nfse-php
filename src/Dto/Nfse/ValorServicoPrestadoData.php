<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class ValorServicoPrestadoData extends Dto
{
    public static $__mapFrom = array (
  'valorRecebido' => 'vReceb',
  'valorServico' => 'vServ'
);
    public static $__propertyTypes = array (
  'valorRecebido' => '?float',
  'valorServico' => '?float'
);


    /**
     * Valor recebido pelo intermediário.
     * Obrigatório se tpEmit = 3.
     */
    public $valorRecebido = null;

    /**
     * Valor do serviço prestado.
     */
    public $valorServico = null;
}

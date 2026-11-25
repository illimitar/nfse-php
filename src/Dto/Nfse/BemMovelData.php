<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class BemMovelData extends Dto
{
    public static $__mapFrom = array (
  'codigoNcmBemMovel' => 'cNCMBemMovel',
  'descricaoNcmBemMovel' => 'xNCMBemMovel',
  'quantidadeNcmBemMovel' => 'qtdNCMBemMovel'
);
    public static $__propertyTypes = array (
  'codigoNcmBemMovel' => '?string',
  'descricaoNcmBemMovel' => '?string',
  'quantidadeNcmBemMovel' => '?int'
);

    /**
         * Código NCM do bem móvel.
         */
    public $codigoNcmBemMovel = null;

    /**
         * Descrição do bem móvel.
         */
    public $descricaoNcmBemMovel = null;

    /**
         * Quantidade do bem móvel.
         */
    public $quantidadeNcmBemMovel = null;
}

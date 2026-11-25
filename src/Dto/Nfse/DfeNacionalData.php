<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Nfse\Enums\TipoChaveDFe;

class DfeNacionalData extends Dto
{
    public static $__mapFrom = array (
  'tipoChaveDfe' => 'tipoChaveDFe',
  'descricaoTipoChaveDfe' => 'xTipoChaveDFe',
  'chaveDfe' => 'chaveDFe'
);
    /** @var array */
    public static $__castWith = array (
  'tipoChaveDfe' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\TipoChaveDFe'
    )
  )
);
    public static $__propertyTypes = array (
  'tipoChaveDfe' => '?TipoChaveDFe',
  'descricaoTipoChaveDfe' => '?string',
  'chaveDfe' => '?string'
);

    /**
         * Documento fiscal da chave: 1 NFS-e, 2 NF-e, 3 CT-e, 9 outro.
         */
    public $tipoChaveDfe = null;

    /**
         * Descrição do documento quando o tipo da chave é 9.
         */
    public $descricaoTipoChaveDfe = null;

    /**
         * Chave de acesso do documento fiscal eletrônico.
         */
    public $chaveDfe = null;
}

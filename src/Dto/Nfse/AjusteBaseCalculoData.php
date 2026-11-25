<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class AjusteBaseCalculoData extends Dto
{
    public static $__mapFrom = array (
  'percentualAjusteBaseCalculoIssqn' => 'pAjusteBCISSQN',
  'valorAjusteBaseCalculoIssqn' => 'vAjusteBCISSQN',
  'documentos' => 'documentos.docAjusteBC'
);
    /** @var array */
    public static $__castWith = array (
  'documentos' => array (
    'caster' => 'Nfse\Support\DTO\ArrayCaster',
    'args' => array (
      'itemType' => 'Nfse\Dto\Nfse\DocumentoAjusteBaseCalculoData'
    )
  )
);
    public static $__propertyTypes = array (
  'percentualAjusteBaseCalculoIssqn' => '?float',
  'valorAjusteBaseCalculoIssqn' => '?float',
  'documentos' => '?array'
);

    /**
         * Percentual padrão para ajuste da base de cálculo do ISSQN.
         */
    public $percentualAjusteBaseCalculoIssqn = null;

    /**
         * Valor monetário padrão para ajuste da base de cálculo do ISSQN (R$).
         */
    public $valorAjusteBaseCalculoIssqn = null;

    /**
         * Documentos utilizados para o ajuste da base de cálculo.
         *
         * @var DocumentoAjusteBaseCalculoData[]|null
         */
    public $documentos = null;
}

<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class UnidadeImovelData extends Dto
{
    public static $__mapFrom = array (
  'inscricaoImobiliariaFiscal' => 'inscImobFisc',
  'codigoCib' => 'cCIB',
  'endereco' => 'end',
  'ajustesBaseCalculoLocacao' => 'gAjusteBCLocImoveis'
);
    /** @var array */
    public static $__castWith = array (
  'ajustesBaseCalculoLocacao' => array (
    'caster' => 'Nfse\Support\DTO\ArrayCaster',
    'args' => array (
      'itemType' => 'Nfse\Dto\Nfse\AjusteBaseCalculoLocacaoImovelData'
    )
  )
);
    public static $__propertyTypes = array (
  'inscricaoImobiliariaFiscal' => '?string',
  'codigoCib' => '?string',
  'endereco' => '?EnderecoData',
  'ajustesBaseCalculoLocacao' => '?array'
);

    /**
         * Inscrição imobiliária fiscal da unidade.
         */
    public $inscricaoImobiliariaFiscal = null;

    /**
         * Código do Cadastro Imobiliário Brasileiro (CIB).
         */
    public $codigoCib = null;

    /**
         * Endereço da unidade quando não há CIB.
         */
    public $endereco = null;

    /**
         * Parcelas que não entram na base de cálculo da locação.
         *
         * @var AjusteBaseCalculoLocacaoImovelData[]|null
         */
    public $ajustesBaseCalculoLocacao = null;
}

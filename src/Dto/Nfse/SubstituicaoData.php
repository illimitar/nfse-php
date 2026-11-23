<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Nfse\Enums\MotivoSubstituicao;
use Nfse\Support\DTO\EnumCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\MapFrom;

class SubstituicaoData extends Dto
{
    public static $__mapFrom = array (
  'chaveNfseSubstituida' => 'chSubstda',
  'descricaoMotivo' => 'xMotivo',
  'codigoMotivo' => 'cMotivo'
);
    /** @var array */
    public static $__castWith = array (
  'codigoMotivo' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\MotivoSubstituicao'
    )
  )
);
    public static $__propertyTypes = array (
  'chaveNfseSubstituida' => '?string',
  'codigoMotivo' => '?MotivoSubstituicao',
  'descricaoMotivo' => '?string'
);


    /**
     * Chave de acesso da NFS-e a ser substituída.
     */
    public $chaveNfseSubstituida = null;

    /**
     * Código do motivo da substituição.
     * 01 - Desenquadramento de NFS-e do Simples Nacional
     * 02 - Enquadramento de NFS-e no Simples Nacional
     * 99 - Outros
     */
    public $codigoMotivo = null;

    /**
     * Descrição do motivo da substituição.
     * Obrigatório se cMotivo = 99.
     */
    public $descricaoMotivo = null;
}

<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

/**
 * DTO para evento e105102 - Cancelamento de NFS-e por Substituição
 * Baseado em TE105102 do schema tiposEventos_v1.01.xsd
 */
class CancelamentoSubstituicaoData extends Dto
{
    public static $__mapFrom = array (
  'descricao' => 'xDesc',
  'codigoMotivo' => 'cMotivo',
  'descricaoMotivo' => 'xMotivo',
  'chaveNfseSubstituta' => 'chSubstituta'
);
    public static $__propertyTypes = array (
  'descricao' => '?string',
  'codigoMotivo' => '?string',
  'descricaoMotivo' => '?string',
  'chaveNfseSubstituta' => '?string'
);


    /**
     * Descrição do Evento: "Cancelamento de NFS-e por Substituicao"
     */
    public $descricao = null;

    /**
     * Código de justificativa de cancelamento substituição
     */
    public $codigoMotivo = null;

    /**
     * Descrição para explicitar o motivo indicado neste evento (opcional)
     */
    public $descricaoMotivo = null;

    /**
     * Chave de Acesso da NFS-e substituta
     */
    public $chaveNfseSubstituta = null;
}

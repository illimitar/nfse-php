<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

/**
 * DTO para evento e305101 - Cancelamento de NFS-e Por Ofício
 * Baseado em TE305101 do schema tiposEventos_v1.01.xsd
 * Cancelamento iniciado por determinação ou ordem oficial da administração tributária
 */
class CancelamentoPorOficioData extends Dto
{
    public static $__mapFrom = array (
  'descricao' => 'xDesc',
  'cpfAgenteTributario' => 'CPFAgTrib',
  'numeroProcessoAdministrativo' => 'nProcAdm',
  'descricaoProcessoAdministrativo' => 'xProcAdm'
);
    public static $__propertyTypes = array (
  'descricao' => '?string',
  'cpfAgenteTributario' => '?string',
  'numeroProcessoAdministrativo' => '?string',
  'descricaoProcessoAdministrativo' => '?string'
);


    /**
     * Descrição do Evento: "Cancelamento de NFS-e por Ofício"
     */
    public $descricao = null;

    /**
     * CPF do agente da administração tributária municipal que efetuou
     * o cancelamento por ofício de NFS-e
     */
    public $cpfAgenteTributario = null;

    /**
     * Número do processo administrativo municipal vinculado ao
     * cancelamento de NFS-e por ofício
     */
    public $numeroProcessoAdministrativo = null;

    /**
     * Descrição para explicitar o motivo indicado neste evento
     */
    public $descricaoProcessoAdministrativo = null;
}

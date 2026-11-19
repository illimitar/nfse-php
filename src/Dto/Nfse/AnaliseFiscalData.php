<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

/**
 * DTO para eventos e105104 e e105105 - Análise Fiscal de Cancelamento
 * e105104: Cancelamento Deferido por Análise Fiscal (TE105104)
 * e105105: Cancelamento Indeferido por Análise Fiscal (TE105105)
 * Baseado nos schemas tiposEventos_v1.01.xsd
 */
class AnaliseFiscalData extends Dto
{
    public static $__mapFrom = array (
  'descricao' => 'xDesc',
  'cpfAgenteTributario' => 'CPFAgTrib',
  'numeroProcessoAdministrativo' => 'nProcAdm',
  'codigoMotivo' => 'cMotivo',
  'descricaoMotivo' => 'xMotivo'
);
    public static $__propertyTypes = array (
  'descricao' => '?string',
  'cpfAgenteTributario' => '?string',
  'numeroProcessoAdministrativo' => '?string',
  'codigoMotivo' => '?string',
  'descricaoMotivo' => '?string'
);


    /**
     * Descrição do Evento
     * e105104: "Cancelamento de NFS-e Deferido por Análise Fiscal"
     * e105105: "Cancelamento de NFS-e Indeferido por Análise Fiscal"
     */
    public $descricao = null;

    /**
     * CPF do agente da administração tributária municipal que efetuou
     * o deferimento/indeferimento da solicitação de análise fiscal
     */
    public $cpfAgenteTributario = null;

    /**
     * Número do processo administrativo municipal vinculado à solicitação
     * de análise fiscal para cancelamento de NFS-e (opcional)
     */
    public $numeroProcessoAdministrativo = null;

    /**
     * Código do motivo da decisão fiscal
     * e105104: 1 - Cancelamento de NFS-e Deferido
     * e105105: 1 - Cancelamento de NFS-e Indeferido; 2 - Cancelamento de NFS-e Indeferido Sem Análise de Mérito
     */
    public $codigoMotivo = null;

    /**
     * Descrição para explicitar o motivo indicado neste evento
     */
    public $descricaoMotivo = null;
}

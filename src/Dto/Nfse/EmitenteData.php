<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class EmitenteData extends Dto
{
    public static $__mapFrom = array (
  'cnpj' => 'CNPJ',
  'cpf' => 'CPF',
  'inscricaoMunicipal' => 'IM',
  'nome' => 'xNome',
  'nomeFantasia' => 'xFant',
  'endereco' => 'enderNac',
  'telefone' => 'fone',
  'email' => 'email'
);
    public static $__propertyTypes = array (
  'cnpj' => '?string',
  'cpf' => '?string',
  'inscricaoMunicipal' => '?string',
  'nome' => '?string',
  'nomeFantasia' => '?string',
  'endereco' => '?EnderecoEmitenteData',
  'telefone' => '?string',
  'email' => '?string'
);


    /**
     * CNPJ do emitente.
     */
    public $cnpj = null;

    /**
     * CPF do emitente.
     */
    public $cpf = null;

    /**
     * Inscrição Municipal do emitente.
     */
    public $inscricaoMunicipal = null;

    /**
     * Razão Social ou Nome do emitente.
     */
    public $nome = null;

    /**
     * Nome Fantasia do emitente.
     */
    public $nomeFantasia = null;

    /**
     * Endereço do emitente.
     */
    public $endereco = null;

    /**
     * Telefone do emitente.
     */
    public $telefone = null;

    /**
     * Email do emitente.
     */
    public $email = null;
}

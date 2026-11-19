<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class IntermediarioData extends Dto
{
    public static $__mapFrom = array (
  'cnpj' => 'CNPJ',
  'cpf' => 'CPF',
  'nif' => 'NIF',
  'codigoNaoNif' => 'cNaoNIF',
  'caepf' => 'CAEPF',
  'inscricaoMunicipal' => 'IM',
  'nome' => 'xNome',
  'endereco' => 'end',
  'telefone' => 'fone',
  'email' => 'email'
);
    public static $__propertyTypes = array (
  'cnpj' => '?string',
  'cpf' => '?string',
  'nif' => '?string',
  'codigoNaoNif' => '?string',
  'caepf' => '?string',
  'inscricaoMunicipal' => '?string',
  'nome' => '?string',
  'endereco' => '?EnderecoData',
  'telefone' => '?string',
  'email' => '?string'
);


    /**
     * CNPJ do intermediário.
     * Obrigatório se pessoa jurídica.
     */
    public $cnpj = null;

    /**
     * CPF do intermediário.
     * Obrigatório se pessoa física.
     */
    public $cpf = null;

    /**
     * Número de Identificação Fiscal (NIF) do intermediário.
     * Não permitido se tpEmit=3.
     */
    public $nif = null;

    /**
     * Código do motivo de não informar o NIF.
     */
    public $codigoNaoNif = null;

    /**
     * Cadastro de Atividade Econômica da Pessoa Física.
     */
    public $caepf = null;

    /**
     * Inscrição Municipal do intermediário.
     */
    public $inscricaoMunicipal = null;

    /**
     * Razão Social ou Nome do intermediário.
     */
    public $nome = null;

    /**
     * Endereço do intermediário.
     */
    public $endereco = null;

    /**
     * Telefone do intermediário.
     */
    public $telefone = null;

    /**
     * Email do intermediário.
     */
    public $email = null;
}

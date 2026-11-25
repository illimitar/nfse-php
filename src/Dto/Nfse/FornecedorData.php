<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class FornecedorData extends Dto
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
     * CNPJ do fornecedor.
     */
    public $cnpj = null;

    /**
     * CPF do fornecedor.
     */
    public $cpf = null;

    /**
     * NIF do fornecedor.
     */
    public $nif = null;

    /**
     * Código do motivo de não informar o NIF.
     */
    public $codigoNaoNif = null;

    /**
     * CAEPF do fornecedor.
     */
    public $caepf = null;

    /**
     * Inscrição Municipal do fornecedor.
     */
    public $inscricaoMunicipal = null;

    /**
     * Razão Social ou Nome do fornecedor.
     */
    public $nome = null;

    /**
     * Endereço do fornecedor.
     */
    public $endereco = null;

    /**
     * Telefone do fornecedor.
     */
    public $telefone = null;

    /**
     * Email do fornecedor.
     */
    public $email = null;
}

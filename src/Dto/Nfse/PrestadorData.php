<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class PrestadorData extends Dto
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
  'email' => 'email',
  'regimeTributario' => 'regTrib'
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
  'email' => '?string',
  'regimeTributario' => '?RegimeTributarioData'
);


    /**
     * CNPJ do prestador.
     * Obrigatório se não for pessoa física.
     */
    public $cnpj = null;

    /**
     * CPF do prestador.
     * Obrigatório se pessoa física.
     */
    public $cpf = null;

    /**
     * Número de Identificação Fiscal (NIF) do prestador.
     * Não permitido se tpEmit=1.
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
     * Inscrição Municipal do prestador.
     */
    public $inscricaoMunicipal = null;

    /**
     * Razão Social ou Nome do prestador.
     */
    public $nome = null;

    /**
     * Endereço do prestador.
     */
    public $endereco = null;

    /**
     * Telefone do prestador.
     */
    public $telefone = null;

    /**
     * Email do prestador.
     */
    public $email = null;

    /**
     * Regime tributário do prestador.
     */
    public $regimeTributario = null;
}

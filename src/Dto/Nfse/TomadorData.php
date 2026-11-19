<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Nfse\Enums\MotivoNaoNif;
use Nfse\Support\DTO\EnumCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\MapFrom;

class TomadorData extends Dto
{
    public static $__mapFrom = array (
  'cpf' => 'CPF',
  'cnpj' => 'CNPJ',
  'nif' => 'NIF',
  'caepf' => 'CAEPF',
  'inscricaoMunicipal' => 'IM',
  'nome' => 'xNome',
  'endereco' => 'end',
  'telefone' => 'fone',
  'email' => 'email'
);
    public static $__propertyTypes = array (
  'cpf' => '?string',
  'cnpj' => '?string',
  'nif' => '?string',
  'codigoNaoNif' => '?MotivoNaoNif',
  'caepf' => '?string',
  'inscricaoMunicipal' => '?string',
  'nome' => '?string',
  'endereco' => '?EnderecoData',
  'telefone' => '?string',
  'email' => '?string'
);


    /**
     * CPF do tomador.
     * Obrigatório se pessoa física.
     */
    public $cpf = null;

    /**
     * CNPJ do tomador.
     * Obrigatório se pessoa jurídica.
     */
    public $cnpj = null;

    /**
     * Número de Identificação Fiscal (NIF) do tomador.
     * Não permitido se tpEmit=2.
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
     * Inscrição Municipal do tomador.
     */
    public $inscricaoMunicipal = null;

    /**
     * Razão Social ou Nome do tomador.
     */
    public $nome = null;

    /**
     * Endereço do tomador.
     */
    public $endereco = null;

    /**
     * Telefone do tomador.
     */
    public $telefone = null;

    /**
     * Email do tomador.
     */
    public $email = null;
}

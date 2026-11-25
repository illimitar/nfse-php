<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;

class ObraData extends Dto
{
    public static $__mapFrom = array (
  'inscricaoImobiliariaFiscal' => 'inscImobFisc',
  'codigoObra' => 'cObra',
  'codigoCib' => 'cCIB',
  'endereco' => 'end'
);
    public static $__propertyTypes = array (
  'inscricaoImobiliariaFiscal' => '?string',
  'codigoObra' => '?string',
  'codigoCib' => '?string',
  'endereco' => '?EnderecoData'
);


    /**
     * Inscrição imobiliária fiscal da obra.
     */
    public $inscricaoImobiliariaFiscal = null;

    /**
     * Número de identificação da obra (CNO ou CEI).
     */
    public $codigoObra = null;

    /**
     * Código do Cadastro Imobiliário Brasileiro (CIB).
     */
    public $codigoCib = null;

    /**
     * Endereço da obra.
     */
    public $endereco = null;
}

<?php

namespace Nfse\Dto\Nfse;

use Nfse\Dto\Dto;
use Spatie\DataTransferObject\Attributes\MapFrom;

class CodigoServicoData extends Dto
{
    public static $__mapFrom = array (
  'codigoTributacaoNacional' => 'cTribNac',
  'codigoTributacaoMunicipal' => 'cTribMun',
  'descricaoServico' => 'xDescServ',
  'codigoNbs' => 'cNBS',
  'codigoAtividadeSimplesNacional' => 'cAtvSN',
  'codigoCnae' => 'cCNAE',
  'codigoInternoContribuinte' => 'cIntContrib'
);
    /** @var array */
    public static $__castWith = array (
  'codigoAtividadeSimplesNacional' => array (
    'caster' => 'Nfse\Support\DTO\EnumCaster',
    'args' => array (
      'enumType' => 'Nfse\Enums\CodigoAtividadeSimplesNacional'
    )
  )
);
    public static $__propertyTypes = array (
  'codigoTributacaoNacional' => '?string',
  'codigoTributacaoMunicipal' => '?string',
  'descricaoServico' => '?string',
  'codigoNbs' => '?string',
  'codigoAtividadeSimplesNacional' => '?CodigoAtividadeSimplesNacional',
  'codigoCnae' => '?string',
  'codigoInternoContribuinte' => '?string'
);

    /**
     * XSD TSCodTribNac: exatamente 6 dígitos. UI e docs antigos usam "01.01" — converte para "010101".
     *
     * @param  string|int|float  $v
     * @return string
     */
    public static function normalizeTscodTribNac($v)
    {
        $s = trim((string) $v);
        if ($s === '') {
            return $s;
        }
        if (preg_match('/^[0-9]{6}$/', $s)) {
            return $s;
        }
        if (preg_match('/^([0-9]{1,2})\.([0-9]{1,2})(?:\.([0-9]{1,2}))?$/', $s, $m)) {
            $a = str_pad($m[1], 2, '0', STR_PAD_LEFT);
            $b = str_pad($m[2], 2, '0', STR_PAD_LEFT);
            $c = isset($m[3]) ? str_pad($m[3], 2, '0', STR_PAD_LEFT) : '01';

            return substr($a, -2).substr($b, -2).substr($c, -2);
        }
        $digits = preg_replace('/\D/', '', $s);
        if (strlen($digits) >= 6) {
            return substr($digits, 0, 6);
        }
        if (strlen($digits) === 4) {
            return $digits.'01';
        }

        return str_pad(substr($digits, 0, 6), 6, '0', STR_PAD_LEFT);
    }

    /**
     * Código de tributação nacional (LC 116/03).
     */
    public $codigoTributacaoNacional = null;

    /**
     * Código de tributação municipal.
     */
    public $codigoTributacaoMunicipal = null;

    /**
     * Descrição do serviço.
     */
    public $descricaoServico = null;

    /**
     * Código NBS (Nomenclatura Brasileira de Serviços).
     */
    public $codigoNbs = null;

    /**
     * Código da atividade do Simples Nacional (cAtvSN).
     */
    public $codigoAtividadeSimplesNacional = null;

    /**
     * Código CNAE (Classificação Nacional de Atividades Econômicas).
     */
    public $codigoCnae = null;

    /**
     * Código interno do serviço no sistema do contribuinte.
     */
    public $codigoInternoContribuinte = null;
}

<?php

namespace Nfse\Xml;

use InvalidArgumentException;
use Nfse\Enums\TipoAmbiente;

/**
 * Pacote de esquemas da DPS. Cada valor aponta para uma pasta em references/schemas.
 * Quem não informa a versão usa o ambiente: homologação no pacote novo, produção no atual.
 */
final class SchemaDps
{
    const Producao = '20261020';
    const Homologacao = '20261124';

    private function __construct()
    {
    }

    /**
     * @param mixed $ambiente
     * @return string
     */
    public static function padrao($ambiente)
    {
        if ((string) $ambiente === TipoAmbiente::Homologacao) {
            return self::Homologacao;
        }

        return self::Producao;
    }

    /**
     * @param mixed $schema
     * @param mixed $ambiente
     * @return string
     */
    public static function resolver($schema = null, $ambiente = null)
    {
        if ($schema === self::Producao || $schema === self::Homologacao) {
            return $schema;
        }

        if ($schema === null || $schema === '') {
            return self::padrao($ambiente);
        }

        throw new InvalidArgumentException('Schema não encontrado: '.$schema);
    }

    /**
     * @param string $schema
     * @return string
     */
    public static function pasta($schema)
    {
        $schema = self::resolver($schema);
        $pasta = dirname(__DIR__, 2).'/references/schemas/'.$schema;
        if (! is_dir($pasta)) {
            throw new InvalidArgumentException('Schema não encontrado: '.$schema);
        }

        return $pasta;
    }
}

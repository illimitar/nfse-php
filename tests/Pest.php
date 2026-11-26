<?php

if (! function_exists('validarContraSchema')) {
    /**
     * Valida um XML contra o pacote em references/schemas/{pacote}. O padrão é 20261020.
     *
     * Os pacotes oficiais usam expressões regulares com lookahead e âncoras (^/$), que não são
     * aceitas pela gramática de expressões do XML Schema e impedem o libxml de compilar o
     * esquema. A cópia usada aqui substitui apenas esses padrões.
     */
    function validarContraSchema(string $xml, string $schema, string $pacote = '20261020'): bool
    {
        $origem = __DIR__.'/../references/schemas/'.$pacote;
        $destino = sys_get_temp_dir().'/nfse-php-schemas/'.$pacote;

        if (! is_dir($destino)) {
            mkdir($destino, 0777, true);
        }

        foreach (glob($origem.'/*.xsd') as $arquivo) {
            $conteudo = str_replace(
                ['^(?!0{1,5}$)\d{1,5}$', '^0{0,4}\d{1,5}$'],
                '[0-9]{1,5}',
                file_get_contents($arquivo)
            );
            file_put_contents($destino.'/'.basename($arquivo), $conteudo);
        }

        $dom = new DOMDocument;
        $dom->loadXML($xml);

        $anterior = libxml_use_internal_errors(true);
        $valido = $dom->schemaValidate($destino.'/'.$schema);

        if (! $valido) {
            foreach (libxml_get_errors() as $erro) {
                fwrite(STDERR, trim($erro->message).PHP_EOL);
            }
        }

        libxml_clear_errors();
        libxml_use_internal_errors($anterior);

        return $valido;
    }
}
